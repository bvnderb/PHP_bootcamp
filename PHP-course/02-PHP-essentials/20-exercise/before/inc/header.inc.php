<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Culinary Cove &bull; 
      <?php if (!empty($pageTitle)): ?> 
      <?php echo $pageTitle; ?>
    <?php else: ?> 
      <?php echo "Welcome" ?>
      <?php endif ?>
    </title>
</head>
<body>
  <header class="header-with-background" style="background-image: url('<?php if (!empty($headerImg)): ?>
   <?php echo $headerImg; ?>'); ">
   <?php else: echo 'images/pexels-rachel-claire-4577740.jpg'; ?>'); ">
   <?php endif; ?>
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <a href="our-mission.php">Our mission</a>
      <a href="ingredients.php">Ingredients</a>
      <a href="menu.php">Menu</a>
    </nav>
  </header>

  <main>