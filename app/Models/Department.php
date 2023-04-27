<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
    ];

    public function designations() {
        return $this->hasOne(Designation::class, 'departmentId', 'id');
    }
}
