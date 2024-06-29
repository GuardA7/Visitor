<?php
require_once 'Visitor.php';

class InsuranceMessagingVisitor implements Visitor {

    public function sendInsuranceMails($clients) {
        foreach ($clients as $client) {
            $client->accept($this);
        }
    }

    public function visitBank($bank) {
        echo "Sending mail about theft insurance to " . $bank->getName() . "<br>";
    }

    public function visitCompany($company) {
        echo "Sending employees and equipment insurance mail to " . $company->getName() . "<br>";
    }

    public function visitResident($resident) {
        echo "Sending mail about medical insurance to " . $resident->getName() . "<br>";
    }

    public function visitRestaurant($restaurant) {
        echo "Sending mail about fire and food insurance to " . $restaurant->getName() . "<br>";
    }
}
?>
