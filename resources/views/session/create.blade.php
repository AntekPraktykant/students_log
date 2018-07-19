@extends('dash_layouts.master')

@section('content2 - table')

    <div class="container">
        <div class="jumbotron">
            <div class="kol-sm-5">
                <h1>Login</h1>

                <form method="post" action="/login">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" class="form-control" id ="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" class="form-control" id ="password" name="password" required>
                    </div>

                        <button class="btn btn-primary" >Sign In</button>

                    <div class="form-group">

                        @include('dash_layouts.alerts')

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection