<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
</head>

<body>
    <?php
    ini_set('error_reporting', E_ALL);

    require("listPosts.php");

    ?>
    <header class="home">
        <div class="logo">
            <img src="assets/img/logo.svg" alt="logo ok" />
        </div>
        <div class="nav">
            <input type="checkbox" id="nav-check" />
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="blog.php">Blog</a>
                <a href="post.php">Services</a>
                <a href="sobre.php">About</a>
                <a href="contato.php">Contact</a>
            </div>
        </div>
    </header>
    <div class="container">
        <section class="flexNews">
            <?php foreach (get_all() as $post) : ?>
                
            <div>
                <picture>
                    <img src="https://picsum.photos/id/<?= $post['id']*7 ?>/480/260" />
                </picture>
                <h2><?= $post['title'] ?></h2>
                <p><?= substr(strip_tags($post['content']), 0, 90) ?></p>
            </div>

            <?php endforeach; ?>

            <div class="anuncio">
                <picture>
                    <img src="https://picsum.photos/id/75/1260/850" />
                </picture>
                <p>Quibusdam quis in architecto quidem. Iure, dolor quibusdam?</p>
            </div>
        </section>
    </div>
    <footer>
        <p>
            by Rogério Soares - 2021 &copy Direitos reservados
        </p>
    </footer>
</body>

</html>