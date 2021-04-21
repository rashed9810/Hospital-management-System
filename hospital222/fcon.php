<!DOCTYPE html>
<html>
<head>
<title>Details of Patient</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #
font-family: monospace;
font-size: 25px;
text-align: center;
}
th {
background-color: #1A2C56;
color: #CCA969;
}
tr:nth-child(even) {background-color: #D1A683}
tr:nth-child(odd) {background-color: #ffe7d4}

  #myInput {
            
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 30%;
            font-size: 12px;
            padding: 10px 12px 8px 25px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myInput1 {
        
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 30%;
            font-size: 12px;
            padding: 10px 12px 8px 25px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }
        .dd{
           padding: 20px;
          color: #D1A683;
          text-align:center;
          font-size: 30px;
          background-color: #5B84B1FF;
        }
        li a, .dropbtn {
    display: inline-block;
    color: #F4B41A;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #008BB0;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 40px;
    box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #2582A1;
    padding: 10px 14px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #FDB931}

.dropdown:hover .dropdown-content {
    display: block;
}
        span{
            color:#fff ;
            font-size:30px;
        }
    </style>

</head>
<body>
    <body>
    <div class="dd">
     IUBAT HOSPITAL MANAGEMENT SYSTEM <br>
     <li class="dropdown">
    <a  href="home1.php" class="dropbtn">Home</a>
    </li>
     <li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="conn.php">Patients Information Data</a>
      <a href="doctor.php">Doctors Information Data</a>
      <a href="final.php">Patient Details</a>
    </div>
  </li>
  <li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">Search</a>
    <div class="dropdown-content">
      <a href="search1.php">Search By Patient ID</a>
    
  </li>
  <li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">Report</a>
    <div class="dropdown-content">
      <a href="mainprint.php">Patient Info</a>
    </div>
  </li>
   
</div>
</head>
<?php

$link = mysqli_connect("localhost", "root", "", "db_hospital1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$P_ID = mysqli_real_escape_string($link, $_REQUEST['P_ID']);
$P_NAME = mysqli_real_escape_string($link, $_REQUEST['P_NAME']);
$Age = mysqli_real_escape_string($link, $_REQUEST['Age']);
$Contact = mysqli_real_escape_string($link, $_REQUEST['Contact']);
$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
$Disease = mysqli_real_escape_string($link, $_REQUEST['Disease']);
 
// Attempt insert query execution
$sql = "INSERT INTO tb_patient (P_ID, P_NAME,Age,Contact,Address,Disease) VALUES ('$P_ID', '$P_NAME', '$Age', '$Contact','$Address', '$Disease')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>