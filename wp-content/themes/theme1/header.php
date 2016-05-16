<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <title><?php bloginfo('name'); wp_title();?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="head-wrapper">
    <div class="head">
        <div class="head-logo"><a href="/"><img src="<?php bloginfo('template_url')?>/images/logo.jpg" alt=""/></a></div>
        <div class="head-banner"><img src="<?php bloginfo('template_url')?>/images/728x90.jpg" alt=""/></div>
    </div>
</div>
<div class="menu-wrapper">
    <div class="menu-main">
        <?php if(!dynamic_sidebar('menu_header')):?>
            <span>Это область меню, добавляемого из виджетов</span>
        <?php endif; ?>
            <ul class="ico-social">
            <li><a href="#"><img src="<?php bloginfo('template_url')?>/images/ico-vk.png"/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url')?>/images/ico-youtobe.png"/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url')?>/images/ico-facebook.png"/></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url')?>/images/ico-twitter.png"/></a></li>
        </ul>
    </div>
</div>