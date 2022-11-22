<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/autixir-preview/autixir/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 10:54:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Autixir - Car Services and Auto Mechanic HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT ; ?>/public/assets/clients/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="<?php echo _WEB_ROOT ; ?>/public/assets/clients/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ; ?>/public/assets/clients/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ; ?>/public/assets/clients/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ; ?>/public/assets/clients/css/responsive.css">
</head>

<body>
<div class="wrapper">
    <?php
        $this->render('blocks/header2');
        
        $this->render('blocks/banner2');

        // $this->render($contact);

        $this->render($content);

        $this->render('blocks/footer');

    ?>
    
    
    


</div>

    <!-- All JS Plugins -->
    <script src="<?php echo _WEB_ROOT ; ?>/public/assets/clients/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="<?php echo _WEB_ROOT ; ?>/public/assets/clients/js/main.js"></script>

</body>
</html>