@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('post.store')}}" method="POST" class="card mb-3">
        @csrf
        <div class="card-body">
            <input type="text" name="postContent" id="" class="form-control" placeholder="What'ya doin?">
        </div>
        <div class="card-footer">
            <input type="submit" value="Post" class="btn btn-primary">
        </div>
    </form>
    @foreach ($posts as $p)
    <div class="card mb-3">
        <div class="card-body">
            {{$p->postContent}}
        </div>
        <div class="card-footer">
            {{$p->user->name}}
        </div>
    </div>
    @endforeach
</div>
@endsection
