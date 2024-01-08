<?php

namespace App\Models\Facturation;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IntCatalogue extends Model
{
    use HasFactory;
    use Uuids;
    protected $table='intcatalogue';
    public $timestamps = false;
    protected $fillable=array('partenaires','compte_technique','commission','statut','periodicites','taux_commission','taux_conversion','commentaires','type','archived');
}
