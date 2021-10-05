<?php


class Trainer extends Member
{
    private $charge;

    public function __construct($name, $birthday, $country, $yellowCard, $redCard,$charge)
    {
        parent::__construct($name, $birthday, $country, $yellowCard, $redCard);
        $this->charge = $charge;
    }

    public function render(){
        return '<div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4" style="background-color: red">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">' . $this->name . '</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                </div>
                                <!-- Product price-->
                                <p>Edad: ' . $this->age() . '</p>
                                <p>Country: ' . $this->country . '</p>
                                <p>Charge: ' . $this->charge . '</p>
                                <p>Tarjetas Rojas: ' . $this->redCard . '</p>
                                <p>Tarjetas Amarillas: ' . $this->yellowCard . '</p>
                            </div>
                        </div>
                    </div>
                </div>';
    }

}