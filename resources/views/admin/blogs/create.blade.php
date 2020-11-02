<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Blog title (255):</label>
        <input type="text" name="blog_name" id="">
        <hr>

        <label for="">Blog short description (150):</label>
        <textarea name="blog_short_desc" id="" cols="30" rows="10"></textarea>
        <hr>

        <label for="">Blog full description :</label>
        <textarea cols="80" id="editor" name="editor" rows="10" data-sample-short></textarea>
        <hr>

        <label for="">Blog thumbnail :</label>
        <input type="file" name="blog_thumb_image" id="">
        <hr>

        <label for="">Blog tags (100):</label>
        <input type="text" name="blog_tags" id="">
        <hr>

        <label for="">Blog category :</label>
        <select name="blog_category" id="">
            <option value="FAQ">FAQ</option>
            <option value="GAMING">GAMING</option>
        </select>
        <hr>
        
        <input type="submit" name="create_blogs" id="">
        <hr>
        
    </form> 
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>   
    <script>
        CKEDITOR.replace('editor', {
      height: 260,
      width: "80%",
    });
</script>
</body>
</html>