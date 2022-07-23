<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs' ;
    protected $primaryKey = 'sID' ;
    protected $keyType='string';
    protected $fillable = [
        "Name",
        "Address",
        "Birthday",
        "Salary",
        "Phone",
        "created_at",
        "updated_at"
    ];
}
