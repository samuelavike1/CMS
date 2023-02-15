<?php

require 'dbcon.php';

if(isset($_GET['id'])){
  $delete_id = $_GET['id'];
  $query = "DELETE FROM tbl_complaint WHERE id = $delete_id";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    $_SESSION['notification'] ="Complaint Deleted ";
    header("Location: admin.php");
    exit(0);

  }else{
    $_SESSION['notification'] ="Complaint Not Deleted";
    header("Location: admin.php");
    exit(0);
    
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS</title>
    <link rel="stylesheet" href="bulma/css/bulma.min.css">

  </head>
  <body>
  <!---TOP PANEL --->

    <section class="hero is-success">
      <div class="hero-body">
        <p class="title">
          COMPLAINT MANAGEMENT SYSTEM FOR COMPUTER SCIENCE DEPARTMENT
        </p>
        <p class="subtitle">
          Please!, Attend to these Complaints.
        </p>
      </div>
    </section>
    <h1></h1><br>

    <div class="container ">
      <div class="table-container ">
        <table class="table is-hoverable table is-fullwidth ">
          <thead>
            <tr>
              <th>From: Name</th>
              <th>Index Number</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php

              $query = "SELECT id, name, index_number FROM tbl_complaint";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $complaint){
                  ?>
                      <tr>
                        <td><?= $complaint['name'] ?></td>
                        <td><?= $complaint['index_number'] ?></td>
                        <td>
                          <a href = "read_message.php?id=<?=$complaint['id'];?>" class="button is-success is-small is-rounded">Read</a>

                            <a href = "admin.php?id=<?=$complaint['id'];?>" class="button is-danger is-small is-rounded">Delete</a>
                        </td>
                      </tr>
                  <?php
                }
              }
            ?>
            
          </tbody>
        </table>
        
      </div>
    </div>
    <div class="container">
       <?php   include('notification.php') ?>
    </div>
  </body>
</html>