<?php require_once 'components/head.php' ?>
<?php require_once 'components/nav.php' ?>



      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="row" >
  <div class="col-lg-12 mb-4 order-0" >
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h2 class="card-title text-primary">Hello Admin</h2>
            <p class="mb-4"><span class="fw-bold"></span> </p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary"></a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.html">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-lg-12 col-md-4 order-1">
    <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">No Of Registered Users</span>
            <h3 class="card-title mb-2"><?php echo $_SESSION['tota_users'] ?></h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +72.80%</small>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4 col-md-12 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span>Total Credited</span>
            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
          </div>
        </div>
      </div> 
    
      <div class=" col-lg-4 col-md-12 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span>Total Debited</span>
            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +12.42%</small>
          </div>
        </div>
      </div>
    
      
    </div>
  </div>

 
</div>


            
          </div>
          <!-- / Content -->

          <div class="col-lg-12">
<div class="white_card mb_30 card_height_100">
<div class="white_card_header pb-0">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Recent Transactions</h3>
</div>
</div>
</div>
<div class="white_card_body pt-0">
<div class="QA_section">
<div class="QA_table mb-0 transaction-table">

<div class="table-responsive">
<table class="table  ">
<tbody>
  <?php
$sql = "SELECT * FROM transactions ";
$query = mysqli_query($conn,$sql);
$row_count = mysqli_num_rows($query);
while($row = mysqli_fetch_assoc($query)){

$status = $row['status'];
$amount = $row['amount'];
$acc_num = substr($row['account_number'],0,5) ;
$date = $row['date_created'];
$acc_name = $row['account_name'];

echo "<tr col-md-12>";

echo "<td class='text-warning'> $status </td>";
echo "<td class='text-success'>$amount </td>";

echo "<td>Using - Bank.......$acc_num  </td>";
echo "<td class='text-success'>$acc_name</td>";
echo "<td class='text-danger'> $date </td>";

echo "<tr>";

}





  ?>
<tr>

<td scope="row">
<span class="sold-thumb"><i class="ti-arrow-up"></i></span>
</td>
<td>
<span class="badge bg-danger">Transfer</span>
</td>
<td> <span>$</span> 500</td>
<td>Using - Bank......4585 </td>
<td>Wire</td>
<td>22/10/2022</td>
</tr>
<tr>
<td scope="row">
<span class="buy-thumb"><i class="ti-arrow-down"></i></span>
</td>
<td>
<span class="badge bg-success">Credited</span>
</td>
<td> <span>$</span> 500</td>
 <td>Using - Bank......4585 </td>
<td>Local</td>
<td>22/10/2022</td>
</tr>
<tr>
<td scope="row">
<span class="sold-thumb"><i class="ti-arrow-up"></i></span>
</td>
<td>
<span class="badge bg-danger">Transfer</span>
</td>

<td> <span>$</span> 500</td>
<td>Using - Bank ......1285 </td>
<td>Wire</td>
<td>22/10/2022</td>
</tr>
<tr>
<td scope="row">
<span class="sold-thumb"><i class="ti-arrow-up"></i></span>
</td>
<td>
<span class="badge bg-danger">Transfer</span>
</td>

<td> <span>$</span> 500</td>
<td>Using - Bank ......6005 </td>
<td>Wire</td>
<td>22/10/2022</td>
</tr>
<tr>
<td scope="row">
<span class="sold-thumb"><i class="ti-arrow-up"></i></span>
</td>
<td>
<span class="badge bg-danger">Transfer</span>
</td>
<td> <span>$</span> 500</td>
<td>Using - Bank ......6585 </td>
<td>Local</td>
<td>22/10/2022</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

   <?php require_once 'components/footer.php' ?>