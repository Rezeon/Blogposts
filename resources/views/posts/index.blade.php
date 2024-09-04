@extends('layouts.add')

@section('title')
    Blog
@endsection

@section('content')
    <br>
    @foreach ($posts as $post)
    <div class="card border-info mb-3">
        <div class="card-header">Post <a href="{{ url("posts/$post->id/edit") }}">Edit</a>
        </div>
        
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->content }}</p>
          <p class="card-text"><small class="text-body-secondary">Last updated {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
          <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya..</a>
        </div>
      </div>
   @endforeach
@endsection
