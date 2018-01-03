<?php
namespace Chalam\PayJunction;

class SmartTerminalClient extends Client
{
    /**
     * @description request payment from terminal
     * @param $id
     * @param $params
     * @return array|mixed
     */
    public function request($id, $params)
    {
        return $this->post('/smartterminals/' . $id . '/request-payment', $params);
    }

    /**
     * @description return terminal to main screen
     * @param $id
     * @return array|mixed
     */
    public function main($id)
    {
        return $this->post('/smartterminals/'.$id .'/main');

    }

    /**
     * @description returns status of payment transaction from terminal
     * @param $paymentId
     * @return array|mixed
     */
    public function status($paymentId)
    {
        return $this->get('/smartterminals/requests/'.$paymentId);

    }

    /**
     * @description lists smart terminals on account
     * @return array|mixed
     */
    public function list()
    {
        return $this->get('/smartterminals');

    }
}
