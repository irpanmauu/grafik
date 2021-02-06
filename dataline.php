<?php
$con=mysqli_connect("localhost","root","","dbline");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}


// Data for Sugar
$query = mysqli_query($con,"SELECT NS2UTAMA FROM comodity");
$rows = array();
$rows['name'] = 'NS 2 UTAMA';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['NS2UTAMA'];
}

// Data for Rice
$query = mysqli_query($con,"SELECT NS3UTAMA FROM comodity");
$rows1 = array();
$rows1['name'] = 'NS 3 UTAMA';
while($tmp = mysqli_fetch_array($query)) {
    $rows1['data'][] = $tmp['NS3UTAMA'];
}

// Data for Wheat Flour
$query = mysqli_query($con,"SELECT NSAMARILIS FROM comodity");
$rows2 = array();
$rows2['name'] = 'NS AMARILIS';
while($tmp = mysqli_fetch_array($query)) {
    $rows2['data'][] = $tmp['NSAMARILIS'];
}

$query = mysqli_query($con,"SELECT NSADENIUM FROM comodity");
$rows3 = array();
$rows3['name'] = 'NS ADENIUM';
while($tmp = mysqli_fetch_array($query)) {
    $rows3['data'][] = $tmp['NSADENIUM'];
}

$query = mysqli_query($con,"SELECT NSGARDENIA FROM comodity");
$rows4 = array();
$rows4['name'] = 'NS GARDENIA';
while($tmp = mysqli_fetch_array($query)) {
    $rows4['data'][] = $tmp['NSGARDENIA'];
}

$query = mysqli_query($con,"SELECT ICU FROM comodity");
$rows5 = array();
$rows5['name'] = 'ICU';
while($tmp = mysqli_fetch_array($query)) {
    $rows5['data'][] = $tmp['ICU'];
}

$query = mysqli_query($con,"SELECT HCU FROM comodity");
$rows6 = array();
$rows6['name'] = 'HCU';
while($tmp = mysqli_fetch_array($query)) {
    $rows6['data'][] = $tmp['HCU'];
}

$query = mysqli_query($con,"SELECT NSCAMELIA FROM comodity");
$rows7 = array();
$rows7['name'] = 'NS CAMELIA';
while($tmp = mysqli_fetch_array($query)) {
    $rows7['data'][] = $tmp['NSCAMELIA'];
}

$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);
array_push($result,$rows3);
array_push($result,$rows4);
array_push($result,$rows5);
array_push($result,$rows6);
array_push($result,$rows7);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 
