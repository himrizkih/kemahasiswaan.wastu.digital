<script>
  // Disable right-click and context menu
  document.addEventListener('contextmenu', (e) => {
    e.preventDefault();
    alert('Right-click is disabled on this page.');
  });

  // Disable copy, cut, and paste
  document.addEventListener('copy', (e) => {
    e.preventDefault();
    alert('Copying is not allowed.');
  });
  
  document.addEventListener('cut', (e) => {
    e.preventDefault();
    alert('Cutting is not allowed.');
  });

  document.addEventListener('paste', (e) => {
    e.preventDefault();
    alert('Pasting is not allowed.');
  });
  
  // Prevent text selection
  document.addEventListener('selectstart', (e) => {
    e.preventDefault();
  });
</script>

<!-- Favicons -->
  <link rel="shortcut icon" type="image/gif" href="<?php echo base_url().'theme/assets/img/favicon.png'?>">
  <link rel="apple-touch-icon" href="<?php echo base_url().'theme/assets/img/apple-touch-icon.png'?>">

  <!-- CSS Files -->
  <link href="<?php echo base_url().'theme/assets/vendor/animate.css/animate.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/assets/vendor/aos/aos.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/assets/vendor/bootstrap-icons/bootstrap-icons.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/assets/vendor/boxicons/css/boxicons.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/assets/vendor/glightbox/css/glightbox.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/assets/vendor/remixicon/remixicon.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/assets/vendor/swiper/swiper-bundle.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/assets/css/variables.css'?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo base_url().'theme/assets/css/style.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/assets/css/style1.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/assets/css/style-front.css'?>" rel="stylesheet">