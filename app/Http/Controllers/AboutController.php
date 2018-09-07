<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{
	public function serveAboutPage() {
		$age = $this->calculateAge("16-07-1996");
		return view('pages.about')->with('age', $age);
	}
	
	private function calculateAge($birthDate) {
		//explode the date to get month, day and year
		$birthDate = explode("-", $birthDate);
		//get age from date or birthdate
		$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
			? ((date("Y") - $birthDate[2]) - 1)
			: (date("Y") - $birthDate[2]));
		return $age;
	}
}
