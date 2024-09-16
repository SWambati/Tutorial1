<?php
class details3 {
    private $details2;
    private $viewDetails;

    public function __construct($conn) {
        $this->details2 = new Details2($conn);
        $this->viewDetails = new viewDetails();
    }

    public function displayDetails() {
        $details = $this->details2->getDetails();
        $this->userView->displayDetails($details);
    }
}
?>