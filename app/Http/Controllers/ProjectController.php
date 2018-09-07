<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
	public function serveProjectPage($projectName) {
		
		$projects = array("attent", "ubuntufan", "timeline", "dionscape", "sudoku", "famouspeopleriddle");
		if (!in_array($projectName, $projects)) {
			abort(404);
		}
		return view('pages.project')->with('project', $projectName);
		
	}
}
