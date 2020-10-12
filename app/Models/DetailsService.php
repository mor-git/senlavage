<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsService extends Model
{
    use HasFactory;

    public function produits(){
        return $this->belongsTo(Produit::class,'produit_id');
    }
    public function services(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
