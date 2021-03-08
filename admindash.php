<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>  Admin Dashboard  </title>
<style>

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #00CC6A;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #744DA9;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  float: left;
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

body{

  margin: 0px;
  border: 0px;
  background-color: #7f8c8d;
}

#header{
  width:100 auto;
  height: 120px;
  background: #bdc3c7;
}

#data{
  height: 700px;
  background: #696969;
    background-image: url(images/libbg.jpg);
    background-size: 1500px 700px;
}

#adminLogo{
  background:white;
  border-radius:50px;
  margin-top: 10px;
  margin-right: 30px;
  float: right;
}
h1{
  margin-left: 550px;
  margin-top: 50px;
  float:left;
}
</style>
</head>

<body>


  <div id="header">
<h1 > ADMIN PAGE </h1>
<img src="https://image.flaticon.com/icons/svg/59/59514.svg" alt="admin_logo" id="adminLogo"></center>

  </div>

<div id="data">
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="display_student_info.php" >Student Details</a>
    <a href="add_books.php" >Add books</a>
    <a href="display_books.php" >Display Books</a>
    <a href="issue_book.php">Issue Books</a>
  </div>

  <div id="main">
    <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Activities</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
</div>
</body>

</html>
