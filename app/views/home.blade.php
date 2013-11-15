@extends('common')
@section('content')
@foreach ($articles as $article)
  <div class="row">
    <div class="col-md-8">
        <!-- Post Title -->
        <div class="row">
            <div class="col-md-8">
                <h4><strong><a href="#">{{ $article->title }}</a></strong></h4>
            </div>
        </div>
        <!-- ./ post title -->

        <!-- Post Content -->
        <div class="row">
            <div class="col-md-2">
                <a href="#" class="thumbnail"><img src="http://placehold.it/260x180" alt=""></a>
            </div>
            <div class="col-md-6">
                <p>
                    {{ $article->content }}
                </p>
                <p><a class="btn btn-mini btn-default" href="#">Read more</a></p>
            </div>
        </div>
        <!-- ./ post content -->

        <!-- Post Footer -->
        <div class="row">
            <div class="col-md-8">
                <p></p>
                <p>
                    <span class="glyphicon glyphicon-user"></span> by <span class="muted">{{$article->author}}</span>
                    | <span class="glyphicon glyphicon-calendar"></span> <!--Sept 16th, 2012-->{{$article->created_at}}
                    | <span class="glyphicon glyphicon-comment"></span> <a href="#">{{$article->commented_times}}}</a>
                </p>
            </div>
        </div>
        <!-- ./ post footer -->
    </div>
</div>

<hr />
       
@endforeach

@stop
