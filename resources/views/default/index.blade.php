@extends('default.layouts.layouts')

@section('navbar')
    @parent
@endsection

@section('title_desc')
    @parent
@endsection


<div class="container">
    @section ('content')
        @include('default.content')
    @endsection
</div>

@section('footer_top')
    <div class="container">
        @parent
    </div>
@endsection



@section('main_footer')
    @parent
@endsection