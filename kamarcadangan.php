<?php
$con=mysqli_connect("localhost","root","","dbline");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}


// Data for 
$query = mysqli_query($con,"SELECT AZALEA1 FROM comodity");
$rows = array();
$rows['name'] = 'PERINA SEHAT';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['AZALEA1'];
}

// Data for 
$query = mysqli_query($con,"SELECT AZALEA2 FROM comodity");
$rows1 = array();
$rows1['name'] = 'PERINA SAKIT';
while($tmp = mysqli_fetch_array($query)) {
    $rows1['data'][] = $tmp['AZALEA2'];
}

// Data for 
$query = mysqli_query($con,"SELECT NSCOVID FROM comodity");
$rows2 = array();
$rows2['name'] = 'NS COVID';
while($tmp = mysqli_fetch_array($query)) {
    $rows2['data'][] = $tmp['NSCOVID'];
}



$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);


print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 
