<?php
include "headers.php";
include "connection.php";
$lib= $_SESSION['stud_username'];
 ?>
<html>
<body>
 <!-- page content area main -->
 <div class="right_col" role="main">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3>Book information</h3>
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
                         <h2>Issued Books</h2>

                         <div class="clearfix"></div>
                     </div>
                     <div class="x_content">

                         <table class="table table-bordered">
                           <th>
                              Book Name
                           </th>
                           <th>
                             Issue Date
                           </th>
                           <th>
                             Return date
                           </th>

                         <?php
                        $res=mysqli_query($link,"select book_name, book_issue_date, book_return_date from issue_books where student_username='$_SESSION[stud_username]'");
                        if($res)
                        {
                          echo "Data fetched successfully";
                        }
                        else {
                          echo "Error in fetching data";
                        }
                        while($row=mysqli_fetch_row($res))
                        {
                          echo "<tr>";
                          echo "<td>";
                          echo $row[0];
                          echo "</td>";
                          echo "<td>";
                          echo $row[1];
                          echo "</td>";
                          echo "<td>";
                          echo $row[2];
                          echo "</td>";
                          echo "</tr>";
                        }

                       ?>
                     </table>
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
