@extends('main.index')
@section('main')
<div class="about-text">
    <div class="container">
        @if(isset($about))
            <span class="about-cap">HAQQIMIZDA</span>
            <div class="text">
                {!! $about->content !!}
            </div>
        @endif
    </div>
</div>
@endsection
