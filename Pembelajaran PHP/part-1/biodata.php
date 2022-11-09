<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <title>My Biodata</title>
</head>
<body>
    <nav class="navbar">
    <header class="header">        
        <h1 class="title">
            <?php 
                $title = 'Portofolio';
                echo $title;
            ?>
        </h1>
        <p class="subtitle">
            <?php 
                $subtitle = 'By Luqman Amirullah';
                echo $subtitle;
            ?>
        </p>
    </header>
        <ul class="nav-ul">
            <li class="nav-li">Home</li>
            <li class="nav-li">Profil</li>
            <li class="nav-li">Portofolia</li>
            <li class="nav-li">Contact Us</li>
        </ul>
    </nav>
    <section class="hero">
        <div class="hero_item">
            <h1 class="title-hero">
                <?php 
                    $title_hero = 'Hello My Name is';
                    echo $title_hero;
                ?>
                <span class="name">
                    <?php 
                        $name = 'Luqman Amirullah';
                        echo $name;
                    ?>
                </span>
            </h1>
            <div class="text-introduce">
                <p >
                    <?php 
                        $text = 'Now I am studying in SMKN 4 Bandung, my hoby is sleep and eat hahaha. I currently learnig about  PHP programming language.';
                        echo $text;
                    ?>
                </p>
            </div>
        </div>
        <div class="hero_item">
            <img src="./asstes/cowok3d.png" alt="ilustration by freepik" width="300px">
        </div>
    
    </section>
   
</body>
</html>