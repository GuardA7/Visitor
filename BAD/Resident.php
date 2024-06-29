<?php
require_once 'Client.php';

class Resident extends Client {
    private $insuranceClass;

    public function __construct($name, $address, $number, $insuranceClass) {
        parent::__construct($name, $address, $number);
        $this->insuranceClass = $insuranceClass;
    }

    public function getInsuranceClass() {
        return $this->insuranceClass;
    }
}
?>
