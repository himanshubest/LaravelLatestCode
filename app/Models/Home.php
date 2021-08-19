<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Home extends Model
{
    //use HasFactory;
   // public $timestamps=false;
   protected $table = 'tbl_userlogin';
    protected $fillable=['FirstName','LastName','EmailID','Pass'];
}
