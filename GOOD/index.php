<?php
require_once 'Bank.php';
require_once 'Resident.php';
require_once 'Company.php';
require_once 'Restaurant.php';
require_once 'InsuranceMessagingVisitor.php';

// Buat objek klien
$clients = [
    new Bank("bank_name", "bank_address", "bank_number", 10),
    new Resident("resident_name", "resident_address", "resident_number", "A"),
    new Company("company_name", "company_address", "company_number", 1000),
    new Restaurant("resto_name", "resto_address", "resto_number", true)
];

// Buat objek visitor
$visitor = new InsuranceMessagingVisitor();
$visitor->sendInsuranceMails($clients);
?>
