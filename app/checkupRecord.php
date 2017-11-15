<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkupRecord extends Model
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
    protected $dataTables="datatables_data";
    protected  $fillable = ['complaint_summary','complaint_details','partyid','checkupid','diagnosis_details','treatment_gvn'];
}
