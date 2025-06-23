<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'artikelnummer', 'omschrijving', 'leverancier', 'artikelgroep',
        'eenheid', 'prijs', 'aantal', 'created_at', 'updated_at'
    ];
}
