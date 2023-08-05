<?php
require_once "Parcel.php";
require_once "PostOffice.php";
class OrderLifecycle
{

    public function processOrder(String $orderID):void{
        $parcel = $this->prepareParcel($orderID);
        $deliveryService = $this->deliveryService();
        $deliveryService->deliver($parcel);
    }

    protected function deliveryService():DeliveryService{
        return new PostOffice();
    }

    private function prepareParcel(String $orderID):Parcel{
        $parcel = new Parcel($orderID);
        print "Parcel $orderID was prepared : ";
        return $parcel;
    }

}