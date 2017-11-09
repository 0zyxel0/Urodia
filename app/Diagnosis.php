<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Provider\Uuid;

class Diagnosis extends Model
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }


    protected  $fillable = ['diagnosisid','partyid'];
}
