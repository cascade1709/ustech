<?php
namespace App\Http\repo;

class Team {


  public function getTeam($team_id) {
    if(isset($team_id))
    {
      return [1];
    }
    else
    {
      return [1,2,3]
    }
  }

}

?>
