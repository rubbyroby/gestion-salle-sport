<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resultats extends Model
{
    use HasFactory;
    protected $table='resultats';
    protected $primaryKey = 'id';
    protected $fillable=['id','note'];

}
