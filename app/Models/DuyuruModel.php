<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DuyuruModel extends Model
{
  	 protected $table='tblduyurular';
    protected $primaryKey = 'DuyuruId';
    public $timestamps = true;
    protected $fillable = ['Baslik','Aciklama','created_at','updated_at'];
      protected $guarded = ["id"];
}
