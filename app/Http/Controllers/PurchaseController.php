<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\UserType;
use App\Models\PurchaseItems;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    //
    public function index()
    {
        $today = Carbon::today()->toDateString();
        $purchase = Purchase::select('sellerId', DB::raw('SUM(amount) as total'))
        ->where('purchaseDate', $today)
        ->groupBy('sellerId')
        ->get();
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
            'purchaseDate' =>   $request->purchaseDate,
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
       public function fetchPurchaseItem(Request $request)
       {        
        
           if($request->ajax()){
            //return $request->name;
            $data = PurchaseItems::where('sellerId',$request->id)
            ->whereNull('invoiceId')
            ->get();
           return response()->json($data);
        }
       }

       public function store(Request $request)
       {        
        PurchaseItems::where('sellerId',$request->sellerId)
        ->whereNull('invoiceId')
        ->update(['invoiceId'=>$request->invoiceId]);

        Purchase::create([
            'userId' => Auth::user()->id,
            'sellerId' => $request->sellerId,
            'purchaseDate' => $request->purchaseDate,
            'invoiceId' => $request->invoiceId,
            'amount' => $request->amount,
        ]);

        session()->flash('success', 'New Purchase saved successfully..!!');
        return redirect()->route('add.purchase');
       }
}