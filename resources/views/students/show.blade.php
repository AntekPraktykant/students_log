@extends('dash_layouts.master')

@section ('content2 - table')

    <div class="container">

        <div class="jumbotron">
            @include('dash_layouts.student')
            @include('calendar.calendar')
        </div>
        {{--<div class = "jumbotron">--}}
            {{--<div class="card">--}}
                {{--<div class="card-block">--}}
                    {{--<form method="POST" action="/posts/{{$student->id}}/comments" >--}}
                        {{--{{csrf_field()}}--}}
                        {{--<div class="form-group">--}}
                            {{--<textarea name="body" placeholder="Write a comment" class="form-control"></textarea>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<button class="btn btn-lg btn-primary btn-block" type="submit">Publish</button>--}}
                        {{--</div>--}}

                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--@if (count($errors))--}}
            {{--<div class = "jumbotron">--}}
                {{--@include ('dash_layouts.alerts')--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--<form method="POST" action="/students/{{$student->id}}/modify" >--}}
            {{--{{csrf_field()}}--}}
            {{--<div class="form-group">--}}
                {{--<input type="text" value="{{$student->name}}" name = "name">--}}
                {{--<input type="text" value="{{$student->id}}" name = "student_id">--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<button class="btn btn-primary" type="submit">Publish</button>--}}
            {{--</div>--}}

        {{--</form>--}}
     </div>



@endsection