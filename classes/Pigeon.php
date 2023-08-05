<?php
require_once "DeliveryService.php";
class Pigeon
extends DeliveryService
{

    public function deliver(Parcel $parcel): void
    {
        echo "$parcel Parcel was delivered by Pigeon <br>";
    }
}