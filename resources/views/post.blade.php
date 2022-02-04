<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../app.css">

    <title>My Blog</title>
</head>

<body>
    <h1>{{ $post->title }}</h1>
    <h3>Written By the author <a href="/{{ $post->user->username }}/posts">{{ $post->user->name }}</a> in <a
            href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a></h3>
    <article>

        {!! $post->body !!}

    </article>
    <a href="/">Go back</a>


</body>

</html>
