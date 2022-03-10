@extends('layouts.app')
<h1>List event</h1>

@foreach($articles as $article)
<div>
    {{ $article->title }}
</div>
@endforeach

<div class="">
    {{ $articles->links()}}
</div>