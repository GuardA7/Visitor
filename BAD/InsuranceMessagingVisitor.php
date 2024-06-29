<?php
require_once 'Bank.php';
require_once 'Company.php';
require_once 'Resident.php';
require_once 'Restaurant.php';

class InsuranceMessagingVisitor {

    public function sendInsuranceMails($clients) {
        foreach ($clients as $client) {
            if ($client instanceof Bank) {
                $this->visitBank($client);
            } elseif ($client instanceof Company) {
                $this->visitCompany($client);
            } elseif ($client instanceof Resident) {
                $this->visitResident($client);
            } elseif ($client instanceof Restaurant) {
                $this->visitRestaurant($client);
            } else {
                echo "Unknown client type.\n";
            }
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
