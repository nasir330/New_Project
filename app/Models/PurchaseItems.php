<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseItems extends Model
{
    use HasFactory;
    protected $guarded =[];

    //total attribute
    public function getTotalAttribute()
    {
        return $this->itemRate*$this->itemQty;
    }

     //Table relation with user table
     public function contacts(){
        return $this->belongsTo(ContactsList::class, 'sellerId');
    }
    //Invoice table relation
    public function purchase() {
        return $this->belongsTo(Purchase::class, 'invoiceId', 'invoiceId');
    }
}
