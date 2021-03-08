<?php
include "header.php";
 $lib=$_SESSION['libraran_username'];
include "connection.php";

 ?>
<html>
<body>
 <!-- page content area main -->
 <div class="right_col" role="main">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3>Add Book Information</h3>
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
                         <h2>Enter Book Details</h2>

                         <div class="clearfix"></div>
                     </div>
                     <div class="x_content">

                         <form name="form1" action="" method="post" class="col-lg-12" enctype="multipart/form-data">
<table class="table table-bordered">
  <tr>
    <td>
  <input type="text" class="form-control" placeholder="ISBN" name="isbn">
    </td>
  </tr>
<tr>
  <td>
<input type="text" class="form-control" placeholder="book name" name="bname">
  </td>
</tr>

<tr>
  <td>
<input type="text" class="from-control" placeholder="auhor name" name="b_auth_name">
  </td>
</tr>

<tr>
  <td>
<input type="text" class="from-control" placeholder="Publication" name="b_pub_name">
  </td>
</tr>

<tr>
  <td>
<input type="text" class="from-control" placeholder="Category" name="b_cat">
  </td>
</tr>

<tr>
  <td>
<input type="date" class="from-control" placeholder="Purchase date(YYYY/MM/DD)" name="b_pur_date">
  </td>
</tr>

<tr>
  <td>
<input type="text" class="from-control" placeholder="Quantity" name="b_qty">
  </td>
</tr>

<tr>
  <td>
<input type="text" class="from-control" placeholder="Price" name="b_price">
  </td>
</tr>


<tr>
  <td>
<input class="btn btn-default submit" type="submit" name="submit1" value="Insert">
  </td>
</tr>



</table>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- /page content -->

 <?php

 $msg="";
if(isset($_POST['submit1']))
{
  $sql="insert into add_books(isbn,book_name,book_author_name,book_publication_name,book_category,book_purchase_date,available_qty,book_price,librarian_uname) values('$_POST[isbn]','$_POST[bname]','$_POST[b_auth_name]','$_POST[b_pub_name]','$_POST[b_cat]','$_POST[b_pur_date]','$_POST[b_qty]','$_POST[b_price]','$lib')";
  if(mysqli_query($link,$sql))
  {
    echo "Records entered successfully";
  }
  else {
    echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
  }
  ?>

  <script>
  alert("Books inserted successfully");
  </script>

  <?php

}

  ?>
</body>
</html>
 <?php
include "footer.php";
  ?>
