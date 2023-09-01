<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classements extends Model
{
    use HasFactory;
    protected $table='classements';
    protected $primaryKey = 'id';
    protected $fillable=['id','note'];
    
    

}
