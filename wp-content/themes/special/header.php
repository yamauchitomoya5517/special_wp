<!doctype html>
<html lang="ja">

<head>
    <title>
        <?php bloginfo('name'); ?> |
        <?php bloginfo('description'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jpn.css">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="★★★favicon画像URL★★★">
    <?php wp_head(); ?>
</head>

<body>
    <header id="header" class="mb-10">
        <picture>
            <source media="(min-width: 1280px)" srcset="<?php bloginfo('template_directory'); ?>/img/top_lg.jpg">
            <source media="(min-width: 1024px)" srcset="<?php bloginfo('template_directory'); ?>/img/top_lg.jpg">
            <source media="(min-width: 640px)" srcset="<?php bloginfo('template_directory'); ?>/img/top_xs.jpg">
            <source media="(min-width: 320px)" srcset="<?php bloginfo('template_directory'); ?>/img/top_xs.jpg">
            <img src="<?php bloginfo('template_directory'); ?>/img/top_lg.jpg" class="w-100" alt="トップ画像">
        </picture>
    </header>
    <!-- /header -->