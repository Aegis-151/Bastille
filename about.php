<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}
else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      Bastille
   </title>

   <link rel="icon" href="images/logo.png" />

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">
   <div class="row">

      <div class="image">
         <img src="images/yummy.png" alt="">
      </div>

      <div class="content">
         <h3>
            WHAT MAKES US DIFFERENT?
         </h3>
            <p>
               Fresh ingredients. Handcrafted in our shops every day. Fully customizable and made right in front of you. Cheesecakes and Waffles can be enjoyed as breakfast, dessert, or a sweet treat at any time of day! Not feeling so sweet? We offer savory selections from our menu.
            </p>
            <a href="contact.php" class="btn">
               Contact us
            </a>
      </div>

   </div>
   
   
   
   <div class="row">
      
      <div class="image">
         <img src="images/logo2.png" style="box-shadow:none" alt="">
      </div>

      <div class="content">
         <h3>
            OUR SHOP, OUR TRADITIONS
         </h3>
         <p>
            It all started when the owner conducted laboratory-like experiments in the bakery at Les Gateaux  testing and tasting untilthey hit upon the magic formula. It's the same recipe we use today. Only the finest of ingredients would do--premium creamcheese, fresh heavy cream, eggs, and a touch of vanilla. No water. No fillers. All hand-blended in small batches and mixed forover 40 minutes. For our swirls and fruit-topped we use only the freshest fruit, homemade purees, imported chocolates and freshspices. Today we still make our cheesecake, waffles, and stuffed cones the same way, all handmade with premium ingredients.
         </p>
      </div>

   </div>
   
   
   
   <div class="row">

      <div class="image">
         <img src="images/kek.gif" alt="">
      </div>

      <div class="content">
         <h3>
            READY. SET. GROW!
         </h3>
         <p>
            We are a quickly growing company with multiple opportunities for advancement. Whether its more responsibility within your own store, or potentially even making a move to open a brand new store, it is only onward and upward at the Bastille!
		 </p>
      </div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>