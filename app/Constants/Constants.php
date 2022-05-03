<?php


namespace App\Constants;

use App\Facades\InventoryTransactionService;

class Constants
{
    const ATTRIBUTE_LIST_TYPE = 'List';
    const ATTRIBUTE_VALUE_TYPE = 'Value';
    const BLOCK_CATEGORY = ['Photo Gallery', 'Video Gallery', 'Blog', 'Stuff', 'Slider', 'Events', 'News', 'Services'];
    const ATTRIBUTE_TYPE = ['0' => 'List', '1' => 'Value'];
    const ADDRESS_REFER = ['user' => "App\Models\User"];
    const INVENTORY_TRANSACTION_TYPE = ['in', 'out'];
    const PROMOTION_ACTIVE = '1';
    const SITE_SETTING_KEYS = ['Vat', 'Minimum Order', 'Delivery Fee', 'Site Title',
        'Facebook', 'Instagram', 'Twitter', 'What\'s Up', 'New User Promotion', 'Promotion Valid Months'];
    const ADS_TYPE = ['notification'];
    const ADS_ACTION = ['category', 'item', 'offer', 'recipe'];
    const NOTIFICATION_TYPES = ['0' => 'Create User'];

    const CURRENCY = [
        ''
    ];
    const ORDER_STATUS = [
        'IN_WAITING' => 0,
        'PENDING' => 1,
        'ACCEPTED' => 2,
        'IN_PROGRESS' => 3,
        'READY' => 4,
        'ON_THE_WAY' => 5,
        'COMPLETED' => 6,
        'REJECTED' => 7,
        'CANCELED' => 8,
        'RFQ_PENDING' => -1
    ];
    const ORDER_STATUS_NAME = [
        '-1' => 'RFQ_PENDING',
        '0' => 'IN_WAITING',
        '1' => 'PENDING',
        '2' => 'ACCEPTED',
        '3' => 'IN_PROGRESS',
        '4' => 'READY',
        '5' => 'ON_THE_WAY',
        '6' => 'COMPLETED',
        '7' => 'REJECTED',
        '8' => 'CANCELED',
    ];

    const ORDER_IN_WAITING = 'IN_WAITING';
    const ORDER_PENDING = 'PENDING';
    const ORDER_ACCEPTED = 'ACCEPTED';
    const ORDER_IN_PROGRESS = 'IN_PROGRESS';
    const ORDER_READY = 'READY';
    const ORDER_REJECTED = 'REJECTED';
    const ORDER_ON_DELIVERY = 'ON_THE_WAY';
    const ORDER_DONE = 'COMPLETED';
    const ORDER_CANCELED = 'CANCELED';
    const ORDER_RFQ_PENDING = 'RFQ_PENDING';

    const GUEST_USER_ID = 2;

    const PAYMENT_STATUSES = [
        "PENDING",
        "AUTHORISED",
        "CAPTURED",
        "AWAIT_3DS",
        "FAILED"
    ];

    const PAYMENT_PENDING = 'PENDING';
    const PAYMENT_AUTHORISED = 'AUTHORISED';
    const PAYMENT_CAPTURED = 'CAPTURED';
    const PAYMENT_AWAIT_3DS = 'AWAIT_3DS';
    const PAYMENT_FAILED = 'FAILED';
    const PAYMENT_REFUNDED = 'REFUNDED';
//    const PAYMENT_CASH_ON_DELIVERY = '1';
    const PAYMENT_BANK_TRANSFER = '1';
    const PAYMENT_GATEWAY = '2';

    const PAYMENT_METHOD = [
        '1' => 'PAYMENT_BANK_TRANSFER',
        '2' => 'PAYMENT_GATEWAY',
    ];

    const ORDER_REFUND_NOTE_STATUS = [
        'PENDING' => 0,
        'ACCEPTED' => 1,
        'REJECTED' => 2,
    ];
    const ORDER_REFUND_NOTE_STATUS_NAME = [
        '0' => 'PENDING',
        '1' => 'ACCEPTED',
        '2' => 'REJECTED',
    ];

    const ORDER_REFUND_NOTE_PENDING = 'PENDING';
    const ORDER_REFUND_NOTE_ACCEPTED = 'ACCEPTED';
    const ORDER_REFUND_NOTE_REJECTED = 'REJECTED';

    const MAX_LIMIT = 1000;
}
