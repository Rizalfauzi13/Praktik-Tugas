<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = ['name','category', 'descripsi','action_id'];

    // mendeinisikan relasi ke model student 1:M
    public function students()
 {
    return $this->hasMany(student ::class);
 }
}

