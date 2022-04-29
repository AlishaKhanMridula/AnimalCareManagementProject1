<?php
namespace App\Models;

class Booking 
{
    public $previous_donation;
    public $new_donation;
    public $total_donation;

    public function setdonation($previous,$new){

        $this->previous_donation = $previous;
        $this->new_donation = $new;
    }

    public function getdonation(){
        $this->total_donation = $this->previous_donation+$this->new_donation;
        return $this->total_donation;
    }
}