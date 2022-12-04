<?php

if (isset($_REQUEST['date'])) {
    $inputDate = $_REQUEST['date'];
} else {
    $inputDate = Date('Y-m-d');
}

$availableTime = array("900", "930", "1000", "1030", "1100", "1130", "1200", "1530", "1600", "1630", "1700", "1730", "1800", "1830", "1900", "1930", "2000");
$timeName = array("9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00", "15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30", "19:00", "19:30", "20:00");

$dbTime = DB::table('appoints')->where('date', $inputDate)->get(['time']);
$timeDecode = json_decode(json_encode($dbTime), true);
$timeDecodeSort = sort($timeDecode);

$countTime = count($dbTime);

// print_r (json_encode($dateDecode));

for ($z = 0; $z < $countTime; $z++) {
    if ($timeDecode[$z]['time'] == 900) {
        unset($availableTime['0']);
        unset($availableTime['1']);
        unset($availableTime['2']);
        unset($timeName['0']);
        unset($timeName['1']);
        unset($timeName['2']);
    }
    if ($timeDecode[$z]['time'] == 930) {
        unset($availableTime['0']);
        unset($availableTime['1']);
        unset($availableTime['2']);
        unset($availableTime['3']);
        unset($timeName['0']);
        unset($timeName['1']);
        unset($timeName['2']);
        unset($timeName['3']);
    }
    if ($timeDecode[$z]['time'] == 1000) {
        unset($availableTime['0']);
        unset($availableTime['1']);
        unset($availableTime['2']);
        unset($availableTime['3']);
        unset($availableTime['4']);
        unset($timeName['0']);
        unset($timeName['1']);
        unset($timeName['2']);
        unset($timeName['3']);
        unset($timeName['4']);
    }
    if ($timeDecode[$z]['time'] == 1030) {
        unset($availableTime['1']);
        unset($availableTime['2']);
        unset($availableTime['3']);
        unset($availableTime['4']);
        unset($availableTime['5']);
        unset($timeName['1']);
        unset($timeName['2']);
        unset($timeName['3']);
        unset($timeName['4']);
        unset($timeName['5']);
    }
    if ($timeDecode[$z]['time'] == 1100) {
        unset($availableTime['2']);
        unset($availableTime['3']);
        unset($availableTime['4']);
        unset($availableTime['5']);
        unset($availableTime['6']);
        unset($timeName['2']);
        unset($timeName['3']);
        unset($timeName['4']);
        unset($timeName['5']);
        unset($timeName['6']);
    }
    if ($timeDecode[$z]['time'] == 1130) {
        unset($availableTime['3']);
        unset($availableTime['4']);
        unset($availableTime['5']);
        unset($availableTime['6']);
        unset($availableTime['7']);
        unset($timeName['3']);
        unset($timeName['4']);
        unset($timeName['5']);
        unset($timeName['6']);
        unset($timeName['7']);
    }
    if ($timeDecode[$z]['time'] == 1200) {
        unset($availableTime['4']);
        unset($availableTime['5']);
        unset($timeName['4']);
        unset($timeName['5']);
    }
    if ($timeDecode[$z]['time'] == 1530) {
        unset($availableTime['7']);
        unset($availableTime['8']);
        unset($availableTime['9']);
        unset($timeName['7']);
        unset($timeName['8']);
        unset($timeName['9']);
    }
    if ($timeDecode[$z]['time'] == 1600) {
        unset($availableTime['7']);
        unset($availableTime['8']);
        unset($availableTime['9']);
        unset($availableTime['10']);
        unset($timeName['7']);
        unset($timeName['8']);
        unset($timeName['9']);
        unset($timeName['10']);
    }
    if ($timeDecode[$z]['time'] == 1630) {
        unset($availableTime['7']);
        unset($availableTime['8']);
        unset($availableTime['9']);
        unset($availableTime['10']);
        unset($availableTime['11']);
        unset($timeName['7']);
        unset($timeName['8']);
        unset($timeName['9']);
        unset($timeName['10']);
        unset($timeName['11']);
    }
    if ($timeDecode[$z]['time'] == 1700) {
        unset($availableTime['8']);
        unset($availableTime['9']);
        unset($availableTime['10']);
        unset($availableTime['11']);
        unset($availableTime['12']);
        unset($timeName['8']);
        unset($timeName['9']);
        unset($timeName['10']);
        unset($timeName['11']);
        unset($timeName['12']);
    }
    if ($timeDecode[$z]['time'] == 1730) {
        unset($availableTime['9']);
        unset($availableTime['10']);
        unset($availableTime['11']);
        unset($availableTime['12']);
        unset($availableTime['13']);
        unset($timeName['9']);
        unset($timeName['10']);
        unset($timeName['11']);
        unset($timeName['12']);
        unset($timeName['13']);
    }
    if ($timeDecode[$z]['time'] == 1800) {
        unset($availableTime['10']);
        unset($availableTime['11']);
        unset($availableTime['12']);
        unset($availableTime['13']);
        unset($availableTime['14']);
        unset($timeName['10']);
        unset($timeName['11']);
        unset($timeName['12']);
        unset($timeName['13']);
        unset($timeName['14']);
    }
    if ($timeDecode[$z]['time'] == 1830) {
        unset($availableTime['11']);
        unset($availableTime['12']);
        unset($availableTime['13']);
        unset($availableTime['14']);
        unset($availableTime['15']);
        unset($timeName['11']);
        unset($timeName['12']);
        unset($timeName['13']);
        unset($timeName['14']);
        unset($timeName['15']);
    }
    if ($timeDecode[$z]['time'] == 1900) {
        unset($availableTime['12']);
        unset($availableTime['13']);
        unset($availableTime['14']);
        unset($availableTime['15']);
        unset($availableTime['16']);
        unset($timeName['12']);
        unset($timeName['13']);
        unset($timeName['14']);
        unset($timeName['15']);
        unset($timeName['16']);
    }
    if ($timeDecode[$z]['time'] == 1930) {
        unset($availableTime['13']);
        unset($availableTime['14']);
        unset($availableTime['15']);
        unset($availableTime['16']);
        unset($availableTime['17']);
        unset($timeName['13']);
        unset($timeName['14']);
        unset($timeName['15']);
        unset($timeName['16']);
        unset($timeName['17']);
    }
    if ($timeDecode[$z]['time'] == 2000) {
        unset($availableTime['14']);
        unset($availableTime['15']);
        unset($availableTime['16']);
        unset($availableTime['17']);
        unset($timeName['14']);
        unset($timeName['15']);
        unset($timeName['16']);
        unset($timeName['17']);
    }
}

// $countX = count($x);
$resetAvailableTime = array_values($availableTime);
$resetTimeName = array_values($timeName);
$countAvailableTime = count($resetAvailableTime);


echo ('{"resetAvailableTime":' . json_encode($resetAvailableTime) . ',"resetTimeName":' . json_encode($resetTimeName) . ',"countAvailableTime":' . json_encode($countAvailableTime) . '}');
?>