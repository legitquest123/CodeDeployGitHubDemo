<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;

class BookmarkController extends Controller
{
    public function saveBookmark(Request $request)
    {
       $obj = new Bookmark();
       $obj->judgment_id = '1';
       $obj->user_id = '1';
       $obj->date_created = date('Y-m-d');
       $obj->date_modified = date('Y-m-d');
       $save = $obj->save();
       if($save)
       echo "Bookmark Save Successfully!";
       else
       echo "Bookmark Not Save"; 
    }
}
