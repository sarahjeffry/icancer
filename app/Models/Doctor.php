<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model {

    //protected $table = 'tasks'; //Kena ada quote since task is a string.
    //satu model satu table, model = representation of database

    //protected $fillable = ['name', 'description']; //Users are allowed to fill in these fields
    protected $guarded = ['id']; //Only system is allowed to enter this field

    public function user() {
        return $this->belongsTo(User::class); //this=model task ni. file ni sendiri. Others: Has many, has one, belongs to
    }
}
