<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;

    
    protected $fillable = ['id'];

    public function Teacher()
    {
        return $this->hasOne(Teacher::class, 'subject_id');
    }
}
