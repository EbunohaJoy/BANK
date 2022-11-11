<?php

if (isset($_POST['local_transfer'])) {

    // echo 30;die;
 $_SESSION['acc_name'] = sanitizeInput($_POST['acc_name']);
 $_SESSION['acc_number']  = sanitizeInput($_POST['acc_number']);
 $_SESSION['bank_name']  = sanitizeInput($_POST['bank_name']);
 $_SESSION['amount']  = sanitizeInput($_POST['amount']);
 $_SESSION['desc']  = sanitizeInput($_POST['desc']);

    $userDetails = ["Account Name" =>$_SESSION['acc_name'],"Account Number" => $_SESSION['acc_number'],"Bank Name" => $_SESSION['bank_name'],"Description" =>$_SESSION['desc'],"Amount" =>$_SESSION['amount']];



    $msg = isEmpty($userDetails);
    if ($msg != 1) {
      redirect("Userdashboard/localtransfer", "error",$msg);
    }else{

      redirect("Userdashboard/localtransfer_confirm","warning","please confirm your details");

    }
  // $sql = "INSERT INTO transactions (user_id,account_name,account_number,amount,description,bank_name,status) VALUES ('{$_SESSION['user_id']}','$acc_name','$acc_number','$amount','$desc','$bank_name','local_transfer')";

  // if (mysqli_query($conn, $sql)) {
  //     redirect("Userdashboard/localtransfer", "success", "Transfer is successfull");
     
  //   } else {
  //     $msg = "Transaction Failed try again";
  //     redirect("Userdashboard/localtransfer", "error", $msg);
  //     // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  //   }

}

if(isset($_POST['confirm_local_transfer'])){
  $transaction_pin = $_POST['t_pin'];
  // echo $transaction_pin; die;
  if(empty($transaction_pin)){
    echo "<script> alert('Transaction pin is empty') </script>";
  }
  $sql = "SELECT transaction_pin,account_status FROM users WHERE email = '{$_SESSION['email']}'";
  $query = mysqli_query($conn, $sql);
  // if (mysqli_num_rows($query) > 0) {
  //   foreach ($query as $row) {
      
  //   }
  //   $db_transaction_pin = $row['transaction_pin'];
  //   // dnd($db_transaction_pin);
  // }

  // if ($db_transaction_pin == $transaction_pin) {
  //   echo 500;
  //   die;
  // }
  // else {
  //   echo 200;
  //   die;
  // }
  $row_count = mysqli_num_rows($query);
  // $row = mysqli_fetch_assoc($query);
  while($row = mysqli_fetch_assoc($query)){
    // dnd($row);
  //  type here
  if($row['account_status'] == 'freezed'){
    redirect("Userdashboard/error");
  }
  if($row['transaction_pin'] == $transaction_pin){
    $sql = "SELECT account_balance,total_debit FROM users WHERE email = '{$_SESSION['email']}'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    // dnd($row);
    if($_SESSION['amount'] > $row['account_balance']){
      echo "<script> alert('Insufficient Fund') </script>";
      // redirect("Userdashboard/localtransfer");

    }else{
     $new_bal = $row['account_balance'] - $_SESSION['amount'];
     $new_debit = $row['total_debit'] + $_SESSION['amount'];
    //  echo $new_bal; die;
    $sql = "UPDATE users SET account_balance='$new_bal',total_debit = '$new_debit' WHERE email = '{$_SESSION['email']}'";

    if (mysqli_query($conn, $sql)) {
      // echo "Record updated successfully";

      $sql = "INSERT INTO transactions (user_id,account_name,account_number,amount,description,bank_name,status) VALUES ('{$_SESSION['user_id']}','{$_SESSION['acc_name']}','{$_SESSION['acc_number']}','{$_SESSION['amount']}','{$_SESSION['desc']}','{$_SESSION['bank_name']}','local_transfer')";

      if (mysqli_query($conn, $sql)) {
          redirect("Userdashboard/localtransfer", "success", "Transfer is successfull");
        
        } else {
          $msg = "Transaction Failed try again";
          redirect("Userdashboard/localtransfer", "error", $msg);
          // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }

    }
    
  }else{
    echo "<script> alert('Wrong transaction pin, check if your profile is updated') </script>";
  }
  }
  // dnd($row);




}







if (isset($_POST['wire_transfer'])) {

// echo 30; die;
$_SESSION['acc_name'] = sanitizeInput($_POST['acc_name']);
$_SESSION['acc_number'] = sanitizeInput($_POST['acc_number']);
$_SESSION['bank_name'] = sanitizeInput($_POST['bank_name']);
$_SESSION['amount'] = sanitizeInput($_POST['amount']);
$_SESSION['desc'] = sanitizeInput($_POST['desc']);
$_SESSION['swift_code'] = sanitizeInput($_POST['code']);

$userDetails = ["Account Name" =>$_SESSION['acc_name'],"Acount Number" => $_SESSION['acc_number'],"Bank Name" =>$_SESSION['bank_name'],"Description" =>$_SESSION['desc'], "Swift Code" =>$_SESSION['swift_code'],"Amount" =>$_SESSION['amount']];

$msg = isEmpty($userDetails);
if ($msg != 1) {
  redirect("Userdashboard/wiretransfer", "error", $msg);
}else{
     
     
  redirect("Userdashboard/wiretransfer_confirm","warning","please confirm your details");

}


// $sql = "INSERT INTO transactions (user_id,account_name,account_number,amount,description,bank_name,status,swiftcode) VALUES ('{$_SESSION['user_id']}','$acc_name','$acc_number','$amount','$desc','$bank_name','wire_transfer','$swiftcode')";

// if (mysqli_query($conn, $sql)) {
// redirect("Userdashboard/wiretransfer", "success", "Transfer is successfull");

// } else {
// $msg = "Transaction Failed try again";
// redirect("Userdashboard/wiretransfer", "error", $msg);
// // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }



}

if(isset($_POST['confirm_wire_transfer'])){

  // echo 500; die;
  $transaction_pin = $_POST['t_pin'];
  // echo $transaction_pin; die;
  if(empty($transaction_pin)){
    echo "<script> alert('Transaction pin is empty') </script>";
  }
  $sql = "SELECT transaction_pin FROM users WHERE email = '{$_SESSION['email']}'";
  $query = mysqli_query($conn, $sql);
  // if (mysqli_num_rows($query) > 0) {
  //   foreach ($query as $row) {
      
  //   }
  //   $db_transaction_pin = $row['transaction_pin'];
  //   // dnd($db_transaction_pin);
  // }

  // if ($db_transaction_pin == $transaction_pin) {
  //   echo 500;
  //   die;
  // }
  // else {
  //   echo 200;
  //   die;
  // }
  $row_count = mysqli_num_rows($query);
  // $row = mysqli_fetch_assoc($query);
  while($row = mysqli_fetch_assoc($query)){
    // dnd($row);
    if($row['transaction_pin'] == $transaction_pin){
      $sql = "SELECT account_balance FROM users WHERE email = '{$_SESSION['email']}'";
      $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
      // dnd($row);
      if($_SESSION['amount'] > $row['account_balance']){
        echo "<script> alert('Insufficient Fund') </script>";
        // redirect("Userdashboard/localtransfer");

      }else{
       $new_bal = $row['account_balance'] - $_SESSION['amount'];
      //  echo $new_bal; die;
      $sql = "UPDATE users SET account_balance='$new_bal' WHERE email = '{$_SESSION['email']}'";

      if (mysqli_query($conn, $sql)) {
        // echo "Record updated successfully";

        $sql = "INSERT INTO transactions (user_id,account_name,account_number,amount,description,bank_name,status) VALUES ('{$_SESSION['user_id']}','{$_SESSION['acc_name']}','{$_SESSION['acc_number']}','{$_SESSION['amount']}','{$_SESSION['desc']}','{$_SESSION['bank_name']}','wire_transfer')";

        if (mysqli_query($conn, $sql)) {
            redirect("Userdashboard/wiretransfer", "success", "Transfer is successfull");
          
          } else {
            $msg = "Transaction Failed try again";
            redirect("Userdashboard/wiretransfer", "error", $msg);
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }

      }
      
    }else{
      echo "<script> alert('Wrong transaction pin, check if your profile is updated') </script>";
    }
  }
  // dnd($row);




}



