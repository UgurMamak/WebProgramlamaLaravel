<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DilekModel extends Model
{
    protected $table='tblistekler';
    protected $primaryKey = 'istekId';
    public $timestamps = true;
    protected $fillable = ['AdSoyad','istek','created_at','updated_at'];
    protected $guarded = ["id"];
}
