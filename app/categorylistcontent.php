<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorylistcontent extends Model
{
     protected $table = 'categorylistcontents';
   protected $fillable = ['checklistid','categoryid','created_at','updated_at'];
}
