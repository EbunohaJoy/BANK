<?php

if(isset($_POST['open_account'])){
    // echo 50; die;


    $firstname = sanitizeInput($_POST['fname']);
    $lastname = sanitizeInput($_POST['lname']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['pass']);
    $confirm = sanitizeInput($_POST['cpass']);
    $phone = sanitizeInput($_POST['phonenumber']);
    $address = sanitizeInput($_POST['address']);
    $country = sanitizeInput($_POST['country']);
    $state = sanitizeInput($_POST['state']);
    $acc_type = sanitizeInput($_POST['acc_type']);
    $pin = sanitizeInput($_POST['pin']);
    $acc_num = mt_rand();
  
  
    $userDetails = ['Firstname' =>$firstname,'Lastname'=> $lastname, 'email' => $email, 'password' => $password, 'confirm password' => $confirm,'phone number' => $phone,'address' => $address,'country' =>  $country,'state' => $state,'account type' => $acc_type,'pin' => $pin];
  
    $msg = isEmpty($userDetails);
    if ($msg != 1) {
      redirect("Admin/openaccount", "error", $msg);
    }
  
    if (!isValidEmail($userDetails["email"])) {
      $msg = "Email is invalid";
      redirect("Admin/openaccount", "error", $msg);
    }
  
    if (!checkLength($password)) {
      $msg = "password should be more than 8 characters";
      redirect("Admin/openaccount", "error", $msg);
    }
  
  if ($password != $confirm) {
      $msg = "password do not match";
      redirect("Admin/openaccount", "error", $msg);
    }

 $sql = "SELECT * FROM users WHERE email = '$email'  ";
$select_user = mysqli_query($conn, $sql) ;
$row_count = mysqli_num_rows($select_user);
if($row_count > 0){
    $msg = "User Already exist";
    redirect("Admin/openaccount", "error", $msg);
}
// dnd(399);

$hassedPass = hashPass($password);
$sql = "INSERT INTO users (firstname,lastname,email,password,account_number,phonenumber,address,country,state,account_type,transaction_pin) VALUES ('$firstname','$lastname','$email','$hassedPass','$acc_num','$phone','$address','$country','$state','$acc_type','$pin')";

if (mysqli_query($conn, $sql)) {
    redirect("Admin/openaccount", "success", "Account creation is successfull");
   
  } else {
    $msg = "Something went wrong, try again later";
    // redirect("Admin/openaccount", "error", $msg);
// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

if(isset($_POST['credit_user'])){
  $user = sanitizeInput($_POST['user']);
  $amount = sanitizeInput($_POST['amount']);
  // dnd($user);
  // die;
  $userDetails = ['User' =>$user,'Amount'=> $amount];
  $msg = isEmpty($userDetails);
  if ($msg != 1) {
    redirect("Admin/credit_user", "error", $msg);
  }

  $sql = "SELECT account_balance FROM users WHERE id = '$user'";
      $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
  
      $new_bal = $row['account_balance'] + $amount;
      $new_credit = $row['total_credited'] + $amount;

  $sql = "UPDATE users SET account_balance='$new_bal',total_credited ='$new_credit' WHERE id ='$user' ";

  if (mysqli_query($conn, $sql)) {
   
    $sql = "INSERT INTO transactions (user_id,account_name,account_number,amount,bank_name,status) VALUES ('$user','Administrator','2147483647','$amount','Freedom Guaranteed trust Bank','credited')";

if (mysqli_query($conn, $sql)) {
  redirect("Admin/credit_user", "success", "User credited");
} else {
  redirect("Admin/credit_user", "error", "Crediting User failed");
}
  } else {
    // echo "Error updating record: " . mysqli_error($conn);
    redirect("Admin/credit_user", "error", "error in the system");
  }



}


if(isset($_POST['debit_user'])){
  $user = sanitizeInput($_POST['user']);
  $amount = sanitizeInput($_POST['amount']);
  // dnd($user);
  // die;
  $userDetails = ['User' =>$user,'Amount'=> $amount];
  $msg = isEmpty($userDetails);
  if ($msg != 1) {
    redirect("Admin/debit_user", "error", $msg);
  }

  $sql = "SELECT account_balance FROM users WHERE id = '$user'";
      $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
  
      $new_bal = $row['account_balance'] - $amount;
      $new_debit = $row['total_debit'] + $amount;

  $sql = "UPDATE users SET account_balance='$new_bal',total_debit ='$new_credit' WHERE id ='$user' ";

  if (mysqli_query($conn, $sql)) {
   
    $sql = "INSERT INTO transactions (user_id,account_name,account_number,amount,bank_name,status) VALUES ('$user','Administrator','2147483647','$amount','Freedom Guaranteed trust Bank','credited')";

if (mysqli_query($conn, $sql)) {
  redirect("Admin/credit_user", "success", "User credited");
} else {
  redirect("Admin/credit_user", "error", "Crediting User failed");
}
  } else {
    // echo "Error updating record: " . mysqli_error($conn);
    redirect("Admin/credit_user", "error", "error in the system");
  }



}


if(isset($_POST['block_account'])){


  $user = sanitizeInput($_POST['user']);
  $status = sanitizeInput($_POST['status']);
  // dnd($user);
  // die;
  $userDetails = ['User' =>$user,'Action'=> $status];
  $msg = isEmpty($userDetails);
  if ($msg != 1) {
    redirect("Admin/blockaccount", "error", $msg);
  }

  $sql = "UPDATE users SET account_status='$status' WHERE id= '$user' ";

  if (mysqli_query($conn, $sql)) {
    redirect("Admin/blockaccount", "success","Account Freezed");
  } else {
    redirect("Admin/blockaccount", "error", "Action Failed");
  }


}

    if(isset($_GET['del_id'])){
     echo '<script>alert("DELETE ? ")</script>';
      $the_id =  $_GET['del_id'];
      $sql = "DELETE FROM users WHERE id=$the_id";
      if (mysqli_query($conn, $sql)) {
        redirect("Admin/users", "success", "Deleted");
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
      // redirect("Admin/users", "success", "Deleted");



    }


    if(isset($_GET['edit_id'])){
      $the_edit_id =  $_GET['edit_id'];
    }
    

  
    if(isset($_POST['edit_account'])){
      // echo 50; die;
  
  
      $firstname = sanitizeInput($_POST['fname']);
      $lastname = sanitizeInput($_POST['lname']);
      $email = sanitizeInput($_POST['email']);
      // $password = sanitizeInput($_POST['pass']);
      // $confirm = sanitizeInput($_POST['cpass']);
      $phone = sanitizeInput($_POST['phonenumber']);
      $address = sanitizeInput($_POST['address']);
      $country = sanitizeInput($_POST['country']);
      $state = sanitizeInput($_POST['state']);
      $acc_type = sanitizeInput($_POST['acc_type']);
      $pin = sanitizeInput($_POST['pin']);
      $acc_num = mt_rand();
    
    
      $userDetails = ['Firstname' =>$firstname,'Lastname'=> $lastname, 'email' => $email,'phone number' => $phone,'address' => $address,'country' =>  $country,'state' => $state,'account type' => $acc_type,'pin' => $pin];
    
      $msg = isEmpty($userDetails);
      if ($msg != 1) {
        redirect("Admin/edit_account", "error", $msg);
      }
    
      if (!isValidEmail($userDetails["email"])) {
        $msg = "Email is invalid";
        redirect("Admin/edit_account", "error", $msg);
      }
    
  
  
   $sql = "SELECT * FROM users WHERE email = '$email'  ";
  $select_user = mysqli_query($conn, $sql) ;
  $row_count = mysqli_num_rows($select_user);
  if($row_count > 0){
      $msg = "User Already exist";
      redirect("Admin/edit_account", "error", $msg);
  }
  // dnd(399);
  

  $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',phonenumber='$phone',address=' $address',country='$country',state='$state',account_type='$acc_type',transaction_pin='$pin' WHERE id=$the_edit_id";

if (mysqli_query($conn, $sql)) {
   redirect("Admin/users", "success", "successfully Updated");
} else {
  redirect("Admin/edit_account", "error", "Failed");
  // echo "Error updating record: " . mysqli_error($conn);
}
  }