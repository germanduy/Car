<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers' ;
    protected $primaryKey = 'Phone' ;
    protected $keyType='string';
    protected $fillable = [
        "Name",
        "Address",
        "Birthday",
        "created_at",
        "updated_at"
    ];

}
