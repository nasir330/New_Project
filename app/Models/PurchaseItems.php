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
        return $this->rate*$this->qty;
    }
    //Invoice table relation
    public function purchase() {
        return $this->belongsTo(Purchase::class, 'invoiceId', 'invoiceId');
    }
}
