<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offencelist extends Model
{
    use HasFactory;

    protected $fillable = [
        'offencename',
        'offencetype',
        'offencefine',
        'createdby',
    ];

    public function offences()
{
    return $this->hasMany(Offence::class, 'offencecommitted', 'offencename');
}

}
