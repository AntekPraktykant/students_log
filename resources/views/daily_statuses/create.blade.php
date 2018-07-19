@extends('dash_layouts.master')

<div class="container">
    <div class="jumbotron">
        <h1 class="blog-post-title">{{$student->name}} </h1>
        <h4>Uzupełnianie obecności na dzień {{$day}}, obecny status: "Brak wpisu w bazie, tworzę nowy"</h4>

        </br>
        </br>
        <form method="post" action="/dailystatus/{{$student->id}}/create">
            {{csrf_field()}}
            <label for="name" >Status obecności</label>
            <select name="status">
                <option value="N">"N": Nieobecny</option>
                <option value="S">"S": Spóźniony</option>
                <option value="O">"O": Obecny</option>
                <option value="">ND</option>
            </select>
            {{--<input name ="day" type="text" >--}}
            {{--<input name ="student_id" type="text" >--}}
            <input name ="day" type="hidden" value = "{{$day}}">
            <input name ="student_id" type="hidden" value = "{{$student->id}}">
            </br>
            <button class="btn btn-primary " type="submit">Save</button>
        </form>
    </div>

</div>
