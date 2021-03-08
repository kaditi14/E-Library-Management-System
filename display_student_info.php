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
                        <h3>Student Information</h3>
                    </div>

                    <div class="title_right">
                      <form name="forms" method="post">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="t1" placeholder="Search for student">
                    <span class="input-group-btn">
                      <input type="submit" name="submit3"  class="form-control btn btn-default">Go!</button>
                    </span>
                  </form>

                            </div>
                        </div>
                    </div>



                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Student Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <?php
                              if(isset($_POST["submit3"]))
                              {
                                $res3= mysqli_query($link,"select * from student_registration where firstname like('$_POST[t1]')");
                                echo "<table class='table table-bordered'>";
    echo "<tr>";
                                echo "<th>"; echo "Firstname"; echo "</th>";
                                echo "<th>"; echo "Lastname"; echo "</th>";
                                echo "<th>"; echo "Usename"; echo "</th>";
                                echo "<th>"; echo "Email"; echo "</th>";
                                echo "<th>"; echo "Contact"; echo "</th>";
                                echo "<th>"; echo "Sem"; echo "</th>";
                                echo "<th>"; echo "Enrollment no"; echo "</th>";
                                echo "</tr>";
                                while ($row1=mysqli_fetch_array($res3))
                                 {
                                   echo "<tr>";
                                   echo "<td>"; echo $row1["firstname"]; echo "</td>";
                                   echo "<td>"; echo $row1["lastname"]; echo "</td>";
                                   echo "<td>"; echo $row1["username"]; echo "</td>";
                                   echo "<td>"; echo $row1["email"]; echo "</td>";
                                   echo "<td>"; echo $row1["contact"]; echo "</td>";
                                   echo "<td>"; echo $row1["sem"]; echo "</td>";
                                   echo "<td>"; echo $row1["enrolment"]; echo "</td>";
                                   echo "</tr>";

                                }

                                echo "</table>";


                              }
                              else {
                                $res= mysqli_query($link,"select * from student_registration");
                                echo "<table class='table table-bordered'>";
    echo "<tr>";
                                echo "<th>"; echo "Firstname"; echo "</th>";
                                echo "<th>"; echo "Lastname"; echo "</th>";
                                echo "<th>"; echo "Usename"; echo "</th>";
                                echo "<th>"; echo "Email"; echo "</th>";
                                echo "<th>"; echo "Contact"; echo "</th>";
                                echo "<th>"; echo "Sem"; echo "</th>";
                                echo "<th>"; echo "Enrollment no"; echo "</th>";
                                echo "</tr>";
                                while ($row=mysqli_fetch_array($res))
                                 {
                                   echo "<tr>";
                                   echo "<td>"; echo $row["firstname"]; echo "</td>";
                                   echo "<td>"; echo $row["lastname"]; echo "</td>";
                                   echo "<td>"; echo $row["username"]; echo "</td>";
                                   echo "<td>"; echo $row["email"]; echo "</td>";
                                   echo "<td>"; echo $row["contact"]; echo "</td>";
                                   echo "<td>"; echo $row["sem"]; echo "</td>";
                                   echo "<td>"; echo $row["enrolment"]; echo "</td>";
                                   echo "</tr>";

                                }

                                echo "</table>";



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
