<?php require_once 'components/head.php' ?>
<?php require_once 'components/nav.php' ?>
  

  
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Account Settings /</span> Account
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li>
      <!-- <li class="nav-item"><a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-bell me-1"></i> Notifications</a></li> -->
      <!-- <li class="nav-item"><a class="nav-link" href="pages-account-settings-connections.html"><i class="bx bx-link-alt me-1"></i> Connections</a></li> -->
    </ul>
    <div class="card mb-4">
      <h5 class="card-header">Profile Details</h5>
      <!-- Account -->
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
         
            <img src="assets/img/<?php echo $_SESSION['avata'] ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
          
          

         
  
        
          <form action="" method="post" enctype="multipart/form-data">
          <div class="button-wrapper">
          <input type="file" class="btn btn-primary me-2 mb-4" tabindex="0" name="avata">
       <input type="hidden" name="upload">
            <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Click to upload</span>
            </button>

            
          </div>
</form>
        </div>
      </div>
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
              <label for="firstName" class="form-label">First Name</label>
              <input class="form-control" type="text" disabled="true" id="firstName" name="firstName" value="<?php echo $_SESSION['firstname'] ?>" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input class="form-control" type="text" disabled="true" name="lastName" id="lastName" value="<?php echo $_SESSION['lastname'] ?>" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" value="<?php echo $_SESSION['email'] ?>" id="email" name="email" placeholder="" disabled="true" />
            </div>
            <!-- <div class="mb-3 col-md-6">
              <label for="organization" class="form-label">Organization</label>
              <input type="text" class="form-control" id="organization" name="organization" value="ThemeSelection" />
            </div> -->
            <div class="mb-3 col-md-6">
              <label class="form-label" for="phoneNumber">Phone Number</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">US (+1)</span>
                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="<?= $_SESSION['phonenumber'] ?>" />
             
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= $_SESSION['address'] ?>"  />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">State</label>
              <input class="form-control" type="text" id="state" name="state" value="<?= $_SESSION['state'] ?>" />
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
              <label class="form-label" for="country">Country</label>
              <input type="text" class="form-control" name="country"  placeholder="" value="<?= $_SESSION['country'] ?>" />

           
            </div>
            
            <div class="mb-3 col-md-6 ">
              <label for="state" class="form-label">Transaction Pin</label>
              <input class="form-control" type="text" id="state" name="t_pin" placeholder=".........." />
            </div>
      
         
          </div>
          <input type="hidden" name="profile">
          <div class="mt-2">
            <button type="" class="btn btn-primary me-2">Save changes</button>
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