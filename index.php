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
      <h2 id="site-name"><a href="/">Crystal Events</a></h2>
      <nav id="main-navigation" aria-label="Main navigation">
        <ul class="menu">
          <li><a href="/php-cms-main/">Home</a></li>
          <li><a href="ourEvents.php">Events</a></li>
          <li><a href="contactUs.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div >

  
    <!--   give banner to event page aswell-->


  <?php
  $query = 'SELECT *
    FROM categories';
  $result = mysqli_query($connect, $query);
  ?>
   <?php
   $record = mysqli_fetch_assoc($result)
   ?>
   <div class="container">
    <img src="<?php echo $record['image']; ?>"  alt="Event pictures" style="width:100%; height:400px; filter: blur(5px);">
    <div class="text-block">
    <h1 id="banner_heading">THE PARTY AND EVENT PLANNING EXPERTS</h1>
  
  </div>
</div>


  <?php while ($record = mysqli_fetch_assoc($result)): ?>
    <div id=category_container>
  
         <!--<?php
      $query_category = 'SELECT *
      FROM event_details
      WHERE event_id = category_id ';
      
      $result_category = mysqli_query($connect, $query_category);
      $record_category = mysqli_fetch_assoc($result_category);
      ?>
      <?php echo $record_category['event_id']; ?>-->
      
      <?php if ($record['image']): ?>

        <img src="<?php echo $record['image']; ?>"  alt="Event pictures" width="300" height="300">

        <!-- <p>Or by streaming the image through the image.php file:</p>
        <img src="admin/image.php?type=category&category_id=<?php echo $record['category_id']; ?>&width=80&height=80">  -->
        
      <?php else: ?>

        <p>This record does not have an image!</p>

      <?php endif; ?>
      <h2 id="event_name">
      <a href="ourEvents.php">
        <?php echo $record['name']; ?>
      </a>
      </h2>

    </div>

 

  <?php endwhile; ?>
  
  <footer id="footer">
      <div>&copy; Copyright Madiha_Umair, 2023.</div>
    </footer>
</body>

</html>