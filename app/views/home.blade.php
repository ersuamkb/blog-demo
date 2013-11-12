@extends('common')
@section('content')
@foreach ($articles as $article)
       {{{ $article->id}}}||
       {{{ $article->title}}}||
       {{{ $article->abstract}}}||
       {{{ $article->author}}}||
       {{{ $article->categorys_id}}}||
       {{{ $article->count}}}||
       {{{ $article->content}}}
       <br>
       <hr>
@endforeach
@stop
