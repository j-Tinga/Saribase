<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Brand;
use App\Models\Supplier;
use DB;
use Session;
class ItemController extends Controller
{
    public function itemView()
    {
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

    public function itemActions(Request $request)
    {
        if($request->button == "Edit"){
            $items = DB::table('item')->join('supplier', 'item.supplierID', '=', 'supplier.supplierID')->get();
            $tags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->get();
            $brands = Brand::all();
            $suppliers = Supplier::all();
            $editItem = DB::table('item')->where('itemID', $request->id)->first();
            return view('Item.item')
            ->with('items', $items)
            ->with('tags', $tags)
            ->with('suppliers', $suppliers)
            ->with('editItem', $editItem)
            ->with('brands', $brands);
            
        }else if ($request->button == "Delete"){
            return $this->destroy($request->id);
        }
    }

    //-------=======Item Actions======-------
    public function newItem(Request $request)
    {
        $item = new Item;
        $item->itemName = $request->name;
        $item->price = $request->price;
        $item->sellingPrice = $request->sellPrice;
        $item->unitCount = $request->unitCount;
        $item->brandID = $request->brandID;
        $item->employeeNote = "Test";
        $item->itemDescription = "Test";
        $item->supplierID = $request->itemSupplier;
        $item->save();
        
        return $this->itemView();
    }

    public function editItemActions(Request $request)
    {
        if($request->button == "Update"){
            return $this->editItem($request);
        }else if($request->button == "Edit Tags"){
            Session::put('item', $request->id);
            $tags = DB::table('tag_List')->where('itemID','=',Session::get('item'))->pluck('tagID');
            $activeTags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->where('tag_List.itemID','=',Session::get('item'))->get();
            $materialTags =  DB::table('tag')->where('tagType','=','Material')->whereNotIn('tagID', $tags)->get();
            $toolTags = DB::table('tag')->where('tagType','=','Tool')->whereNotIn('tagID', $tags)->get();
            $colorTags = DB::table('tag')->where('tagType','=','Color')->whereNotIn('tagID', $tags)->get();
            return view('Item.Tag.tags')
            ->with('activeTags', $activeTags)
            ->with('materialTags', $materialTags)
            ->with('toolTags', $toolTags)
            ->with('colorTags', $colorTags);
        }
    }

    public function destroyItem($id)
    {
        Item::destroy($id);
        return $this->itemView();
    }

    public function editItem(Request $request)
    {
        $item = Item::find($request->id);
        $item->itemName = $request->name;
        $item->price = $request->price;
        $item->sellingPrice = $request->sellPrice;
        $item->unitCount = $request->unitCount;
        $item->supplierID = $request->itemSupplier;
        $item->brandID = $request->itemBrand;

        $item->save();
        return $this->itemView();
    }
    //-------=======Item Actions End======-------

    //-------=======Brand Actions======-------
    public function newBrand(Request $request)
    {
        $brand = new Brand;
        $brand->brandName = $request->brandName;
        $brand->brandDescription = "Brand Description";
        $brand->save();
        
        return $this->itemView();
    }
    //-------=======Brand Actions End======-------

    //-------=======Supplier Actions======-------
    public function newSupplier(Request $request)
    {
        $supplier = new Supplier;
        $supplier->supplierName = $request->supplierName;
        $supplier->supplierAddress = $request->supplierAddress;
        $supplier->supplierContact = $request->supplierContact;
        $supplier->save();
        
        return $this->itemView();
    }
    //-------=======Supplier Actions End======-------
}
