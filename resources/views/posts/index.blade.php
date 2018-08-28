@extends ('layouts.master')

@section ('content')

<main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
              From the Firehose
            </h3>

            @foreach ($posts as $post)
                @include ('posts.post')
            @endforeach






          </div><!-- /.blog-main -->

          @include ('layouts.sidebar')

        </div><!-- /.row -->

      </main><!-- /.container -->

@endsection
