@extends ('layouts.master')

@section ('content')

<main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">


            <h1>{{ $post->title }}</h1>

            {{ $post->body }}

          <hr>
            <div class="comments">
                <ul class="list-group">
                @foreach ($post->comments as $comment)



                <li class="list-group-item">
                        <strong>
                                {{ $comment->created_at->diffForHumans() }}
                            </strong>
                    {{ $comment->body }}
                </li>
                @endforeach
            </ul>
            </div>



          </div><!-- /.blog-main -->

          @include ('layouts.sidebar')

        </div><!-- /.row -->

      </main><!-- /.container -->

@endsection
