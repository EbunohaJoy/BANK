<?php require_once 'components/head.php' ?>
<?php require_once 'components/nav.php' ?>
  

  
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            


<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><h3 class="nav-link " >Local/Domestic Transfer</h3></li>
 
    </ul>
    <div class="card mb-4">
   
      <?php if (isset($_GET['error'])) : ?>
              <?= showAlert('danger', $_GET['error']); ?>
            <?php endif; ?>

            <?php if (isset($_GET['success'])) : ?>
              <?= showAlert('success', $_GET['success']); ?>
            <?php endif; ?>

            <?php if (isset($_GET['warning'])) : ?>
              <?= showAlert('warning', $_GET['warning']); ?>
            <?php endif; ?>
      <hr class="my-0">
      <div class="card-body">
    
          <div class="row">

          <div class="jumbotron">
      

            <div class="row mt-2">
                <div class="col-md-6">
                    <p>Beneficiary Accout Name</p>
                </div>
                <div class="col-md-6">
                <p><?php echo $_SESSION['acc_name'] ?></p>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <p>Beneficiary Accout Number</p>
                </div>
                <div class="col-md-6">
                <p><?php echo $_SESSION['acc_number'] ?></p>
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <p>Bank Name</p>
                </div>
                <div class="col-md-6">
                <p><?php echo $_SESSION['bank_name'] ?></p>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <p>Amount</p>
                </div>
                <div class="col-md-6">
                <p><?php echo $_SESSION['amount'] ?></p>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <p>Description</p>
                </div>
                <div class="col-md-6">
                <p><?php echo $_SESSION['desc'] ?></p>
                </div>

            </div>

          </div>


            
        
           
           
        
           
          
         
          </div>
          <form id="formAccountSettings" method="POST">
            
          <div class="mb-3 col-md-6 mt-5">
              <label for="state" class="form-label">Enter your pin</label>
              <input class="form-control" type="text" id="state" name="t_pin"  />
            </div>
          <input type="hidden" name="confirm_local_transfer">
          <div class="mt-2">
            <button type="" class="btn btn-primary me-2">Send</button>
            <!-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> -->
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>

  </div>
</div>


            
          </div>
          <!-- / Content -->

          
          <?php require_once 'components/footer.php' ?>