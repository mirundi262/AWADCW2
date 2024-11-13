<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if you follow Laravel's conventions)
    protected $table = 'students';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'reg_number',
        'grade',
        'course_enrolled',
    ];


}
