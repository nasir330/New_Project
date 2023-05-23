<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\UserType;
use App\Models\PurchaseItems;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    //
    public function index()
    {
        $purchase = Purchase::all();
        return view('pages.purchase.index',['purchase' => $purchase]);
    }

    //add purchase page
     public function create()
    {        
        return view('pages.purchase.create');
    }
    //add purchase Items
     public function addPurchaseItem(Request $request)
    {        
        $data = $request->all();
        $purchaseItem = PurchaseItems::create([
            'userId' =>  Auth::user()->id,
            'sellerId' =>   $request->sellerId,
            'description' =>  $request->description,
            'itemRate' =>  $request->itemRate,
            'itemQty' =>  $request->itemQty,
        ]);
        if( $purchaseItem){
            $message ='Item added..!!';
            return response()->json([
                'message'=>$message,
            ]);
          }              
    }
       //fetch purchase Items
       public function fetchPurchaseItem($id)
       {        
         $purchaseItem = PurchaseItems::where('userId',$id)
           ->whereNull('invoiceId')
           ->get();
          
           return response()->json($purchaseItem);
       }
}