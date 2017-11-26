<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listChildCategory extends Model
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }


    protected  $fillable = ['childCategoryid','parentCategory','categoryname','categoryOrder'];
}
