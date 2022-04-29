<?php
namespace App\Models;

class Booking 
{
    public $submitted_payment;
    public $needed_payment;
    public $due_payment;

    public function setBooking($submit,$needed){

        $this->submitted_payment = $submit;
        $this->needed_payment = $needed;
    }

    public function getBooking(){
        $this->due_payment = $this->needed_payment-$this->submitted_payment;
        return $this->due_payment;
    }
}