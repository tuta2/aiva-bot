<?php 
  require __DIR__ . '/admin/controllers/helpers/connector.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AIVA Bot – Airtel Intelligence Virtual Assistant</title>
  
  <!-- CSS -->
  <link href="<?php echo ROOT_URL; ?>/assets/css/output.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- FAV and Icons -->
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/assets/images/favicon.webp" />
</head>
<body class="bg-white text-gray-900">
  <?php include './includes/header.php'; ?>
  <?php include './includes/hero.php'; ?>
  <?php include './includes/roles.php'; ?>
  <?php include './includes/tasks.php'; ?>
  <?php include './includes/vision.php'; ?>
  <?php include './includes/chat-button.php'; ?>
  <?php include './includes/chat-modal.php'; ?>
  <?php include './includes/footer.php'; ?>

  <!-- Backdrop -->
  <div id="sidebar-backdrop" class="fixed inset-0 bg-black/50 z-[90] hidden lg:hidden"></div>

  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-view.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-top.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/chat-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/chat-bot.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/header.js"></script>
</body>
</html>
