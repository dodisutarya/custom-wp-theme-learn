<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokodos</title>
    <style>
        body {
            margin: 50px auto;
            width: 80%;
        }

        #front-page {
            text-align: center;
        }

        h1 {
            font-size: 50px;
        }

        #custom_post h2{
            font-size: 25px;
        }

        #custom_post a{
            display: inline-block;
            width: 25%;
            margin: 0 1.5%;
            background-color: rgb(214, 125, 112);
            padding: 5px;
            text-align: center;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>
    <div id="front-page">
        <h1>Selamat datang di tokodos</h1>
        <a href="<?php echo home_url('/blog') ?>">Menuju Blog</a>
    </div>
    <div id="custom_post">
        <h2>Post Terakhir:</h2>
        <?php

        $custom_post = new WP_Query('cat=1&posts_per_page=3');

        if ($custom_post->have_posts()) :
            while ($custom_post->have_posts()) : $custom_post->the_post(); ?>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        <?php
            endwhile;
        else :
            echo 'tidak ada berita';
        endif;


        ?>

    </div>


</body>

</html>