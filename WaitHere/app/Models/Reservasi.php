<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $primaryKey = 'reservasi_id';
    protected $table = 'reservasi';
    public $timestamps = false;
}
