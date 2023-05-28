<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded =[];
    
     //Table relation with user table
     public function contacts(){
        return $this->belongsTo(ContactsList::class, 'sellerId', 'userId');
    }
}
