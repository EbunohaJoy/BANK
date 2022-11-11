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
      <li class="nav-item"><h3 class="nav-link " >Block User</h3></li>
 
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
              <label for="lastName" class="form-label">Select User</label>
              <select name="user" id="" class="form-control">
              <option value="">Select user</option>
               
                <?php
                $sql = "SELECT * FROM users where user_type = 0";
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($query)){
                    $userid = $row['id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname']; 
               
                    ?>
                   
             <option value='<?= $userid ?>' ><?= $firstname ?> <?= $lastname ?></option>;
             
               <?php } 
                ?>
              </select>
            </div>
           
         
            
<!--         
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Amount</label>
              <input class="form-control" type="text" id="state" name="amount"  />
            </div> -->
         
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Action</label>
             <select name="status" id="" class="form-control">
             <option value="">Select Action</option>
                <option value="freezed">Freeze Account</option>
                <option value="blocked">Block Account</option>
                <option value="active">Active</option>
             </select>
            </div>
           
        
            <!-- <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Message</label>
              <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>  -->
            
         
          </div>
          <input type="hidden" name="block_account">
          <div class="mt-2 m-auto">
            <button type="" class="btn btn-primary me-4">Submit</button>

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