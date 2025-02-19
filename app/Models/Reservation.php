<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'codereservation',
        'datereservation',
        'datealler',
        'dateretour',
        'idclient',
        'idDossierdelocation'
    ];

    public function client() {
        return $this->belongsTo(Client::class , 'idclient','id');
        
    }

    public function dossier_de_location() {
        return $this->belongsTo(Dossier_de_location::class , 'idDossierdelocation','id');
        
    }

    public function vehicule() {
        return $this->belongsToMany(Vehicule::class ,'reservation_vehicule', 'idreservation','idvehicule');
        
    }


}
