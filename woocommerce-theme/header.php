<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woocommerce Site</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class('test'); ?>>
    <header>
        <div class="container">
            <img src="<?php bloginfo('template_directory'); ?>/images/woocommerce-logo.png" class="img-fluid" />
        </div>
    </header>