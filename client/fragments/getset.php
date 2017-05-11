<?php

class Service {
    private $servId, $servProvider, $price , $date, $time;

    public function __construct($servId, $servProvider, $price, $date, $time)
    {
        $this->servId = $servId;
        $this->servProvider = $servProvider;
        $this->price = $price;
        $this->date = $date;
        $this->time = $time;
    }

    public function getServId()
    {
        return $this->servId;
    }

    public function setServId($servId)
    {
        $this->servId = $servId;
    }
    public function getServProvider()
    {
        return $this->servId;
    }

    public function setServProvider($servProvider)
    {
        $this->servId = $servId;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }
}


class Booking {
    private $service;

    public function __construct()
    {
        $this->service = [];
    }

    public function getService() {
        return $this->service;
    }

    public function addProduct(Service $service) {
        $this->service[] = $service;
    }

}
?>