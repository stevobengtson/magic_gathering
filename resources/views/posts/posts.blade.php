@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-sm-12">
            @include('posts/new')
        </div>
    </div>

    @if (count($posts) > 0)
    <div class="row">
        <div class="col-sm-12">
            <h3>Current Posts</h3>
        </div>

        <div class="col-sm-12">
            @include('posts/list', [ 'posts' => $posts ])
        </div>
    </div>
    @endif
</div>
@endsection
