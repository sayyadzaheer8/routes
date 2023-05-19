@foreach($posts as $post)
    <p>Bullshit made by: {{ $post->author}}</p>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content}}</p>
@endforeach