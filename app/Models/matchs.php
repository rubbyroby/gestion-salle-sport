<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matchs extends Model
{
    use HasFactory;
    
    protected $table='matchs';
    protected $primaryKey = 'id';
    protected $fillable=['id','titulaire','horaire','id_equipe','id_resultat','id_classement'];
    public function equipes()
    {
        return $this->belongsTo(equipes::class,'id_equipe');
    }
    public function resultats()
    {
        return $this->belongsTo(resultats::class,'id_resultat');
    }
    public function classements()
    {
        return $this->belongsTo(classements::class,'id_classsement');
    }
}
