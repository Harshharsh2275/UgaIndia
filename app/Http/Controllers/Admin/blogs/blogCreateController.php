<?php

namespace App\Http\Controllers\Admin\blogs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Blogs;
use Illuminate\Support\Facades\Auth;
use Exception;

//use Auth;

class blogCreateController extends Controller
{
    /**
     * @param Request $req
     */
    public function create_blog(Request $req)
    {
        $blogs = new Blogs();

        $inp = $req->input();

        $blog_name = $inp['blog_name'];

        $blogs->blog_name = $blog_name;
        $blogs->blog_short_des = $inp['blog_short_desc'];
        $blogs->blog_tags = $inp['blog_tags'];
        $blogs->blog_category = $inp['blog_category'];

        $blog_full_des = htmlspecialchars($inp['editor']);

        echo $admin_id = $this->get_admin_id();

        $blogs->blog_author = $admin_id;

        //$blogs->blog_full_des = $blog_full_des;

        $path = sprintf("/admins/public/%s/blogs/", sha1($admin_id), $blog_name);
        //
        $file_path = $this->create_entity($path, $blog_name, ".txt", $blog_full_des);
        $blogs->blog_full_des = $file_path;
        //
        //$blogs->blog_data_file_url = $file_path;
        //
        $file_ext = $req->file('blog_thumb_image')->extension();
        //$thumb_path = $this->upload(sprintf('admins/%s/blogs/%s', sha1($admin_id), $blog_name.$file_ext), 'blog_thumb_image');

        $thumb_path = $req->file('blog_thumb_image')->store(sprintf('admins/public/%s/blogs', sha1($admin_id), 'public'));
        $thumb_path = explode("public/", $thumb_path);
        $thumb_path = $thumb_path[1];

        $blogs->blog_thumb_url = $thumb_path;

        if ($blogs->save()) {
            echo "Blog created succesfully";
        } else {
            echo "Blog creation failure";
        }
    }

    private function get_admin_id()
    {
        if (Auth::guard('admins')->check()) {
            return Auth::guard('admins')->id();
        } else {
            throw new Exception("Admin not logged in", 1);
        }
    }

    private function create_entity(string $path, string $name, string $ext, $content = null)
    {
        /**
         * @param string $path relative path to entity
         * @param string $name name of the entity to create
         * @param string $ext extension of the entity provided
         * @param mixed $content content for entity
         * 
         * @return string $full_entity_path path for entity | false
         */

        $app_url = str_replace("\\", '/', storage_path('app'));

        $full_entity_path = $app_url . $path . base64_encode($name) . $ext;

        try {
            $entity = fopen($full_entity_path, "w+");
        } catch (Exception $e) {
            throw new Exception($e);
        }

        $res = fwrite($entity, $content);
        if ($res) {
            return $full_entity_path;
        } else {
            return false;
        }
    }

    private function upload(string $path, string $file_name)
    {
        /**
         * 
         * @param string $path file to upload dir
         */

        $app_url = str_replace("\\", '/', storage_path('app'));

        $full_path = $app_url . $path;

        Storage::disk('local')->move($_FILES[$file_name]['tem'], $full_path);
    }
}
