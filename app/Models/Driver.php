<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'licencenumber',
        'idnumber',
        'phonenumber',
        'dob',
        'bloodgroup',
        'email',
        'password',
    ];

    public function offencesHistory()
{
    return $this->hasMany(Offence::class, 'DriverLicenceNumber', 'licencenumber');
}
}
    