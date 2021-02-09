@extends('main.index')
@section('main')
    @if(isset($news))
        <div class="about-text">
            <div class="container">
                <span class="about-cap">{{$news->header}}</span>
                <div class="text">
                    {!! $news->content !!}
                </div>
            </div>
        </div>
    @endif
@endsection
