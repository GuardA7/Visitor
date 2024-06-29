<?php
require_once 'InsuranceMessagingVisitor.php';

class MainApp {

    public static function main($args) {
        $clients = [
            new Bank("bank_name", "bank_address", "bank_number", 10),
            new Resident("resident_name", "resident_address", "resident_number", "A"),
            new Company("company_name", "company_address", "company_number", 1000),
            new Restaurant("resto_name", "resto_address", "resto_number", true)
        ];

        $visitor = new InsuranceMessagingVisitor();
        $visitor->sendInsuranceMails($clients);
    }
}

// To run the main method
MainApp::main([]);
?>
