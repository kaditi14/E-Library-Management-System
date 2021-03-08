<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>  Admin Dashboard  </title>.
<style>
.button1{
background-color: #0b1de0;
position: absolute;
top: 300px;
font-size: 24px;
border-radius: 12px;

}
.button2{
background-color: #0b1de0;
position: absolute;
top: 400px;
font-size: 24px;
border-radius: 12px;

}
body{

  margin: 0px;
  border: 0px;
  background-color: #7f8c8d;
  background-image: url(images/libbg.jpg);
  background-size: 1500px 700px;
}
</style>
</head>
<body>
  <center><h1 style="color:#e00b0f;">LIBRARY MANAGEMENT SYSTEM</h1></center>
  <center>

      <table class="table table-bordered">
        <form class="inline" action="logina.php">
        <tr>
        <td>
          <button name="submit1" class="button button1">ADMIN</button>
        </td>
      </tr>
    </form>
    <form class="inline" action="registrationf.php">
      <tr>
        <td>
          <button name="submit2" class="button button2">USER</button>
        </td>
      </tr>
    </form>

      </table>
  </center>
</body>
  </html>
