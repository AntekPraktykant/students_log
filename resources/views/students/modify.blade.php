@extends('dash_layouts.master')

<div class="container">
    <div class="jumbotron">
        <h1 class="blog-post-title">{{$student->name}} </h1>
        <h4>modyfikacja obecności na dzień {{$ds[0]['day']}}, obecny status "{{$ds[0]['status']}}"</h4>

        </br>
        </br>
        <form method="post" action="/students/{{$student->id}}/modified">
            {{csrf_field()}}
            <label for="name" >Status obecności</label>
            <select name="status">
                <option value="N">"N": Nieobecny</option>
                <option value="S">"S": Spóźniony</option>
                <option value="O">"O": Obecny</option>
                <option value="">ND</option>
            </select>
            <input name ="day" type="hidden" value = "{{$ds[0]['day']}}">
            <input name ="student_id" type="hidden" value = "{{$ds[0]['student_id']}}">
            </br>
            <button class="btn btn-primary " type="submit">Save</button>
        </form>
    </div>

</div>
