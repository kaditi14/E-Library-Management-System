<?php
include "connection.php";
include "header.php";
?>
<html>
<head>
<style>
#btnarr
{
  position: relative;
  margin-left: 30px;
  margin-top: 5px;
}

#btncntrl{

  position:relative;
  margin-left: 450px;
  margin-top: 5px;
}
</style>
 </head>
 <body>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">

                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Issue Book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            </div>
                            <div id="content">
<form name="form1" method="post">
<table>
  <tr>
    <td>
      <select name="enr" class="form-control selectpicker">
      <?php
      $res= mysqli_query($link,"select enrolment from student_registration");
      while ($row= mysqli_fetch_array($res)) {
        echo "<option>";
        echo $row["enrolment"];
        echo "</option>";
      }
      ?>
      </select>
    </td>
    <td>
      <input type="submit" id="btnarr" name="submit1" value="search" class="form-control btn btn-default">
    </td>
  </tr>
</table>


<?php
if(isset($_POST["submit1"]))
{

  $res1=mysqli_query($link,"select * from student_registration where enrolment='$_POST[enr]'");
  while($row= mysqli_fetch_array($res1))
  {
    $firstname= $row["firstname"];
    $lastname= $row["lastname"];
    $username= $row["username"];
    $email= $row["email"];
    $sem= $row["sem"];
    $contact= $row["contact"];
    $enrolment=  $row["enrolment"];
  }



?>


<table class="table table-bordered">
<tr>
  <td>
<input type="text" class="form-control" placeholder="enrollment numner" value="<?php echo $enrolment; ?>" name="enrolment">
  </td>
</tr>


<tr>
  <td>
<input type="text" class="form-control" placeholder="Student name" value="<?php echo $firstname.' '.$lastname;?>"  name="stud_nm" ,'$_POST[stud_sem]','$_POST[stud_contact]','$_POST[em]')
  </td>
</tr>

<tr>
  <td>
<input type="text" class="form-control" placeholder="Student sem" value="<?php echo $sem; ?>"  name="stud_sem" required>
  </td>
</tr>

<tr>
  <td>
<input type="text" class="form-control" placeholder="Student contact" value="<?php echo $contact; ?>" name="stud_contact" required>
  </td>
</tr>

<tr>
  <td>
<input type="text" class="form-control" placeholder="Student email" value="<?php echo $email; ?>" name="stud_email" required>
  </td>
</tr>

<tr>
  <td>

<select name="bname" class="form-control selectpicker">
<?php
  $res=mysqli_query($link,"select book_name from add_books");
  while ($row= mysqli_fetch_array($res)) {
  echo  "<option>";
  echo $row["book_name"];
  echo   "</option>";

  }
?>

</select>
  </td>
</tr>

<tr>
  <td>
    Book issue date
<input type="date" class="form-control" name="issue_date" required>
  </td>
</tr>

<tr>
  <td>
    Book return date
<input type="date" class="form-control"  name="return_date" required>
  </td>
</tr>

<tr>
  <td>
<input type="text" class="form-control" placeholder="Student username" value="<?php echo $username ?>" name="stud_uname">
  </td>
</tr>

<tr>
  <td>
<input type="submit" class="btn btn-default"  value="Issue Book" name="submit2" id="btncntrl">
  </td>
</tr>
  <?php
}


 ?>
</table>
</form>

<?php
if(isset($_POST["submit2"]))
{
  $yes="yes";
  $sql1="update student_registration set issued='$yes' where enrolment='$_POST[enrolment]'";
  $sql2="update add_books set available_qty=available_qty-1 where book_name='$_POST[bname]'";
  if(mysqli_query($link,$sql2))
  {
    echo "Books record change successfully";
  }
  else {
    echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
  }
  if(mysqli_query($link,$sql1))
  {
    echo "Issued status changed";
  }
  else {
    echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
  }
  $sql="insert into issue_books(enrolment,student_name,student_sem,student_contact,student_email,book_name,book_issue_date,book_return_date,student_username) values('$_POST[enrolment]','$_POST[stud_nm]','$_POST[stud_sem]','$_POST[stud_contact]','$_POST[stud_email]','$_POST[bname]','$_POST[issue_date]','$_POST[return_date]','$_POST[stud_uname]')";
  if(mysqli_query($link,$sql))
  {
    ?>
    <script type="text/javascript">
    alert("Book issued succssfully");
    </script>
    <?php
  }
  else {
    echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
  }
}
  ?>

      </body>
      </html>
<?php
include "footer.php";
 ?>
