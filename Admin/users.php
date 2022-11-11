<?php require_once 'components/head.php' ?>
<?php require_once 'components/nav.php' ?>
  

  
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
           <div class="content">
        <div class="row">

        
        </div>
      </div>         
      <?php if (isset($_GET['error'])) : ?>
              <?= showAlert('danger', $_GET['error']); ?>
            <?php endif; ?>

            <?php if (isset($_GET['success'])) : ?>
              <?= showAlert('success', $_GET['success']); ?>
            <?php endif; ?>
       <div class="col-lg-12">
<div class="white_card mb_30 card_height_100">
<div class="white_card_header pb-0">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Users</h3>
</div>
</div>
</div>
<div class="white_card_body pt-0">
<div class="QA_section">
<div class="QA_table mb-0 transaction-table">

<div class="table-responsive">
<table class="table  ">
  <thead>
    <th>User id</th>
    <th>Account Name</th>
    <th>Email</th>
    <th>Account type</th>
    <th>Account Number</th>
    <th>Account Balance</th>
    <th>Status</th>
    <th colspan="2">Action</th>
  </thead>
<tbody>

  <?php

$sql = "SELECT * FROM users where user_type = 0";
$query = mysqli_query($conn,$sql);
$row_count = mysqli_num_rows($query);
// dnd($row_count);
$_SESSION['tota_users'] = $row_count;
// dnd($_SESSION['tota_users']);
while($row = mysqli_fetch_assoc($query)){
    // var_dump($row);
    $userid = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $acc_type = $row['account_type'];
    $acc_number = $row['account_number'];
    $acc_bal = $row['account_balance'];
    $status = $row['account_status'];
    echo "<tr>";
    echo "<td class='sold-thumb'>$userid </td>";
    echo "<td>$firstname $lastname </td>";
    echo "<td>$email </td>";
    echo "<td>$acc_type </td>";
    echo "<td>$acc_number </td>";
    echo "<td>$acc_bal </td>";
    echo "<td>$status </td>";
    echo "<td> <a href='edit_account.php?edit_id=$userid'>Edit</a> </td>";
    echo "<td> <a onClick=\"javascript: return confirm('Please confirm deletion');\"  href='users.php?del_id=$userid'>Delete</a> </td>";


    echo "</tr>";

    // echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?id=".$query2['id']."'>x</a></td><tr>"; //use double quotes for js inside php!
}
  ?>


</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
          <!-- / Content -->

          
          <?php require_once 'components/footer.php' ?>
          
