<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Brand;
use App\Models\Supplier;
use DB;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    public function editItem(Request $request)
    {
        if($request->button == "Update"){
            return $this->edit($request);
        }else if($request->button == "Edit Tags"){
            $activeTags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->where('tag_List.itemID','=','$request->id')->get();
            $materialTags =  DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->where('tag_List.itemID','!=','$request->id')->where('tag.tagType','=','Material')->get();
            $toolTags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->where('tag_List.itemID','!=','$request->id')->where('tag.tagType','=','Tool')->get();
            $colorTags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->where('tag_List.itemID','!=','$request->id')->where('tag.tagType','=','Color')->get();
            return view('Item.tags')
            ->with('activeTags', $activeTags)
            ->with('materialTags', $materialTags)
            ->with('toolTags', $toolTags)
            ->with('colorTags', $colorTags);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::destroy($id);
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
}
