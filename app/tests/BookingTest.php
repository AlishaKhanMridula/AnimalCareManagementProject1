<?php

class BookingTest extends \PHPUnit\Framework\TestCase{

    protected $booking;

    public function testBooking(){

        $this->booking=new \App\Models\User;

        $this->user->setBooking(2000,1000);

        $this->assertEquals($this->booking->getBooking(),1000);
    }
}