<?php

class Parcel
{
    private String $orderID;
    public function __construct($orderID)
    {
        $this->orderID = $orderID;
    }

    /**
     * @return String
     */
    public function getOrderID(): string
    {
        return $this->orderID;
    }

    public function __toString(): string
    {
        return $this->orderID;
    }

}