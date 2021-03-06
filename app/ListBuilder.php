<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListBuilder extends Model
{
     public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }

 protected  $fillable = ['id','partyid','listdata','createdBy'];
}
