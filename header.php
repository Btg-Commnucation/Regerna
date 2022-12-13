<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="logo__container">
            <?php $logo = get_field('logo', 'option')  ?>
            <img src="<?= $logo ? esc_url($logo['url']) : get_template_directory_uri() . '/public/logo-regerna.svg' ?>" alt="<?= $logo ? esc_attr($logo['alt']) : 'Logo Regerna' ?>">
        </div>
        <div class="slogan__container">
            <h1 class="slogan"><?= get_field('slogan', 'option') ? get_field('slogan', 'option') :  'Leveraging the heart\'s natural regeneration mechanisms for treating heart failure'; ?></h1>
            <?php $decoration = get_field('decoration', 'option'); ?>
            <img src="<?= $decoration ? esc_url($decoration['url']) : get_template_directory_uri() . '/public/decoration.svg' ?>" alt="<?= $decoration ? esc_attr($decoration['alt']) : 'Leveraging the heart\'s natural regeneration mechanisms for treating heart failure' ?>">
        </div>
    </header>