<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier_de_location extends Model
{
    use HasFactory;
    protected $fillable = [
        'idlocation',
        'Paye'
    ];

    public function reservation() {
        return $this->hasOne(Reservation::class);
        
    }
}
