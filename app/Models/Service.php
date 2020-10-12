<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'laDate','prenomClient','nomClient', 'phone', 'user_id','statut',
    ];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function produits(){
        return $this->belongsToMany(Produit::class,'details_services','service_id', 'produit_id')->withPivot('taille', 'montant','total'); 
    }

}
