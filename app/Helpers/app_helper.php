<?php
/**
 * Created by PhpStorm.
 * User: amro
 * Date: 12/21/16
 * Time: 11:38 AM
 */

use App\Facades\Batch\BatchService;
use App\Facades\PaymentRoleService;

function get_youtube_id($url)
{
    $pattern =
        '%^# Match any youtube URL
                (?:https?://)?  # Optional scheme. Either http or https
                (?:www\.)?      # Optional www subdomain
                (?:             # Group host alternatives
                  youtu\.be/    # Either youtu.be,
                | youtube\.com  # or youtube.com
                  (?:           # Group path alternatives
                    /embed/     # Either /embed/
                  | /v/         # or /v/
                  | /watch\?v=  # or /watch\?v=
                  )             # End path alternatives.
                )               # End host alternatives.
                ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
                $%x';
    $result = preg_match($pattern, $url, $matches);
    if ($result) {
        return $matches[1];
    }
    return '';
}

function remove_protocol($url)
{
    return preg_replace("(^https?://)", "", $url);
}

function get_order_key($branch_id)
{
    return 'SO-' . str_pad($branch_id, 2, "0", STR_PAD_LEFT) . '-' . strtoupper(substr(uniqid(sha1(time())), 10, 2)) . '-' . strtoupper(substr(uniqid(sha1(time())), 0, 4));
}

function get_promotion_code()
{
    return 'pc-' . strtolower(substr(uniqid(sha1(time())), 0, 6));
}

function paymentFee($batch_ids, $quantity)
{
    $sumPrice = $sumWeight = 0;
    if (isset($batch_ids) && !empty($batch_ids)) {
        foreach ($batch_ids as $batch_id) {
            $batch = BatchService::getOne($batch_id);
            $sumPrice += $batch->price * $quantity;
            $sumWeight += $batch->weight * $quantity;
        }
        $paymentRoles = PaymentRoleService::getList();
        if (isset($paymentRoles) && !empty($paymentRoles))
            foreach ($paymentRoles as $paymentRole) {
                if ($paymentRole->max_weight > 0) {
                    if ($sumPrice <= $paymentRole->max_amount && $sumWeight >= $paymentRole->min_weight && $sumWeight <= $paymentRole->max_weight) {
                        return $paymentRole->cost;
                    }
                } else {
                    if ($sumPrice < $paymentRole->max_amount) {
                        return $paymentRole->cost;
                    }
                }

            }
    }

    return 0;
}
