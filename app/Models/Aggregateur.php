<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aggregateur extends Model
{
    use HasFactory;

    public function index(){
        return "success";
    }

    protected $guarded=[];
}
