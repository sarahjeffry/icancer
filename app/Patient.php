<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    public static function count()
    {
    }

    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }

    protected $fillable = ['name', 'NRIC','MRN', 'Sex', 'Height', 'Weight', 'BMI', 'Type', 'Smoking']; //Users are allowed to fill in these fields
    //protected $guarded = ['id']; //Only system is allowed to enter this field

    public function user() {
        return $this->belongsTo(Patient::class); //this=model task ni. file ni sendiri. Others: Has many, has one, belongs to
    }
}
