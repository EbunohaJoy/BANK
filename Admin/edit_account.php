<?php require_once 'components/head.php' ?>
<?php require_once 'components/nav.php' ?>
  
<?php


if(isset($_GET['edit_id'])){
  $the_edit_id =  $_GET['edit_id'];
}


$query = "SELECT * FROM  users WHERE id = $the_edit_id ";
$select_id = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($select_id)) {
  // dnd($row);
    $id =  $row['id'];
    $lastname =  $row['lastname'];
    $firstname  =  $row['firstname'];
    $email =  $row['email'];
    $phone =  $row['phonenumber'];
    $address =  $row['address'];
    $country =  $row['country'];
    $state =  $row['state'];
    $acc_type =  $row['account_type'];
    $pin =  $row['transaction_pin'];
}

?>
  
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            


<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><h3 class="nav-link " >Edit User Account</h3></li>
 
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
              <input class="form-control" type="text" id="firstName" name="fname" value="<?= $firstname ?>"  autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="lastName" class="form-label">Lastname</label>
              <input class="form-control" type="text" name="lname" id="lastName" value="<?= $lastname ?>" />
            </div>
           
         
            <div class="mb-3 col-md-6">
              <label class="form-label" for="phoneNumber">Email</label>
              <div class="input-group input-group-merge">
                
                <input type="text" id="phoneNumber" name="email" class="form-control" 555 0111"  value="<?= $email ?>"/>
              </div>
            </div>
        
            <!-- <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Password</label>
              <input class="form-control" type="text" id="state" name="pass"  />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Confirm Password</label>
              <input class="form-control" type="text" id="state" name="cpass"  />
            </div> -->
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Phonenumber</label>
              <input type="text" class="form-control"  name="phonenumber"  value="<?= $phone ?>"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Address</label>
              <input type="text" class="form-control"  name="address"   value="<?= $address ?>"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Country</label>
              <input type="text" class="form-control"  name="country"  value="<?= $country ?>"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">State</label>
              <input type="text" class="form-control"  name="state"  value="<?= $state ?>"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="zipCode" class="form-label">Account Type</label>
              
              <select name="acc_type" id="" class="select2 form-select">
                <option value= value="<?= $acc_type ?>" >Choose account type</option>
                <option value="savings_account">Savings account</option>
                <option value="checking_account">Checking Account</option>
                <option value="business_account">Business Account</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="" class="form-label">Transaction pin</label>
              <input type="text" class="form-control"  name="pin" value="<?= $pin ?>"/>
            </div>
        
           
          
         
          </div>
          <input type="hidden" name="edit_account">
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