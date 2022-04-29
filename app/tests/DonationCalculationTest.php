<?php

class BookingTest extends \PHPUnit\Framework\TestCase{

    protected $DonationCalculation;

    public function testCalculation(){

        $this->DonationCalculation=new \App\Models\User;

        $this->user->setdonation(2000,1000);

        $this->assertEquals($this->booking->getdonation(),3000);
    }
}