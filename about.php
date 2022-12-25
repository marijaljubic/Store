<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="style.css">
<link rel="icon" href="data:image/jpeg;base64,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" type="image/x-icon">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section><br><br><br>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="https://i.pinimg.com/736x/83/78/26/837826aa85c7d169e1ab3eb39154c338.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p style="text-align: left;">What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p style="text-align: left;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/11/maman-outside.jpg?quality=82&strip=1" alt="">
        </div>

    </div>

   

</section>

<section class="reviews" id="reviews">

</section>

<?php @include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>