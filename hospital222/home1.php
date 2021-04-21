
 <html lang="en">
<head>
  <title>Home</title>
<style>
	body {
  background-image: url('doc1.JFIF');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
	
body {
    font-family: Verdana,sans-serif;
    font-size: 1em;
}

div#header, div#footer {
    padding: 10px;
    color: #FFFFFF;
    text-align:center;
    background-color:;
}

li {
     background-color:#5B84B1FF;
     float: center;
	
}

li a, .dropbtn {
    display: inline-block;
    color: #F4B41A;
    text-align: center;
    padding: 20px 22px;
    text-decoration: none;
}
li a, .button {
    display: inline-block;
    color: #F4B41A;
    text-align: center;
    padding: 20px 22px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #008BB0;
}

li.dropdown {
    display: inline-block;
}
li a:hover, .button:hover .button {
    background-color: #008BB0;
}

li.button {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #2582A1;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #FDB931}

.dropdown:hover .dropdown-content {
    display: block;
}
ul {
    list-style-type: none;
    margin: 1;
    padding: 30px;
    overflow: hidden;
    background-color: ;
}


div.article {
    margin: 5px;
    padding: 10px;
    text-align:center;
    background-color: #008BB0;
}

</style>
</head>
<body>
<div class="flex-container">
<div id="header">
<h1 style=""><br><br>IUBAT HOSPITAL MANAGEMENT SYSTEM
<br><br></h1>
</div>

<ul> <center>
  
      <li class="dropdown">
    <a  href="javascript:void(0)" class="dropbtn">Register</a>
    <div class="dropdown-content">
      <a href="form.php">Insert Data</a>
      
</div>
  </li>
      
    


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
</ul>


</body>
</html>
 