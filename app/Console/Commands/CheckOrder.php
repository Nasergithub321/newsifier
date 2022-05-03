<?php

namespace App\Console\Commands;

use App\Constants\Constants;
use App\Events\CreateOrderEvent;
use App\Facades\Order\OrderService;
use App\Facades\Payment\PaymentService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class CheckOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check In Waiting Order in Payment GateWay';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $access_token = PaymentService::getAccessToken(config('app.SERVICE_ACCOUNT_API_KEY'));
        $check_header = [
            "Content-Type" => 'application/vnd.ni-payment.v2+json',
            "Accept" => "application/vnd.ni-payment.v2+json",
            "Authorization" => "Bearer " . $access_token,
        ];

        $orders = OrderService::getList(['status_id' => Constants::ORDER_STATUS[Constants::ORDER_IN_WAITING],
            'payment_method' => Constants::PAYMENT_GATEWAY,
            'date_from' => Carbon::now()->hours(-2)->format('Y-m-d H:i:s')
        ]);
        if ($orders->isNotEmpty()) {
            foreach ($orders as $order) {
                if ($order->payment && $order->payment->order_reference != '') {
                    try {
                        $check_url = config('app.payment_link') . 'transactions/outlets/' . config('app.OUTLET_REFERENCE') . '/orders/' . $order->payment->order_reference;
                        $check_response = Http::withHeaders($check_header)
                            ->get($check_url, []);

                        $check_result = array(json_decode((string)$check_response->getBody(), true))[0];

                        $dataPayment['payment_status'] = $check_result["_embedded"]['payment'][0]['state'];
                        if ($check_result["_embedded"]['payment'][0]['state'] == Constants::PAYMENT_CAPTURED) {
                            $dataPayment['capture_reference'] = basename($check_result["_embedded"]["payment"][0]["_embedded"]["cnp:capture"][0]["_links"]["self"]["href"]);
                            $this->info($order->payment->id . ' Successfully Check Orders.');

                            PaymentService::update($dataPayment, $order->payment);
                            OrderService::update(['status_id' => Constants::ORDER_STATUS[Constants::ORDER_PENDING]], $order);
                            event(new CreateOrderEvent($order));
                        } else {
                            $this->info($order->payment->id . ' Failed Check Orders.');
                        }
                    } catch (\Exception $e) {
                        $this->info($order->payment->id . ' ' . $e->getMessage());

                    }
                }
            }
        }
        $this->info(Carbon::now()->format('Y-m-d H:i:s') . ' Successfully Check Orders.');
    }
}
