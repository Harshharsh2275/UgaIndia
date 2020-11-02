<?php 

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Blogs;
use App\Admin;
use Exception;
use Illuminate\Support\Facades\Storage;

class postBlogController extends Controller
{
    function fetch_blog($id) {
        ini_set('memory_size','100000');
        try{
        $real_id = base64_decode($id);
        if($res = Blogs::where('blog_id', $real_id)->get()):
            $resTest = Blogs::where('blog_id', $real_id)->value('blog_category');
            $suggestion = $this->more_suggestion($resTest);

            echo $resTest;
            foreach ($res as $tr) {
                $author_name = $this->get_blog_author_name($tr->blog_author);
                $date = $this->format_date($tr->created_at);
                $blog_data = $this->extract_blog_data($tr->blog_full_des);
                $blog_image = $tr->blog_thumb_url;
                $blog_short_desc = $tr->blog_short_des;
                $tags = $tr->blog_tags;
                $blog_name = $tr->blog_name;

                return view('blogs.blogPost', ['a_n' => $author_name, 'dt' => $date, 'b_d' => $blog_data, 'i_u' => $blog_image, 'content' => $blog_short_desc, 'tags' => $tags, 'b_n' => $blog_name, 'sugg' => $suggestion,'sugg_except' => $real_id]);
            }
        endif;    
        }catch(Exception $e) {
            throw new Exception($e);
        }
    }

    private function get_blog_author_name(int $id) {
        $r = Admin::where('id', $id)->get();
        foreach ($r as $key) {
            return $key->name;
        }

    }

    private function extract_blog_data(string $url) {
        $file = fopen($url, 'rb');
        try{
        $size = filesize($url);
        }catch(Exception $e) {
            throw new Exception($e);
        }
        $read_data = fread($file, $size);
        return htmlspecialchars_decode($read_data);
    }

    private function format_date($obj) {
        $res = date_format($obj, 'l d F Y');
        return $res;
    }

    private function more_suggestion($cats) {
        $r = Blogs::where('blog_category','LIKE','%'.$cats.'%')->orWhere('blog_tags','LIKE','%'.$cats.'%')->get();
        return $r;
    }

    protected function show_blog_image($image) {
        $exists = Storage::disk('admins')->exists($image);
        if($exists){
            $content = Storage::disk('admins')->get($image);
            $mime = Storage::mimeType($image);
            $response = Response::make($content, 200);
            $response->header("Content-Type",$mime);
        }else{
            return abort(403);
        }
    }
}