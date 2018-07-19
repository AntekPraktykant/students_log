@extends('dash_layouts.master')

@section('content2 - table')
    <div class="container">
        <div class="jumbotron">
            <H1>Add new student</H1>

            <form method = "POST" action="/students" class = "form-signin">
                {{ csrf_field() }}
                <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <hr>
                <div class="form-group">
                    <label for="name" >Name</label>
                    <input type="text" id="name" name="name" class="form-control" autofocus>
                </div>

                @include('dash_layouts.alerts')

                <button class="btn btn-primary " type="submit">Add new</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            </form>
        </div>
    </div>

@endsection