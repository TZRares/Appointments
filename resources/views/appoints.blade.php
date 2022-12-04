<?php

if (isset($_REQUEST['date'])) {
    $inputDate = $_REQUEST['date'];
} else {
    $inputDate = Date('Y-m-d');
}

$availableTime = array("900", "930", "1000", "1030", "1100", "1130", "1200", "1530", "1600", "1630", "1700", "1730", "1800", "1830", "1900", "1930", "2000");
$timeName = array("9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00", "15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30", "19:00", "19:30", "20:00");

$dbTime = DB::table('appoints')->where('date', $inputDate)->get(['name','date','time']);
$timeDecode = json_decode(json_encode($dbTime), true);
$timeDecodeSort = sort($timeDecode);

$countTime = count($timeDecode);

    echo (json_encode($timeDecode));

?>