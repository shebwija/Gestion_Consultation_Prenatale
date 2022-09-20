<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
    protected $guarded = [

    ];
    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patients_id');
    }

    public function Consultation()
    {
        return $this->belongsTo(Consultation::class, 'consultations_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}
