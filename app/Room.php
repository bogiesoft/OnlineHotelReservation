<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table='tbl_room';
    protected $fillable=['room_number','room_type','status','price'];
}
