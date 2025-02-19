<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'Numeroclient',
        'nom',
        'email',
        'cartebancaire'
    ];

    public function reservation() {
        return $this->hasMany(Reservation::class);
        
    }

}
