<?php
require_once 'Client.php';

class Restaurant extends Client {
    public $availableAbroad;

    public function __construct($name, $address, $number, $availableAbroad) {
        parent::__construct($name, $address, $number);
        $this->availableAbroad = $availableAbroad;
    }

    public function accept($visitor) {
        $visitor->visitRestaurant($this);
    }
}
?>
