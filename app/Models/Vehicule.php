<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'modele',
        'nombredeplace',
        'prix',
        'disponibilite'

    ];

    public function reservation() {
        return $this->belongsToMany(Reservation::class ,'reservation_vehicule', 'idvehicule','idreservation');
        
    }
}
