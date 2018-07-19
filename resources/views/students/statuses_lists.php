<?php

$absence_list = 'var absence = [';
$late_list = 'var late = [';
$present_list = 'var present = [';


$status = $student->dailyStatuses->toArray();

foreach ($status as $a){
    if ($a['status'] =='N') {
        $absence_list .= '"' . $a['day'] . '",';
    }
    else if ($a['status'] =='S') {
        $late_list .= '"' . $a['day'] . '",';
    }
    else if ($a['status'] =='O') {
        $present_list .= '"' . $a['day'] . '",';
    }
}

if ($absence_list == 'var absence = ['){
    echo 'var absence = ["2010-01-01"];';
}
else {
    $absence_list = substr($absence_list, 0, strlen($absence_list)-1).']; ';
    echo $absence_list;
}
if ($late_list == 'var late = ['){
    echo 'var late = ["2010-01-01"];';
}
else {
    $late_list = substr($late_list, 0, strlen($late_list)-1).']; ';
    echo $late_list;
}
if ($present_list == 'var present = ['){
    echo 'var present = ["2010-01-01"];';
}
else {
    echo $present_list = substr($present_list, 0, strlen($present_list)-1).'];';
    echo $present_list;
}

?>

