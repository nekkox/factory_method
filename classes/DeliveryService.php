<?php

abstract class DeliveryService
{
 abstract  public function deliver(Parcel $parcel):void;
}