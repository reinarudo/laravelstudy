@extends('main')

@section('title', '| Homepage')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="jumbotron">
            <h1>Welcome to my blog!</h1>
            <p class="lead">Thank you for visiting. This is my test website built with Laravel. Please read my latest post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
    </div>
</div> <!-- end of header .row -->

<div class="row">
    <div class="col-md-8">

        @foreach($posts as $post)
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ substr($post->body, 0, 300) }}{{strlen($post->body) > 300 ? '...' : ''}}</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
        @endforeach

    </div>

    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
        Lorem ipsum dolor sit amet
        Consectetur adipiscing elit
        Integer molestie lorem at massa
        Facilisis in pretium nisl aliquet
        Nulla volutpat aliquam velit
    </div>
</div>
@endsection

