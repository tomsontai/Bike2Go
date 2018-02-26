<?php
session_start();
extract($_POST);

if (DIRECTORY_SEPARATOR == '/') {
    $GLOBALS['info'] = explode("\n",
    file_get_contents("credentials.config"));
}

if (DIRECTORY_SEPARATOR == '\\') {
    $GLOBALS['info'] = explode("\r\n",
    file_get_contents("credentials.config"));
}

foreach ($info as $entryPair) {
    $input = $userid . ", " . $password;
    
    if (strcmp($input, $entryPair) == 0) {
        $_SESSION["authenticated"] = true;
        header("Location: index.php"); 
        die();
    } else {
        $msg = "Invalid login credentials.";
        header("Location: login.php?message=$msg");
        die();
    }
}
 

if (!isset($_SESSION["authenticated"])) {
    $msg = "Invalid login credentials.";
    header("Location: login.php?message=$msg");
    die();
}  

?>
