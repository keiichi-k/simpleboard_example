@if (session('message'))
        {{ session('message') }}
    @endif

    {{ $post->title }}
    {{ $post->content }} 
<br/>
<a href="/posts">TOP</a>