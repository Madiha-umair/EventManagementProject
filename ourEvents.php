<?php

include('admin/includes/database.php');
include('admin/includes/config.php');
include('admin/includes/functions.php');

?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  <title>Crystal Events</title>
  <link href="/styles.css" type="text/css" rel="stylesheet">
  <link href="./style.css" type="text/css" rel="stylesheet">
  
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
</head>

<body>
    <header id="header" class="flex-container" >
      <h2 id="site-name"><a href="/php-cms-main/">Crystal Events</a></h2>
      <nav id="main-navigation" aria-label="Main navigation">
        <ul class="menu">
          <li><a href="/php-cms-main/">Home</a></li>
          <li><a href="ourEvents.php">Events</a></li>
          <li><a href="contactUs.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div >

<?php
  $queryEvent = 'SELECT *
  FROM event_details';
  $resultEvent = mysqli_query($connect, $queryEvent);
?>
  <?php while ($record = mysqli_fetch_assoc($resultEvent)): ?>
    <div id=category_container>

  <?php if ($record['image']): ?>
    <img src="<?php echo $record['image']; ?>"  alt="Category pictures" width="300" height="300">
  <?php else: ?>
    <p>This record does not have an image!</p>
  <?php endif; ?>
  <h2>
    <?php echo $record['details']; ?>
  </h2>
</div>


<?php endwhile; ?>
<footer id="footer">
      <div>&copy; Copyright Madiha_Umair, 2023.</div>
    </footer>
  </body>
  </html>