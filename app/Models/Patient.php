<?php

namespace App\Models;

use App\Models\Rdv;
use App\Models\Medecin;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function Payement()
    {
        return $this->hasOne(Payement::class);

   }

   public function medecin()

    {
        return $this->belongsTo(Medecin::class);

   }

 }


