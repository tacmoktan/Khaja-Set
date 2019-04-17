<?PHP session_start();


 if(isset($_SESSION['name'])) {
    // echo "Session Created";
     header('location:session2.php');
 } else {
     $_SESSION['name'] = "Tashi";
     echo "Session Created // Logged in";
     
 }

?>