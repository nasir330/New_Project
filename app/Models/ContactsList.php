<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsList extends Model
{
    use HasFactory;
    protected $guarded =[];

    //Table relation with user table
    public function users(){
        return $this->belongsTo(User::class, 'userId', 'id');
    }
}
