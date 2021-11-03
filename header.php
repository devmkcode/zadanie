<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' );?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if(is_singular() && pings_open(get_queried_object() ) ): ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;&family=Quicksand:wght@700&display=swap" rel="stylesheet">
</head> 

<body>
    <nav class="menu">
        <div class="menu__logo"></div>
        <ul class="menu__list">
            <li class="menu__item">o nas</li>
            <li class="menu__item">oferta</li>
            <li class="menu__item">towarzystwa ubezpieczeń</li>
            <li class="menu__item">dołącz do nas</li>
            <li class="menu__item">przydatne materiały</li>
            <li class="menu__item">oddziały</li>
        </ul>
    </nav>
</div>
<main class="main__container">

