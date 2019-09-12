<?php
// use App\repo;
namespace App\Http\repo;
namespace App\Http\Controllers;

class TeamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getTeam($teamid = null) {
      $team = new Team();
      $data = $team->getTeam();
      dd($data);
    }
    public function setTeamPlayer($teamid, $playerid) {
      new team($playerid);
    }

    //
}
