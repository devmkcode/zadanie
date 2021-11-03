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
</head> 

<body>
    <nav class="menu">
        <div class="menu__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
        </div>
        <div class="menu__toggler"><i class="fas fa-bars"></i></div>
        <ul class="menu__list">
            <li class="menu__item">o nas</li>
            <li class="menu__item">oferta</li>
            <li class="menu__item">towarzystwa ubezpieczeń</li>
            <li class="menu__item">dołącz do nas</li>
            <li class="menu__item">przydatne materiały</li>
            <li class="menu__item">oddziały</li>
        </ul>
    </nav>


