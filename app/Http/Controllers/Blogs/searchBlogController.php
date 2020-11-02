<?php 

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Blogs;
use App\Admin;
use Exception;
use Illuminate\Support\Facades\Storage;

class searchBlogController extends Controller
{
    public function search(Request $request) {
        if ($request->isMethod('GET')) {
            $dt = $request->input();
            $s_query = $dt['bsq'];
            $is_cat = $dt['is_cat'];
            if($is_cat === "false") {
                $res = Blogs::where('blog_name','LIKE','%'.$s_query.'%')->orWhere('blog_short_des','LIKE','%'.$s_query.'%')->orWhere('blog_tags','LIKE','%'.$s_query.'%')->orderBy('blog_id','desc')->get();
                if (!is_null($res)) {
                    $n = count($res);
                    return view('search.main', ['sdt' => $res,'err' => false,'dt_count' => $n]);
                }else{
                    return view('search.main', ['sdt' => $res,'err' => true,'err_msg' => "Nothing Found at all"]);
                }
                
            }elseif ($is_cat === 'true'){
                $res = Blogs::where('blog_name','LIKE','%'.$s_query.'%')->orWhere('blog_short_des','LIKE','%'.$s_query.'%')->orWhere('blog_tags','LIKE','%'.$s_query.'%')->orWhere('blog_category','LIKE','%'.$s_query.'%')->orderBy('blog_id','desc')->get();
                if (!is_null($res)) {
                    $n = count($res);
                    return view('search.main', ['sdt' => $res,'err' => false,'dt_count' => $n]);
                }else{
                    return view('search.main', ['sdt' => $res,'err' => true,'err_msg' => "Nothing Found at all"]);
                }
            }else{
                throw new Exception("Undefined value for is_cat variable it must be true or false at".(__LINE__ - 4));
            }
        }else{
            return back();
        }
    }
}