<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action=""  method="post">
    @csrf
<div>
   <lable>Post Tile:</lable>
    <input type="text" placeholder="Title" name="title">
</div>
<div>
    <lable>Post Author:</lable>
    <input type="text" placeholder="Author" name="author">
</div>
<div>
    <lable>Post Content:</lable>
    <input type="text" name="content" placeholder="post content">
</div>
<div>
    <button type="submit">Submit</button>
</div>
</form>
</body>
</html>
