<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipes extends Model
{
    use HasFactory;
    protected $table='equipes';
    protected $primaryKey = 'id';
    protected $fillable=['id','tetulaire','nombre','date_de_creaction'];

}
