@extends ('layouts.master')

@section ('content')

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <h1>Create a post</h1>

        <form method="POST" action="/posts">

            {{ csrf_field() }}

                <div class="form-group">
                  <label for="title">Title</label>

                  <input type="text" class="form-control" id="title" name="title" required>

                </div>

                <div class="form-group">
                  <label for="body">Body:</label>
                  <textarea class="form-control" id="body" name="body" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</main>

@endsection
