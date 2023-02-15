<?php
if(isset($_SESSION['notification'])):
?>
    <div class="container is-max-desktop">
      <div class="notification is-primary">
        <strong>Hey!</strong> <?= $_SESSION['notification']; ?>
      </div>
    </div>
    
<?php
unset($_SESSION['notification']);
endif;
?>