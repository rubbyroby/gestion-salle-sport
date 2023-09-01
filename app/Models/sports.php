<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sports extends Model
{
    use HasFactory;
    protected $table='sports';
    protected $primaryKey = 'id';
    protected $fillable=['id','titulaire'];
}
