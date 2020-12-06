<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
    </head>

    <body class="antialiased">

    <?php
    use \App\Models\Posts;

    $posts = \App\Models\Posts::all();

    foreach ($posts as $post) {
        echo'

  <div class="card" style="width: 18rem;">
         <div class="card-header"> '.$post["title"].' </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">'.$post["description_short"].'</li>
    <li class="list-group-item">'.$post["url"].'</li>
    <li class="list-group-item">'.$post["is_published"].'</li>
    <li class="list-group-item">'.$post["description"].'</li>
  </ul>
</div>

     ';
    }
    ?>


    <div id="toolbar">
        <button class="ql-bold">Bold</button>
        <button class="ql-italic">Italic</button>
    </div>
    <div id="editor">
        <p>Hello World!</p>
    </div>
    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
    <script>
        var editor = new Quill('#editor', {
            modules: { toolbar: '#toolbar' },
            theme: 'snow'
        });
    </script>


    </body>

</html>





