<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="/css/calendar.css" rel="stylesheet">

</br>

<script>
    $(document).ready(function () {
        $(function() {
            $({!! '"#datepicker'.$student->id.'"' !!}).datepicker('option','dateFormat','yy-mm-dd');
        });
        @include('students.statuses_lists')

        $({!! '"#datepicker'.$student->id.'"' !!}).datepicker({

            numberOfMonths:1,
            beforeShowDay: function (date) {
                var formattedDate = jQuery.datepicker.formatDate("yy-mm-dd", date);
                var day = date.getDay();
                if (day == 8) {
                    return [true, "markholiday"];
                }
                else if (absence.indexOf(formattedDate) > -1)
                {
                    return [true, "markabsence"];
                }
                else if (late.indexOf(formattedDate) > -1)
                {
                    return [true, "marklate"];
                }
                else if (present.indexOf(formattedDate) > -1)
                {
                    return [true, "markpresent"];
                }
                else
                {
                    return [true, ""];
                }
            }
        });
    });
</script>
<form method="post" action="/students/{{$student->id}}/modify" >
    {{csrf_field()}}
    <div class="form-group">
        <input type="text" name={!!'"datepicker'.$student->id.'"'!!} id={!!'"datepicker'.$student->id.'" required autocomplete="off">' !!}
                <h8>Legend:</h8>
        <h8 class="absent">Absent</h8>,
        <h8 class="late">Late</h8>,
        <h8 class="present">Present</h8>
        </br>

        <button class="btn btn-primary " type="submit">Modify</button>
    </div>
</form>
