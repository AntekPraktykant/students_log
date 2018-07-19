@extends('dash_layouts.master')


@section('content1 - chart')



@endsection

@section('content2 - table')
    <div class="container">
        @foreach($students as $student)
            <div class="jumbotron">
                @include('dash_layouts.student')
                @include('calendar.calendar')
            </div>
        @endforeach
    </div>
@endsection