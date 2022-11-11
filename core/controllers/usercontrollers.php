<?php 


if(isset($_POST['REG'])){
    // echo 50; die;


    $firstname = sanitizeInput($_POST['fname']);
    $lastname = sanitizeInput($_POST['lname']);
    $email = sanitizeInput($_POST['email']);
    $ref = sanitizeInput($_POST['ref']);
    $password = sanitizeInput($_POST['pass']);
    $confirm = sanitizeInput($_POST['cpass']);
    $acc_num = mt_rand();
  
  
    $userDetails = ['Firstname' =>$firstname,'Lastname'=> $lastname, 'email' => $email, 'password' => $password, 'confirm password' => $confirm];
  
    $msg = isEmpty($userDetails);
    if ($msg != 1) {
      redirect("register", "error", $msg);
    }
  
    if (!isValidEmail($userDetails["email"])) {
      $msg = "Email is invalid";
      redirect("register", "error", $msg);
    }
  
    if (!checkLength($password)) {
      $msg = "password should be more than 8 characters";
      redirect("register", "error", $msg);
    }
  
  if ($password != $confirm) {
      $msg = "password do not match";
      redirect("register", "error", $msg);
    }

 $sql = "SELECT * FROM users WHERE email = '$email'  ";
$select_user = mysqli_query($conn, $sql) ;
$row_count = mysqli_num_rows($select_user);
if($row_count > 0){
    $msg = "User Already exist";
    redirect("register", "error", $msg);
}


$hassedPass = hashPass($password);
$sql = "INSERT INTO users (firstname,lastname,ref,email,password,account_number) VALUES ('$firstname','$lastname','$ref','$email','$hassedPass',$acc_num)";

if (mysqli_query($conn, $sql)) {
    redirect("login", "success", "Registration is successfull");
   
  } else {
    $msg = "Something went wrong, try again later";
    redirect("register", "error", $msg);
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

if (isset($_POST['LOGIN'])) {
    // echo 10; die;
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['pass']);

    $userDetails = ["email" => $email, "password" => $password];

    $msg = isEmpty($userDetails);
    if ($msg != 1) {
      redirect("login", "error", $msg);
    }

    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $select_user = mysqli_query($conn, $sql) ;
    $row_count = mysqli_num_rows($select_user);
    $row = mysqli_fetch_assoc($select_user);
    $result = [];
    array_push($result,$row);
    // dnd($result);
    $_SESSION['logged_in'] = $result;

    if($row_count > 0){
     
      // dnd( $_SESSION['logged_in']);

       
        if(password_verify($password, $row['password'])){
          $_SESSION['email'] = $row['email'];
          // dnd($_SESSION['email']);
            // redirect("index", "success", " successfull");
            if($row['user_type'] == 0){
             
                 redirect("Userdashboard/index", "success", " successfull");
                echo "user"; die;
            }else{
              redirect("Admin/index", "success", " successfull");
                
            }

        }else{
            redirect("login", "error", "invalid credentials");
        }
       
    }
}

if (isset($_POST['profile'])) {
  // echo 10; die;
  $phoneNumber = sanitizeInput($_POST['phoneNumber']);
  $address = sanitizeInput($_POST['address']);
  $state = sanitizeInput($_POST['state']);
  $acc_type = sanitizeInput($_POST['acc_type']);
  $country = sanitizeInput($_POST['country']);
  $acc_num = sanitizeInput($_POST['acc_num']);
  $t_pin = sanitizeInput($_POST['t_pin']);

  $userDetails = ["phoneNumber" =>$phoneNumber,"address" => $address,"state" =>$state,"Account type" =>$acc_type,"country" =>$country,"transaction pin" => $t_pin];

  $msg = isEmpty($userDetails);
  if ($msg != 1) {
    redirect("Userdashboard/profile", "error", $msg);
  }

  $sql = "UPDATE users SET phonenumber='$phoneNumber',address = '$address', state = '$state', account_type = '$acc_type',country = '$country', transaction_pin = '$t_pin'  WHERE id= '{$_SESSION['user_id']}' ";

  if (mysqli_query($conn, $sql)) {
    redirect("Userdashboard/profile", "success", "Account update is successfull");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
    // redirect("Userdashboard/profile", "error", "Account update failed try again");
  }
  
}

if (isset($_POST['upload'])) {
  $avata =  $_FILES['avata']['name'];
  $avata_temp = $_FILES['avata']['tmp_name'];

if(empty($avata)){
    echo "<script>
    alert('Image is Empty');
    </script>";
    
  }else{
    move_uploaded_file($avata_temp,"../Userdashboard/assets/img/$avata");

    $sql = "UPDATE users SET avarter='$avata' WHERE id= '{$_SESSION['user_id']}'";
  
  if (mysqli_query($conn, $sql)) {
    redirect("Userdashboard/profile", "success", "Image upload is successfull");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  }



  


}

if (isset($_GET['logout'])) {
  //  echo 0; die;
  if ($_SESSION['logged_in']) {
    unset($_SESSION['logged_in']);
    session_unset();
    session_destroy();
    redirect("index");
  }
}