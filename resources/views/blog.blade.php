{{-- @dd($post) --}}
@extends('layouts.main')
@section('container')
    @foreach ($post as $fuck)
<article>
    
<h2>
    <a href="/post/ {{ $fuck["bel"] }}">{{ $fuck["po"] }}</a>
</h2>
<h5>{{ $fuck["me"] }}</h5>
{{-- <p>{{ @post["a"] }}</p> --}}
</article>    
    @endforeach
 
@endsection