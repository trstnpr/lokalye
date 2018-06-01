<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        <?php echo $title; ?>
    </title>

    <meta name="title" content="<?php echo $meta_title; ?>">
    <meta name="keywords" content="<?php echo $meta_keyword; ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="robots" content="index, follow" />


    <link href="<?php echo base_url('build/styles/main.css?v='.strtotime('now')); ?>" rel="stylesheet">

</head>



<body>

    <header>

        <nav class="app-nav navbar navbar-expand-lg fixed-top">

            <div class="container">

                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url('build/images/logo-o.png'); ?>" class="img-fluid" alt="<?php echo the_config('site_name'); ?>" title="<?php echo the_config('site_name'); ?>" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Listing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>

    </header>

    <main>

        <div class="page-wrap">