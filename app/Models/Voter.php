<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'dob', 'gender', 'occupation', 'current_district', 'current_province', 'religion', 'maritalStatus'];
}
