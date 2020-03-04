<?php

class template
{
    public static function header($title)
    {
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title?></title>
            <!-- CSS Dependencies -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://designrevision.com/demo/shards/extra/css/shards.min.css">
            <link rel="stylesheet" href="https://designrevision.com/demo/shards/extra/css/shards-extras.min.css">
        </head>

        <body>
            <div class="container">
                <nav class="fixed-top navbar navbar-expand-lg bg-white navbar-light">
                    <a class="navbar-brand" href="home.php">
                    <?php echo $title?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <!--
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuestros servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    -->
                        </ul>
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item ">
                                <!--Home-->
                                <a href="home.php"><svg aria-label="Inicio" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22">
                                        <path d="M45.3 48H30c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2-4.6-4.6-4.6s-4.6 2-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.5-.6 2.1 0l21.5 21.5c.4.4.6 1.1.3 1.6 0 .1-.1.1-.1.2v22.8c.1.8-.6 1.5-1.4 1.5zm-13.8-3h12.3V23.4L24 3.6l-20 20V45h12.3V34.2c0-4.3 3.3-7.6 7.6-7.6s7.6 3.3 7.6 7.6V45z"></path>
                                    </svg></a>

                            </li>
                            <div class="ml-3">

                            </div>
                            <li class="nav-item">
                                <!--Explore-->
                                <a href="/explore/"><svg aria-label="Buscar personas" class="" fill="#262626" height="22" viewBox="0 0 48 48" width="22">
                                        <path clip-rule="evenodd" d="M24 .5C37 .5 47.5 11 47.5 24S37 47.5 24 47.5.5 37 .5 24 11 .5 24 .5zm0 44c11.3 0 20.5-9.2 20.5-20.5S35.3 3.5 24 3.5 3.5 12.7 3.5 24 12.7 44.5 24 44.5zm-4.4-23.7c.3-.5.7-.9 1.2-1.2l14.8-8.1c.3-.1.6-.1.8.1.2.2.3.5.1.8l-8.1 14.8c-.3.5-.7.9-1.2 1.2l-14.8 8.1c-.3.1-.6.1-.8-.1-.2-.2-.3-.5-.1-.8l8.1-14.8zm6.2 5l4.3-7.8-7.8 4.3 3.5 3.5z" fill-rule="evenodd"></path>
                                    </svg></a>

                            </li>
                            <div class="ml-3">

                            </div>
                            <li class="nav-item">
                                <!--Likes-->
                                <a class="" href="/accounts/activity/"><svg aria-label="Feed de actividades" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22">
                                        <path clip-rule="evenodd" d="M34.3 3.5C27.2 3.5 24 8.8 24 8.8s-3.2-5.3-10.3-5.3C6.4 3.5.5 9.9.5 17.8s6.1 12.4 12.2 17.8c9.2 8.2 9.8 8.9 11.3 8.9s2.1-.7 11.3-8.9c6.2-5.5 12.2-10 12.2-17.8 0-7.9-5.9-14.3-13.2-14.3zm-1 29.8c-5.4 4.8-8.3 7.5-9.3 8.1-1-.7-4.6-3.9-9.3-8.1-5.5-4.9-11.2-9-11.2-15.6 0-6.2 4.6-11.3 10.2-11.3 4.1 0 6.3 2 7.9 4.2 3.6 5.1 1.2 5.1 4.8 0 1.6-2.2 3.8-4.2 7.9-4.2 5.6 0 10.2 5.1 10.2 11.3 0 6.7-5.7 10.8-11.2 15.6z" fill-rule="evenodd"></path>
                                    </svg></a>

                            </li>
                            <div class="ml-3">

                            </div>
                            <li class="nav-item">
                                <!--My image-->
                                <div class="d-flex h-100">
                                    <a href="profile.php" class="d-flex h-100">
                                        <img href="" class="rounded-circle" height="22" src="https://scontent.fsal1-1.fna.fbcdn.net/v/t1.0-9/p960x960/79734708_2467473576801019_4564267208657600512_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=jS-jUvqQNI4AX9bspVb&_nc_ht=scontent.fsal1-1.fna&_nc_tp=6&oh=06352883c3ac386387b8736eb8e48610&oe=5E8118FF" alt="">
                                    </a>
                                </div>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
    <?php
    }
}
