<?php
  session_start();
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
          Please!, Enter Your Complaint.
        </p>
      </div>
    </section>
    <h1></h1><br>



    <form method="post" action="code.php" class="box">
      <div class="container">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Full Name</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input is-link" type="text" placeholder="Name" name="name">
            </p>
          </div>
          <div class="field-label is-normal">
          <label class="label">Index Number</label>
        </div>
          <div class="field">
            <p class="control is-expanded has-icons-left has-icons-right">
              <input class="input is-link" type="text" placeholder="Index Number" name="index_number">
            </p>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Subject</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input is-link" type="text" placeholder="e.g Examination Complaint" name="subject">
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Message</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <textarea class="textarea is-link" placeholder="Please, Write Your Complaint in a Concise" name="message"></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label">
          <!-- Left empty for spacing -->
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input type="submit" class="button is-link" name="submit_conplaint" value="Submit">
            </div>
          </div>
        </div>
      </div>  
    </div>
    </form>
      <h1></h1><br>
    <div class="container">
       <?php   include('notification.php') ?>
    </div>


  </body>
</html>