@foreach ($posts as $post)
    <h2>{{$post->title}}</h2>
    <small>{{$post->author}}</small>
    <small>{{$post->created_at}}</small>
@endforeach
