<?php
require_once 'Client.php';

class Company extends Client {
    private $nbrOfEmployees;

    public function __construct($name, $address, $number, $nbrOfEmployees) {
        parent::__construct($name, $address, $number);
        $this->nbrOfEmployees = $nbrOfEmployees;
    }

    public function getNbrOfEmployees() {
        return $this->nbrOfEmployees;
    }
}
?>
