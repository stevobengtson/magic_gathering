<div class="card">
    <form action="{{ url('post')}}" method="POST" class="form-horizontal">
    <h5 class="card-header">New Post</h5>
    <div class="card-body">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="1">
        <div class="form-group">
            <textarea class="form-control" name="content" id="post_content" aria-describedby="postHelp" rows="6" cols="60" value="{{ old('post') }}">
            </textarea>
            <small id="postHelp" class="form-text text-muted">4096 characters left...</small>
        </div>
        <input type="hidden" name="tags" value="['test']">
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Add Post</button>
    </div>
    </form>
</div>

{{-- @include('common.errors') --}}
