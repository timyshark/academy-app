<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['first_name','last_name','emai','gender','picturePath','isActive', 'dob', 'school'];
    //
}