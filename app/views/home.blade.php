@extends('common')
@section('content')
@foreach ($articles as $article)
       {{{ $article->id}}}||
       {{{ $article->title}}}||
       {{{ $article->abstract}}}||
       {{{ $article->author}}}||
       {{{ $article->categorys_id}}}||
       {{{ $article->commented_times}}}||
       {{{ $article->content}}}

<div class="row">
    <div class="col-md-8">
        <!-- Post Title -->
        <div class="row">
            <div class="col-md-8">
                <h4><strong><a href="{{{ $article->url() }}}">{{ String::title($article->title) }}</a></strong></h4>
            </div>
        </div>
        <!-- ./ post title -->

        <!-- Post Content -->
        <div class="row">
            <div class="col-md-2">
                <a href="{{{ $article->url() }}}" class="thumbnail"><img src="http://placehold.it/260x180" alt=""></a>
            </div>
            <div class="col-md-6">
                <p>
                    {{ String::tidy(Str::limit($article->content, 200)) }}
                </p>
                <p><a class="btn btn-mini btn-default" href="{{{ $article->url() }}}">Read more</a></p>
            </div>
        </div>
        <!-- ./ post content -->

        <!-- Post Footer -->
        <div class="row">
            <div class="col-md-8">
                <p></p>
                <p>
                    <span class="glyphicon glyphicon-user"></span> by <span class="muted">{{{ $article->author->username }}}</span>
                    | <span class="glyphicon glyphicon-calendar"></span> <!--Sept 16th, 2012-->{{{ $article->date() }}}
                    | <span class="glyphicon glyphicon-comment"></span> <a href="{{{ $article->url() }}}#comments">{{$article->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $article->comments()->count()) }}</a>
                </p>
            </div>
        </div>
        <!-- ./ post footer -->
    </div>
</div>

<hr />
       <br>
       <hr>
@endforeach
@stop
