<?php
abstract class Client {
    private $name;
    private $address;
    private $number;

    public function __construct($name, $address, $number) {
        $this->name = $name;
        $this->address = $address;
        $this->number = $number;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getNumber() {
        return $this->number;
    }

    public abstract function accept($visitor);
}
?>
