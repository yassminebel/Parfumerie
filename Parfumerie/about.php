<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>A propos </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>A propos de nous</h3>
    <p> <a href="home.php">home</a> / A propos </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about.jfif" alt="">
        </div>

        <div class="content">
            <h3>Pourquoi nous choisir?</h3>
            <p> Grâce à notre site de vente en ligne accessible à tous et facile d’utilisation, retrouvez les meilleurs parfums</p>
            <a href="shop.php" class="btn">Achetez maintenant</a>
        </div>

    </div>


    <div class="flex">

        <div class="image">
            <img src="images/about.webp" alt="">
        </div>

        <div class="content">
            <h3>Qui nous sommes?</h3>
            <p>Créé en mai 2012, ProFumo est le site e-commerce N° 1 au Maroc dont l’objectif et la
                 vision sont de fournir les parfums au meilleur prix pour tous les Marocains.</p>
            <a href="#reviews" class="btn">Avis des clients</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Avis des clients</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nour</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Salma</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>hasnaa</h3>
        </div>

        

       

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>