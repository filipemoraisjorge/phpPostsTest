@extends('master')

@section('content')
    @if (count($posts))
        @foreach ($posts as $post)
            @include('post', ['link' => true])
        @endforeach
        {!! $posts->links() !!} 
    @endif
@endsection
