<?php

namespace common\components;

use common\models\PaymentLog;

use Payjp\Payjp;
use Payjp\Charge;
use Payjp\Error\Base as PayjpException;

use DateTime;

class PayJpComponent
{
    public function __construct($key) {
        Payjp::setApikey($key);
    }

    /**
     * Transaction
     * @param $transaction
     * @return bool
     */
    public function transaction($token, $amount) {
        $requestParams = [
            "amount" => $amount,
            "currency" => "jpy",
            "card" => $token,
        ];

        $log = new PaymentLog;
        $log->time_request = (new DateTime)->format('Y-m-d H:i:s');
        $log->request = json_encode($requestParams);

        try {
            $result = Charge::create($requestParams);
            $log->response = $result->__toJSON();
            $log->status = 1;
        } catch (PayjpException $pe) {
            $log->response = $pe->getHttpBody();
            $log->status = 0;
            $result = false;
        }
        $log->save();
        return $result;
    }

}
