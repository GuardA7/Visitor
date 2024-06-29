<?php
require_once 'Client.php';

class Bank extends Client {
    private $branchesInsured;

    public function __construct($name, $address, $number, $branchesInsured) {
        parent::__construct($name, $address, $number);
        $this->branchesInsured = $branchesInsured;
    }

    public function getBranchesInsured() {
        return $this->branchesInsured;
    }

    public function accept($visitor) {
        $visitor->visitBank($this);
    }
}
?>
