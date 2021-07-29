<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP IMAGE CRUD</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>PHP IMAGE CRUD = insert image in php</h4>
            </div>
            <div class="card-body">
                <?php
                if(isset($_SESSION['status']) && $_SESSION != '')   
            {       	
                ?>
                                 
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?PHP echo $_SESSION['status']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

                <?php
                  unset($_SESSION['status']);
             }
             ?>
 
              <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">  
                      <lable for="">Student Name</lable>
                      <input type="text" name="stud_name" required class="form-control" placeholder="Enter Name"> 
                </div>
            <div class="form-group">  
              <lable for="">Student Class</lable>
              <input type="text" name="stud_class" required class="form-control" placeholder="Enter Class"> 
            </div>
            <div class="form-group">  
              <lable for="">Student Phone Number</lable>
              <input type="text" name="stud_phone" required class="form-control" placeholder="Enter Phone Number"> 
            </div>
            <div class="form-group">  
              <lable for="">Student Image</lable>
              <input type="file" name="stud_image" required class="form-control"> 
            </div>
            <div class="form-group">  
              <button type="submit" name="save_stud_image" class="btn btn-primary">SUBMIT - SAVE</button>
               
            </div>
            </form>
           </div>
          </div>
         </div>
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>