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
    <p id="about">Our event planners have a lot of options to provide you for your event!
       We have helped plan hundreds of events in Mississauga, 
       the Greater Toronto Area and in Southern Ontario. 
       We are experienced at making sure no detail is overlooked and
        that you have everything you need to have a successful event, 
        whether it’s an anniversary, a farewell, a corporate family day,
         a bridal shower, a baby shower or a simple birthday party.</p>
<div class="form_container">

<h2>Get in Touch</h2>

<form method="post">
  <div id=form_fields>
  <label for="first">First:</label>
  <input type="text" name="first" id="first" placeholder="Your first name.." >
  </div>

  
  <div id=form_fields>
  <label for="last">Last:</label>
  <input type="text" name="last" id="last"  placeholder="Your last name.." >
  </div>

  <div id=form_fields>
  <label for="email">Email:</label>
  <input type="email" name="email" id="email" placeholder="test@gmail.com" >
  </div>

  <div id=form_fields>
  <label for="country">Country</label>
  <select id="country" name="country">
    <option value="canada">Canada</option>
    <option value="usa">USA</option>
  </select>
  </div>

  <div id=form_fields>
  <label for="subject">Subject</label>
  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  </div>

  <div id=form_fields>
  <input type="submit" value="Submit">
  </div>
</form>
</div>
<div id="icons_container">
    <?php
  $querySocial = 'SELECT *
  FROM social_media';
  $resultSocial = mysqli_query($connect, $querySocial);
?>

<?php while ($recordSocial = mysqli_fetch_assoc($resultSocial)): ?>
  <?php if ($recordSocial['image']): ?>
    <a href="<?php echo $recordSocial['url']; ?>"><img src="<?php echo $recordSocial['image']; ?>"  alt="Social media icons" width="50" height="50"></a>
  <?php else: ?>
    <p>This record does not have an image!</p>
  <?php endif; ?>
<?php endwhile; ?>

</div>

<footer id="footer">
      <div>&copy; Copyright Madiha_Umair, 2023.</div>
    </footer>
  </body>
  </html>
