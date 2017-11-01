<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Provider\Uuid;

class Patient extends Model
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }

    protected $dataTables="datatables_data";
    protected  $fillable = ['partyid','givenName','familyName','middleName', 'birthday','age','address','email','obsIns','menopause','gender'];
}
