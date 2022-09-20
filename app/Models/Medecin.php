<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Medecin extends Model
{
    use HasFactory;

    protected $guarded = [

    ];
    public function Consultation()
    {
        return $this->hasOne(Consultation::class);

   }
   public function patient()
   {
       return $this->HasMany(Patient::class);
    }

 }

