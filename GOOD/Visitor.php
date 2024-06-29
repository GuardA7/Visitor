<?php
interface Visitor {
    public function visitBank($bank);
    public function visitCompany($company);
    public function visitResident($resident);
    public function visitRestaurant($restaurant);
}
?>
