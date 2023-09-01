<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joueurs extends Model
{
    use HasFactory;
    protected $table='joueur';
    protected $primaryKey = 'id';
    protected $fillable=['id','nom','prenom','date_de_naissance','taill','poids'];
    public function equipes()
    {
        return $this->belongsTo(equipes::class,'id_equipe');
    }
    public function sports()
    {
        return $this->belongsTo(sports::class,'id_sport');
    }
    
}
