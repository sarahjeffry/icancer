<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }

    //protected $fillable = ['name', 'description']; //Users are allowed to fill in these fields
    //protected $guarded = ['id']; //Only system is allowed to enter this field

    public function user() {
        return $this->belongsTo(Patient::class); //this=model task ni. file ni sendiri. Others: Has many, has one, belongs to
    }
}
