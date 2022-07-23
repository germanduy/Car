<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars' ;
    protected $primaryKey = 'carID' ;
    protected $keyType='string';
    protected $fillable = [
        "Name",
        "Brand",
        "Option",
        "Status",
        "Image",
        "created_at",
        "updated_at"
    ];
}
