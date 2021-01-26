<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECF Html / Css - Louison DUPONT</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header_left_content">
                <p class="logo_site">DWWM</p>
            </div>
            <div class="header_right_content">
                <button class="ham"></button>
                <nav class="navbar">
                    <ul>
                        <li class="<?php if ( $page && $page==='accueil'){
                            echo 'is-active-page';
                        } ?>"><a href="index.php">Accueil</a></li>
                        <li class="<?php if ( $page && $page==='formation'){
                            echo 'is-active-page';
                        } ?>"><a href="formation.php">La Formation</a></li>
                        <li class="<?php if ( $page && $page==='etudiants'){
                            echo 'is-active-page';
                        } ?>"><a href="etudiants.php">Les étudiants</a></li>
                        <li class="<?php if ( $page && $page==='actualites'){
                            echo 'is-active-page';
                        } ?>"><a href="actualites.php">Actualités</a></li>
                        <li class="<?php if ( $page && $page==='contact'){
                            echo 'is-active-page';
                        } ?>"><a href="contact.php">Nous contacter</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
