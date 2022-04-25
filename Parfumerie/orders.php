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
   <title>Commandes</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Vos commandes</h3>
    <p> <a href="home.php">home</a> / order </p>
</section>

<section class="placed-orders">

    <h1 class="title">Commandes passées</h1>

    <div class="box-container">

    <?php
        $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_orders) > 0){
            while($fetch_orders = mysqli_fetch_assoc($select_orders)){
    ?>
    <div class="box">
        <p> placé sur : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
        <p> nom : <span><?php echo $fetch_orders['name']; ?></span> </p>
        <p> numéro : <span><?php echo $fetch_orders['number']; ?></span> </p>
        <p> e-mail : <span><?php echo $fetch_orders['email']; ?></span> </p>
        <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
        <p> method de payment  : <span><?php echo $fetch_orders['method']; ?></span> </p>
        <p> vos produits  : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
        <p> Prix total : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
        <p> Statut de paiment : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){echo 'tomato'; }else{echo 'green';} ?>"><?php echo $fetch_orders['payment_status']; ?></span> </p>
    </div>
    <?php
        }
    }else{
        echo '<p class="empty">Aucune commande passée pour le moment!</p>';
    }
    ?>
    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>