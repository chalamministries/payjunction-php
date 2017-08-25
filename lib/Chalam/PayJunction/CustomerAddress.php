<?php
namespace Chalam\PayJunction;

class CustomerAddressClient extends Client
{
    /**
     * create a new customer vault
     * @param $customerId
     * @param $params
     * @return array|mixed
     */
    public function create($customerId, $params)
    {
        return $this->post("/customers/$customerId/addresses", $params);
    }

    /**
     * read a customer vault
     * @param $customerid
     * @param $id
     * @return array|mixed
     */
    public function read($customerId, $id)
    {
        return $this->get("/customers/$customerId/addresses/$id");
    }

    /**
     * index all customer vaults
     * @param $customerid
     * @return array|mixed
     */
    public function index($customerId)
    {
        return $this->get("/customers/$customerId/addresses");
    }

    /**
     * update existing customer vault
     * @param $customerId
     * @param $id
     * @param null $params
     * @return array|mixed
     */
    public function update($customerId, $id, $params = null)
    {
        return $this->put("/customers/$customerId/addresses/$id", $params);
    }

    /**
     * delete a customer vault
     * @param $customerId
     * @param $id
     * @return array|mixed
     */
    public function delete($customerId, $id)
    {
        return $this->del("/customers/$customerId/addresses/$id");
    }
}
