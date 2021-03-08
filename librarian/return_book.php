<?php
include "header.php";
include "connection.php";
 ?>
<html>
<body>
 <!-- page content area main -->
 <div class="right_col" role="main">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3>Plain Page</h3>
             </div>

             <div class="title_right">
                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search for...">
             <span class="input-group-btn">
               <button class="btn btn-default" type="button">Go!</button>
             </span>
                     </div>
                 </div>
             </div>
         </div>

         <div class="clearfix"></div>
         <div class="row" style="min-height:500px">
             <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                     <div class="x_title">
                         <h2>Plain Page</h2>

                         <div class="clearfix"></div>
                     </div>
                     <div class="x_content">
                        <form name="form1" action="" method="post">
                          <table class="table table-bordered">
                            <tr>
                              <td><select name="enrolment" class="form-control selectpicker">
                                <?php
                                $res=mysqli_query($link,"select enrolment from issue_books");
                                while($row=mysqli_fetch_array($res))
                                {
                                  echo "<option>";
                                  echo $row["enrolment"];
                                  echo "</option>";
                                }
                                ?>
                              </select></td>
                              <td>
                            <input type="date" class="form-control"  name="return_date" value="Enter returning date" required>
                              </td>
                              <td>
                                <input type="submit" name="submit1" value="Return" class="form-control btnarr btn-default">
                              </td>
                            </tr>
                          </table>
                        </form>
                        <?php
                        if(isset($_POST["submit1"]))
                        {
                          $sql="select student_name, book_name, book_return_date from issue_books where enrolment='$_POST[enrolment]'";
                          $res1=mysqli_query($link,$sql);
                          while($row1=mysqli_fetch_array($res1))
                          {
                            $stud_name=$row1["student_name"];
                            $bkname=$row1["book_name"];
                            $dat=$row1["book_return_date"];
                          }
                          $curr=$_POST["return_date"];
                          $sql1="  select datediff ('$curr','$dat') as penalty";
                          if(mysqli_query($link,$sql1))
                          {
                            echo "Books record change successfully";
                          }
                          else {
                            echo "ERROR: Could not able to execute $sql1. " .mysqli_error($link);
                          }
                          $sql2="insert into return_book values('$_POST[enrolment]','$stud_name','$bkname',50)";
                        if( mysqli_query($link,$sql2))
                        {
                          echo "Done";
                        }
                        else {
                          echo "ERROR: Could not able to execute $sql2. " .mysqli_error($link);
                        }

                        }

                         ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- /page content -->
</body>
</html>
 <?php
include "footer.php";
  ?>
