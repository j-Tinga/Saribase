<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Supplier;
use DB;

class PagesController extends Controller
{
    public function index(){
        $items = DB::table('item')->join('supplier', 'item.supplierID', '=', 'supplier.supplierID')->get();
        $tags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->get();
        $brands = Brand::all();
        $suppliers = Supplier::all();
        return view('Item.item')
        ->with('items', $items)
        ->with('tags', $tags)
        ->with('suppliers', $suppliers)
        ->with('brands', $brands);
    }

    public function addActions(Request $request){
        $items = DB::table('item')->join('supplier', 'item.supplierID', '=', 'supplier.supplierID')->get();
        $tags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->get();
        $brands = Brand::all();
        $suppliers = Supplier::all();

        if($request->button == "Add Item"){
            return view('Item.item')
            ->with('items', $items)
            ->with('tags', $tags)
            ->with('suppliers', $suppliers)
            ->with('brands', $brands)
            ->with('newItem', 1);
        }
    }
}
