<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTb extends Model
{
    protected $table = 'student_tb';
    use HasFactory;
    protected $fillable = ['index_no', 'full_name', 'address', 'fathers_name', 'contact_no_1', 'contact_no_2', 'memo', 'grade_or_floor'];
}
