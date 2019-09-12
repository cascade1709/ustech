<?php
namespace App\Http\repo;
use App\Models\Players;


class Player
{
    public function getTeamPlayers($team_id)
    {
        $players = array();
        if (isset($team_id)){
            $players = Players::where('team_id',$team_id)->get();
        }
        return $players;
    }
}

?>