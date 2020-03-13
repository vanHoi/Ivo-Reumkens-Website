<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PinController extends BaseController
{
    public function servePinPage() {
        $hour = $this->getCurrentHour();
        $code = $this->calculateCode();
        return view('pin.pin')->with('hour', $hour)->with('code', $code);
    }

    private function calculateCode() {
        $timeHours = date("H");
        $dateDays = date("d");
        $combined = $timeHours + $dateDays + 2;
        $reversed = strrev(strval($combined));
        $reversedFirstInt = intval(substr($reversed, 0, 1));
        $reversedSecondInt = intval(substr($reversed, -1, 1));
        $firstNumber = strval($reversedFirstInt - 1);
        $fourthNumber = strval($reversedSecondInt + 1);
        return "{$firstNumber}{$reversed}{$fourthNumber}";
    }

    private function getCurrentHour() {
        return date("H");
    }
}
