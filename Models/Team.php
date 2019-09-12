<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Team extends Model {
    protected $table = ‘users’;
    protected $fillable = [
        ‘name’,
        ‘username’,
        ‘password’
    ];
}
