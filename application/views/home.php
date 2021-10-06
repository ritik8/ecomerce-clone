
<?php
require_once('common/header.php');
$prev=0;
?>




<div class='container-fluid' style="">
<div class="clear:both"></div>
<?php foreach($category as $c){ $num=$c['c']+$prev;?>
<div class='container-fluid' style="height:300px;background-color:#f5faf9;margin-left:10px;margin-right:10px;margin-top:10px;margin-bottom:10px;">

<div style='padding-top:10px;padding-left:5px;'><h4><?php echo $c['name']; ?></h4></div>
<div  style='margin-top:5px;height:fit-content;'>
<div class="container">
  <div class="row slider">
  <?php for($i=$prev;$i<$num;$i++){ ?>
<div class="col-sm-12" >
<div class="card" style="width: 18rem;">
<div style="margin:auto;">
<a href="<?php echo base_url() ?>productinfo/show/<?php echo $product[$i]['p_id']; ?>">
  <img class="" style="height:100px;width:100px;" src="<?php echo base_url() ?>public/images/<?php echo $product[$i]['product_pic']; ?>" alt="Card image cap">
  </a>  
</div>
  <div class="card-body">
    <p class="card-text"><?php echo $product[$i]['title']; ?></p>
    <p class="card-text"><?php echo "Rs ".$product[$i]['price']; ?></p>
  </div>
</div>
</div>


<?php } $prev=$num;?>



</div>
</div>
<div>

</div>

    
</div>  



</div>
<?php } ?>


</div>
<script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.bundle.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>public/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type='text/javascript'>
$('.slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
</body>

</html>