<?php
$local_file_name = "../../../common.php";
function localFileExist($filepath) {
    if(file_exists($filepath)) {
        return true;
    } else {
        return false;
    }
}
if(localFileExist($local_file_name) == 1) {
    include_once ('../../../common.php');
    } else {
    include_once ('../../../../../common.php');
 }
 
if( isset($token) ){
    $token = @htmlspecialchars(strip_tags($token), ENT_QUOTES);
}
?>