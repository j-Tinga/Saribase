<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\TagList;
use Session;
use DB;
class TagController extends Controller
{
    public function tagView()
    {
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

    public function newTagForm(){ 
        $tags = DB::table('tag_List')->where('itemID','=',Session::get('item'))->pluck('tagID');
        $activeTags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->where('tag_List.itemID','=',Session::get('item'))->get();
        $materialTags =  DB::table('tag')->where('tagType','=','Material')->whereNotIn('tagID', $tags)->get();
        $toolTags = DB::table('tag')->where('tagType','=','Tool')->whereNotIn('tagID', $tags)->get();
        $colorTags = DB::table('tag')->where('tagType','=','Color')->whereNotIn('tagID', $tags)->get();
        return view('Item.Tag.tags')
        ->with('activeTags', $activeTags)
        ->with('materialTags', $materialTags)
        ->with('toolTags', $toolTags)
        ->with('colorTags', $colorTags)
        ->with('newTag', 1);
    }

    public function editTagForm($id){
        $tags = DB::table('tag_List')->where('itemID','=',Session::get('item'))->pluck('tagID');
        $activeTags = DB::table('tag')->join('tag_List', 'tag.tagID', '=', 'tag_List.tagID')->where('tag_List.itemID','=',Session::get('item'))->get();
        $materialTags =  DB::table('tag')->where('tagType','=','Material')->whereNotIn('tagID', $tags)->get();
        $toolTags = DB::table('tag')->where('tagType','=','Tool')->whereNotIn('tagID', $tags)->get();
        $colorTags = DB::table('tag')->where('tagType','=','Color')->whereNotIn('tagID', $tags)->get();
        $editTag = Tag::find($id);
        return view('Item.Tag.tags')
        ->with('activeTags', $activeTags)
        ->with('materialTags', $materialTags)
        ->with('toolTags', $toolTags)
        ->with('colorTags', $colorTags)
        ->with('editTag', $editTag);
    }

    public function tagActions(Request $request){
        if($request->button == "Edit"){
            return $this->editTagForm($request->id);
        }
        else if($request->button == "Remove"){
            return $this->removeTag($request->tagListID);
        }
        else if($request->button == "Add"){
            return $this->addTag($request->id);
        }
    }

    public function newTag(Request $request){
        $tag = new Tag;
        $tag->tagName = $request->tagName;
        $tag->tagType = $request->type;
        $tag->save();

        return $this->tagView();
    }

    public function addTag($id){
        $tagList = new TagList;
        $tagList->itemID = Session::get('item');
        $tagList->tagID = $id;
        $tagList->save();

        return $this->tagView();
    }

    public function removeTag($id){
        TagList::destroy($id);
        return $this->tagView();
    }

    public function editTag(Request $request){
        if($request->button == "Update Tag"){
            $tag = Tag::find($request->id);
            $tag->itemName = $request->newName;
            
            $tag->save();
            return $this->tagView();
        }
        else if($request->button == "Delete Tag"){
            Tag::destroy($request->id);
            return $this->tagView();
        }
    } 

}
