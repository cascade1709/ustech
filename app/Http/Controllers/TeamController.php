<?php

namespace App\Http\repo;
namespace App\Http\Controllers;

use App\Http\repo\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class TeamController extends Controller
{
  private $team;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    public function getTeam(Request  $request) { 
       $team_id = $request->get('id');
       return $this->team->getTeam($team_id);
    }

    public function setTeamPlayer($teamid, $playerid) {

    }

    // public function 



    //
}
