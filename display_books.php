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
                        <h3>BOOKS</h3>
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
                                <h2>Book Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <div id="content">
                            <form name="form1" method="post" action="">
                              <div>
                              <input type="text" name="t1" placeholder="Enter the book name">
                            </div>
                            <div>
<input type="submit" name="submit1" value="Search book" class="btn btn-default">
</div>
</form>
                          </div>
                            <?php

                            if(isset($_POST["submit1"]))
                            {
                              $res= mysqli_query($link,"select * from add_books where book_name like('$_POST[t1]%')");
                              echo "<table class='table table-bordered'>";
  echo "<tr>";
                              echo "<th>"; echo "ISBN"; echo "</th>";
                              echo "<th>"; echo "Name"; echo "</th>";
                              echo "<th>"; echo "Author"; echo "</th>";
                              echo "<th>"; echo "Publication"; echo "</th>";
                              echo "<th>"; echo "Category"; echo "</th>";
                              echo "<th>"; echo "Purchase Date"; echo "</th>";
                              echo "<th>"; echo "Available quantity"; echo "</th>";
                              echo "<th>"; echo "Price"; echo "</th>";
                              echo "</tr>";
                              while ($row=mysqli_fetch_array($res))
                               {
                                 echo "<tr>";
                                 echo "<td>"; echo $row["isbn"]; echo "</td>";
                                 echo "<td>"; echo $row["book_name"]; echo "</td>";
                                 echo "<td>"; echo $row["book_author_name"]; echo "</td>";
                                 echo "<td>"; echo $row["book_publication_name"]; echo "</td>";
                                 echo "<td>"; echo $row["book_category"]; echo "</td>";
                                 echo "<td>"; echo $row["book_purchase_date"]; echo "</td>";
                                 echo "<td>"; echo $row["available_qty"]; echo "</td>";
                                 echo "<td>"; echo $row["book_price"]; echo "</td>";
                                 echo "</tr>";

                              }

                              echo "</table>";

                            }
                            else {
                              $res= mysqli_query($link,"select * from add_books");
                              echo "<table class='table table-bordered'>";
  echo "<tr>";
                              echo "<th>"; echo "ISBN"; echo "</th>";
                              echo "<th>"; echo "Name"; echo "</th>";
                              echo "<th>"; echo "Author"; echo "</th>";
                              echo "<th>"; echo "Publication"; echo "</th>";
                              echo "<th>"; echo "Category"; echo "</th>";
                              echo "<th>"; echo "Purchase Date"; echo "</th>";
                              echo "<th>"; echo "Available quantity"; echo "</th>";
                              echo "<th>"; echo "Price"; echo "</th>";
                              echo "</tr>";
                              while ($row=mysqli_fetch_array($res))
                               {
                                 echo "<tr>";
                                 echo "<td>"; echo $row["isbn"]; echo "</td>";
                                 echo "<td>"; echo $row["book_name"]; echo "</td>";
                                 echo "<td>"; echo $row["book_author_name"]; echo "</td>";
                                 echo "<td>"; echo $row["book_publication_name"]; echo "</td>";
                                 echo "<td>"; echo $row["book_category"]; echo "</td>";
                                 echo "<td>"; echo $row["book_purchase_date"]; echo "</td>";
                                 echo "<td>"; echo $row["available_qty"]; echo "</td>";
                                 echo "<td>"; echo $row["book_price"]; echo "</td>";
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
