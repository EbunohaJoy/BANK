<?php
function dnd($elArry)
{
    echo "<pre>";
    var_dump($elArry);

    echo "</pre>";
    die;
}

function sanitizeInput($el)
{
    return htmlspecialchars($el, ENT_QUOTES, 'UTF-8');
}

function isEmpty($el)
{

    if (is_array($el)) {
        foreach ($el as $key => $val) {
            if (empty($val)) {
                return $key . " field is empty";
            }
        }
    } else {
        if (empty($el))
            return false;
        return true;
    }

    return true;
}


function redirect($where, $type = "", $msg = "")
{
    if ($type != "") {
        header("Location:" . PROOT . "$where." . "php?$type" . "=" . $msg);
        die;
    } else {
        header("Location:" . PROOT . "$where." . "php");
        die;
    }
}



function hashPass($el)
{
    return password_hash($el, PASSWORD_DEFAULT);
}





function showAlert($alerttype, $msg)
{
?>
     <div class="alert alert-<?= $alerttype ?> alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><?= $msg ?></strong> 
  </div>

<?php
}

function isValidEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    return true; return false;
}

function checkLength($el,$length=8){
    if(strlen($el) < $length)
    return false;return true;
}

function passwordMatch($el, $reEl)
{
    if ($el == $reEl) {
        return true;
        return false;
    }
}

function uploadFile($file)
{

    $imgPath = '';
    $imgName = $file['name'];

    $tempLocation = $file['tmp_name'];
    $fileSize = $file['size'];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($imgName);


    $uploadStatus = 1;

    if ($fileSize > 200000)
        $uploadStatus = 0;

    // echo $uploadStatus; die;

    $extType = pathinfo($targetFile, PATHINFO_EXTENSION);

    $imgSize = getimagesize($tempLocation);

    if (file_exists($targetFile))
        $uploadStatus = 0;

    if ($extType != "jpg" & $extType != "jpeg" & $extType != "png")
        $uploadStatus = 0;

    if ($uploadStatus == 0)
        return $imgPath;

    $upload = $targetDir . time() . basename($imgName);

    $imgPath = move_uploaded_file($tempLocation, $upload);

    return $upload;
}

function shoe($msg){
    window.alert($msg);
}

    //prompt function
function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer =prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
}

