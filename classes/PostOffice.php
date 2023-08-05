<?php
require_once "DeliveryService.php";

class PostOffice extends DeliveryService
{

    public function deliver(Parcel $parcel): void
    {
        echo "$parcel Parcel was delivered by PostOffice <br>";
    }
}