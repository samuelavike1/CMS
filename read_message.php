<?php

require 'dbcon.php';
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

    <section class="hero is-link">
      <div class="hero-body">
        <p class="title">
          COMPLAINT MANAGEMENT SYSTEM FOR COMPUTER SCIENCE DEPARTMENT
        </p>
        <p class="subtitle">
          Complaint read Mode.
        </p>
      </div>
    </section>
    <h1></h1><br>

    <div class="container box">

      <?php
        if (isset($_GET['id'])){

          $complaint_id = $_GET['id'];
          $query = "SELECT * FROM tbl_complaint WHERE id = $complaint_id";
          $query_run = mysqli_query($conn, $query);
          $complaint = mysqli_fetch_array($query_run);
          
          ?>
                <article class="message is-link">
                  <div class="message-header">
                    <p>Complaint </p>
                    <a href="admin.php"><button class="delete" aria-label="delete"></button></a>
                  </div>
                  <div class="message-body">
                    <strong>Name: <?= $complaint['name'];?> </strong><br>
                    <strong>Index Number: <?= $complaint['index_number'];?> </strong><br><br>
                    <h1><strong>Complaint On : <?= $complaint['subject'];?> </strong></h1><br>
                     <?= $complaint['message'];?>
                     <br>
                     <br>
                     <br>
                     <h1><strong>Time and Date : <?= $complaint['submitted_date'];?> </strong></h1><br>
                  </div>
                </article>

          <?php

        }else{

        }

      ?>

    </div>
  </body>
</html>