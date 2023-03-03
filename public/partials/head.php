<?php
    $page_title = $page_title ?? 'Rikki Soriano, Front-End Developer & UX Designer | Portfolio';
    $page_desc = $page_desc ?? 'Hello! My name is Rikki Soriano, a Front-End Developer/UX Designer based in Vancouver, Canada. I invite you to come check my design and development works in this portfolio!';
?>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W87G54Q');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title?></title>
    <meta property="og:title" content="<?php echo $page_title?>" />
    <meta property="og:url" content="https://www.rikkisoriano.com/" />
    <meta property="og:description" content="Hello! My name is Rikki Soriano, a Front-End Developer/UX Designer based in Vancouver, Canada. I invite you to come check my design and development works in this portfolio!" />
    <meta property="og:image" content="<?php echo get_public_url('images/');?>rikki-soriano-og-graph-image.jpg" />
    <meta name="description" content="Hello! My name is Rikki Soriano, a Front-End Developer/UX Designer based in Vancouver, Canada. I invite you to come check my design and development works in this portfolio!">
    <meta name="keywords" content="rikki soriano, uiux designer, frontend developer, vancouver web developer, vancouver uiux designer, bcit new media, uiux designer, graphic designer, web developer, vancouver, user experience, new media">
    <meta name="author" content="Rikki Soriano">
    <link rel="shortcut icon" href="<?php echo get_public_url('images/');?>favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_public_url('styles/');?>slick.css"/>
    <link rel="stylesheet" href="<?php echo get_public_url('dist/css/main.min.css');?>">
</head>