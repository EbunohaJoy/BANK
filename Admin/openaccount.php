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
      <li class="nav-item"><h3 class="nav-link " >Open Account</h3></li>
 
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
              <label for="firstName" class="form-label">Firstname</label>
              <input class="form-control" type="text" id="firstName" name="fname"  autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="lastName" class="form-label">Lastname</label>
              <input class="form-control" type="text" name="lname" id="lastName"  />
            </div>
           
         
            <div class="mb-3 col-md-6">
              <label class="form-label" for="phoneNumber">Email</label>
              <div class="input-group input-group-merge">
                
                <input type="text" id="phoneNumber" name="email" class="form-control" 555 0111" />
              </div>
            </div>
        
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Password</label>
              <input class="form-control" type="text" id="state" name="pass"  />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Confirm Password</label>
              <input class="form-control" type="text" id="state" name="cpass"  />
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Phonenumber</label>
              <input type="text" class="form-control"  name="phonenumber" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Address</label>
              <input type="text" class="form-control"  name="address" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Country</label>
              <input type="text" class="form-control"  name="country" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">State</label>
              <input type="text" class="form-control"  name="state" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="zipCode" class="form-label">Account Type</label>
              
              <select name="acc_type" id="" class="select2 form-select">
                <option value="<?= $_SESSION['account_type'] ?>" >Choose account type</option>
                <option value="savings_account">Savings account</option>
                <option value="checking_account">Checking Account</option>
                <option value="business_account">Business Account</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Transaction pin</label>
              <input type="text" class="form-control"  name="pin" />
            </div>
        
           
          
         
          </div>
          <input type="hidden" name="open_account">
          <div class="mt-2">
            <button type="" class="btn btn-primary me-2">Create</button>
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