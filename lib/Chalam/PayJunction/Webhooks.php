<?php
namespace Chalam\PayJunction;

class Webhooks extends Client
{
    /**
     * @description create a webhook
     * @param $params
     * @return array|mixed
     */
    public function create($params)
    {
        return $this->post('/webhooks', $params);
    }

    /**
     * @description list webhooks
     * @return array|mixed
     */
    public function list()
    {
        return $this->get('/webhooks');

    }

    /**
     * @description returns status of payment transaction from terminal
     * @param $webhookId
     * @param $params
     * @return array|mixed
     */
    public function update($webhookId)
    {
        return $this->put('/webhooks/'.$id, $params);

    }

    /**
     * @description deletes webhook
     * @return array|mixed
     */
    public function delete($webhookId)
    {
        return $this->delete('/webhooks/'.$id);

    }
}
