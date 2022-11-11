<?php require_once 'components/head.php' ?>
<?php require_once 'components/nav.php' ?>
  

  
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
           <div class="content">
        <div class="row">
        <div class="col-lg-8 offset-md-2 ">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header pb-0">
<div class="box_header m-0">
</div>
</div>
<div class="white_card_body">
<div class="d-flex mb_30 border_bottom_1px pb-3">
<div class="flex-shrink-0">
<img class="me-3 rounded-circle me-0 me-sm-3" src="assets/img/<?= $_SESSION['avata'] ?>" alt="" width="60" height="60">
</div>
<div class="flex-grow-1">
<span>Hello</span>
<h4 class="mb-2"><?php echo $_SESSION['firstname'] ?><span style="padding-left:5px;"><?= $_SESSION['lastname'] ?></span></h4>
<p class="mb-1"> <span><i class="fa fa-phone me-2 text-primary"></i></span>0<?= $_SESSION['phonenumber'] ?></p>
<p class="mb-1"> <span><i class="fa fa-envelope me-2 text-primary"></i></span>
<a href="" class="__cf_email__" ><?= $_SESSION['email'] ?></a>
</p>
</div>
</div>
<ul class="card-profile__info">
<li>
<h5 class=" me-4">Account Type :</h5>
<span class=""><?= $_SESSION['account_type']  ?></span>
</li>
<li>
<h5 class=" me-4">Account Number :</h5>
<span class=""><?= $_SESSION['account_number'] ?></span>
</li>
<li>
<h5 class=" me-4">Account Status :</h5>
<span class=""><?= $_SESSION['account_status'] ?></span>
</li>
<li>
<h5 class="me-4">Address :</h5>
<span class=""><?= $_SESSION['address'] ?></span>
</li>
<li class="mb-1">
<h5 class="me-4">State :</h5>
<span><?= $_SESSION['state'] ?></span>
</li>
<li>
<h5 class=" me-4">Country :</h5>
<span class=""><?= $_SESSION['country']  ?></span>
</li>
<!-- <li>
<h5 class=" me-4">Last Log</h5>
<span class="text-muted">3 February, 2019, 10:00 PM</span>
</li> -->
</ul>
</div>
</div>
</div>
        
        </div>
      </div>
          <!-- / Content -->

          
          <?php require_once 'components/footer.php' ?>