@extends('main.index')
@section('main')
    <div class="about-text">
        <div class="container">
            @if(isset($terms))
                <span class="about-cap">QAYDALAR VƏ ŞƏRLƏR</span>
                <div class="text">
                    {!! $terms->content !!}
                </div>
            @endif
        </div>
    </div>
@endsection
