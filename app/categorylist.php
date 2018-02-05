<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorylist extends Model
{
   protected $table = 'categorylists';
   protected $fillable = ['checklistid','partyid','createdBy','created_at','updated_at'];
}
