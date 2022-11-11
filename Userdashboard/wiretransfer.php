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
      <li class="nav-item"><h3 class="nav-link " >International/Wire Transfer</h3></li>
 
    </ul>
    <div class="card mb-4">
     
      <?php if (isset($_GET['error'])) : ?>
              <?= showAlert('danger', $_GET['error']); ?>
            <?php endif; ?>

            <?php if (isset($_GET['success'])) : ?>
              <?= showAlert('success', $_GET['success']); ?>
            <?php endif; ?>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Beneficiary Account Name</label>
              <input class="form-control" type="text" id="firstName" name="acc_name"  autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="lastName" class="form-label">Beneficiary Account Number</label>
              <input class="form-control" type="text" name="acc_number" id="lastName"  />
            </div>
           
         
            <div class="mb-3 col-md-6">
              <label class="form-label" for="phoneNumber">Bank Name</label>
              <div class="input-group input-group-merge">
                
                <input type="text" id="phoneNumber" name="bank_name" class="form-control" 555 0111" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Swift Code</label>
              <input type="text" class="form-control" id="address" name="code" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Amount</label>
              <input class="form-control" type="text" id="state" name="amount"  />
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">description </label>
              <input type="text" class="form-control" name="desc" />
            </div>
           
        
           
          
         
          </div>
          <input type="hidden" name="wire_transfer">
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