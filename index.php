<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome to CBC News</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/article.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/navigation_buttons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/subscriber.css">

    
</head>
<body>

<div></div>
    <?php include 'assets/includes/header.php'; ?>


   <div class="container">
    <section id="carousel">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item">
                    <div class="jumbotron pulse animated business carousel-hero" style="background-image: url('<?php include "assets/php/carosl1.php"; echo $row['img']?>">
                        
                        <h1 class="hero-title"><?php include "assets/php/carosl1.php"; echo $row["title"]?></h1>
                        <p class="hero-subtitle"><?php include "assets/php/carosl1.php"; echo substr($row["descript"],0,50);echo".....";?></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="post_pages/business.php">Learn more</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron pulse animated politics carousel-hero">
                        <h1 class="hero-title"><?php include "assets/php/carosl2.php"; echo $row["title"]?></h1>
                        <p class="hero-subtitle"><?php include "assets/php/carosl2.php"; echo substr($row["descript"],0,50);echo".....";?></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="jumbotron pulse animated education carousel-hero">
                        <h1 class="hero-title"><?php include "assets/php/carosl3.php"; echo $row["title"]?></h1>
                        <p class="hero-subtitle"><?php include "assets/php/carosl2.php"; echo substr($row["descript"],0,50);echo".....";?></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="post_pages/education.php">Learn more</a></p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="jumbotron pulse animated lifstyle carousel-hero">
                        <h1 class="hero-title"><?php include "assets/php/carosl4.php"; echo $row["title"]?></h1>
                        <p class="hero-subtitle"><?php include "assets/php/carosl4.php"; echo substr($row["descript"],0,50);echo".....";?></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol
                class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3" class="active"></li>
                </ol>
        </div>
    </section>
</dv>
   
   
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>
    <div class="article-list">
            <div class="container">
                <div class="intro">
                    <h2 class="text-left">Business</h2>
                    <p class="text-center"> </p>
                </div>
                <div class="row articles">
                    <div class="col-sm-6 col-md-4 item "><a href="post_pages/business.php"><img class="img-fluid" src="<?php include "assets/php/b1.php"; echo $row['img']?>"></a>
                        <h3 class="name"><?php include "assets/php/b1.php"; echo $row["title"]?></h3>
                        <p class="description"><?php include "assets/php/b1.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/business.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                    <div
                        class="col-sm-6 col-md-4 item"><a href="post_pages/business.php"><img class="img-fluid" src="<?php include "assets/php/b2.php"; echo $row['img']?>"></a>
                        <h3 class="name"><?php include "assets/php/b2.php"; echo $row["title"]?></h3>
                        <p class="description"><?php include "assets/php/b2.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/business.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-6 item"><a href="post_pages/business.php"><img class="img-fluid" src="<?php include "assets/php/b3.php"; echo $row['img']?>"></a>
                    <h3 class="name"><?php include "assets/php/b3.php"; echo $row["title"]?></h3>
                    <p class="description"><?php include "assets/php/b3.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/business.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
        </div>
        </div>
        </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-left">Politics</h2>
                <p class="text-center"></p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="post_pages/politics.php"><img class="img-fluid" src="<?php include "assets/php/p1.php"; echo $row['img']?>"></a>
                    <h3 class="name"><?php include "assets/php/p1.php"; echo $row["title"]?></h3>
                    <p class="description"><?php include "assets/php/p1.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/politics.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="post_pages/politics.php"><img class="img-fluid" src="<?php include "assets/php/p2.php"; echo $row['img']?>"></a>
                    <h3 class="name"><?php include "assets/php/p2.php"; echo $row["title"]?></h3>
                    <p class="description"><?php include "assets/php/p2.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/politics.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-6 item"><a href="post_pages/politics.php"><img class="img-fluid" src="<?php include "assets/php/p3.php"; echo $row['img']?>"></a>
                <h3 class="name"><?php include "assets/php/p3.php"; echo $row["title"]?></h3>
                <p class="description"><?php include "assets/php/p3.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/politics.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
    </div>
    </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-left">Education</h2>
                <p class="text-center"> </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="post_pages/education.php"><img class="img-fluid" src="<?php include "assets/php/e1.php"; echo $row['img']?>"></a>
                    <h3 class="name"><?php include "assets/php/e1.php"; echo $row["title"]?></h3>
                    <p class="description"><?php include "assets/php/e1.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/education.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="post_pages/education.php"><img class="img-fluid" src="<?php include "assets/php/e2.php"; echo $row['img']?>"></a>
                    <h3 class="name"><?php include "assets/php/e2.php"; echo $row["title"]?></h3>
                    <p class="description"><?php include "assets/php/e2.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/education.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-6 item"><a href="post_pages/education.php"><img class="img-fluid" src="<?php include "assets/php/e3.php"; echo $row['img']?>"></a>
                <h3 class="name"><?php include "assets/php/e3.php"; echo $row["title"]?></h3>
                <p class="description"><?php include "assets/php/e3.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/education.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
    </div>
    </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-left">Lifestyle</h2>
                <p class="text-center"> </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="post_pages/lifestyle.php"><img class="img-fluid" src="<?php include "assets/php/l1.php"; echo $row['img']?>"></a>
                    <h3 class="name"><?php include "assets/php/l1.php"; echo $row["title"]?></h3>
                    <p class="description"><?php include "assets/php/l1.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/lifestyle.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="post_pages/lifestyle.php"><img class="img-fluid" src="<?php include "assets/php/l2.php"; echo $row['img']?>"></a>
                    <h3 class="name"><?php include "assets/php/l2.php"; echo $row["title"]?></h3>
                    <p class="description"><?php include "assets/php/l2.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/lifestyle.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-6 item"><a href="post_pages/lifestyle.php"><img class="img-fluid" src="<?php include "assets/php/l3.php"; echo $row['img']?>"></a>
                <h3 class="name"><?php include "assets/php/l3.php"; echo $row["title"]?></h3>
                <p class="description"><?php include "assets/php/l3.php"; echo substr($row["descript"],0,50);echo".....";?></p><a href="post_pages/lifestyle.php" class="action"><i class="fa fa-arrow-circle-right"></i></a></div>
    </div>
    </div>
    </div>
   <?php include 'assets/includes/footer.php'; ?>
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
   
</body>

</html>