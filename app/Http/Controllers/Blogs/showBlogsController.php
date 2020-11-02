<?php 

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogs;

class showBlogsController extends Controller
{
    public function basic_show_blog(Request $req) {
            # code...
            $res = Blogs::orderBy('blog_id','desc')->get();   
            $no_res = count($res);
            return view('blogs.main',['blog_data'=>$res, 'dt_count' => $no_res]);
    }
}