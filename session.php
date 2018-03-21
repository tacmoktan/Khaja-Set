<?PHP session_start();


 if(isset($_SESSION['name'])) {
    // echo "Session Created";
     header('location:session2.php');
 } else {
     $_SESSION['name'] = "Subesh";
     echo "Session Created // Logged in";
     
 }

?>