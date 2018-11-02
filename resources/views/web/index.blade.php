@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Listado de Posts</h1>

    @foreach($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">{{ $post->name }}</div>
            <div class="panel-body">
                @if($post->file)
                    <img src="{{$post->file}}" alt="" class="img-responsive">
                @endif
                <p>{{ $post->excerpt }}</p>
                <p><a href="" class="btn btn-info pull-right">Leer Más</a></p>
            </div>
        </div>
    @endforeach
    {!! $posts->render() !!}
</div>

@endsection