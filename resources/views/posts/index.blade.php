@extends('template')
@section('content')
<div class="col-md-8">

    <h1 class="my-4">Ultimas Atualizações</h1>

    <!-- Blog Post -->
    
    @foreach ($posts as $post)    
    <div class="card mb-4">
        <img class="card-img-top" src="{{$post['img']}}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{$post['title']}}</h2>
            <p class="card-text">{{$post['body']}}</p>
            <a href="#" class="btn btn-primary">Leia Mais &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Postado em {{$post['on']}} por {{$post['by']}}
        </div>
    </div>
    @endforeach
</div>

@stop