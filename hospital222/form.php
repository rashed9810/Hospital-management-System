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
<body>
<center>
<h2>New Patient Appoint</h2>

<form action="fcon.php">
  Patient Id:
  <input type="integer" name="P_ID">
  <br><br>
  Patient Name:
  <input type="text" name="P_NAME">
  <br><br>
  Patient Age:
  <input type="integer" name="Age">
  <br><br>
  Patient Contact:
  <input type="integer" name="Contact">
  <br><br>
  Patient Address:
  <input type="integer" name="Address">
  <br><br>
  Patient Disease:
  <input type="text" name="Disease">
  <br><br>
  <br><br>
  <input type="submit" value="Submit">
</form> 
</center>


</body>
</html>