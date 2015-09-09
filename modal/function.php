<?php 
//include layout  
function path($path,$data=""){
   if($data){
   	extract($data);
   }
   include 'view/layout.php';
 }
 //Password encrypt
function pass_encrypt($password){
    // Setting hash format to Blowfish
    $hash_type = "$2y$10$";
    //generating random salt
    $salt = generate_salt(22);
    // combining both
    $final_hash= $hash_type . $salt;
    //Final encryption
    $pass= crypt($password,$final_hash);
    return $pass;
}
 
// Generating Secure Salt
function generate_salt($len){
    // gerating unique and encrypted string
    $unique_string= md5(uniqid(mt_rand(),true));
 
    //Gerate vaild string
    $valid_Strng = base64_encode($unique_string);
 
    // Changing + to . if any
    $Super_valid = str_replace("+",".",$valid_Strng);
 
    // making it 22 as md5 gives 32 len string
    $salt= substr($Super_valid,0,$len);
 
    return $salt;
}
 
//Checking password
function confirm_pass($password,$hash_pass){
   //Encrypt using previous passwords hash
    $hash= crypt($password,$hash_pass);
 
   //Checking
    if($hash === $hash_pass){
        return true;
    }else return false;
}
//file size coversion from bytes to KB ,MB ,GB...
function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}
function folderSize($dir){
$count_size = 0;
$count = 0;
$dir_array = scandir($dir);
  foreach($dir_array as $key=>$filename){
    if($filename!=".." && $filename!="."){
       if(is_dir($dir."/".$filename)){
          $new_foldersize = foldersize($dir."/".$filename);
          $count_size = $count_size+ $new_foldersize;
        }else if(is_file($dir."/".$filename)){
          $count_size = $count_size + filesize($dir."/".$filename);
          $count++;
        }
   }
 }
return $count_size;
}

 ?>


