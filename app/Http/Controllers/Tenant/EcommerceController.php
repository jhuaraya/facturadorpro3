<?php
namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use App\Models\Tenant\Item;


class EcommerceController extends Controller
{

    public function index()
    {
        return view('tenant.ecommerce.index');
    }

    public function item($id)
    {
        $record = Item::find($id);
        return view('tenant.ecommerce.items.record', compact('record'));
    }

    public function items()
    {
        $records = Item::where('apply_store', 1)->get();
        return view('tenant.ecommerce.items.index', compact('records'));
    }

    public function partialItem($id)
    {   
        $record = Item::find($id);
        return view('tenant.ecommerce.items.partial', compact('record'));
    }




   
      
}