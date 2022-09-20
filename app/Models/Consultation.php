<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patients_id');
    }

    public function Medecin()
    {
        return $this->belongsTo(Medecin::class, 'medecins_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}



