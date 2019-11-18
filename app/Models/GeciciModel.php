<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeciciModel extends Model
{
    protected $table='tblgecici';
    public $timestamps = true;
    protected $fillable = ['ad','kulid','soyad','mail','telefon','created_at','updated_at'];
    protected $guarded = ["id"];
}
 