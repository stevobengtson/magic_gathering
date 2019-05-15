@foreach ($posts as $post)
<div class="card">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <h5 class="card-title">{{ $post->user->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->user->email }}</h6>
        <p class="card-text">{{ $post->content }}</p>
    </div>
    <div class="card-footer text-right">
        <form action="{{ url('post/'.$post->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endforeach
