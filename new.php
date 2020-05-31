<?php
session_start();
ob_start();


require "includes/db.inc.php";
?>
	<main>
        <script type="text/javascript" src="js/jquery3.4.1.js"></script>
        <script type="text/javascript" src="timecircles/TimeCircles.js"></script>
        <link rel-"stylesheet" type="text/css" href="timecircles/TimeCircles.css">
        <?php
        $id = $_SESSION['userId'];
        echo $id;
        $sql = "SELECT * FROM countdown WHERE userId='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_object($result);
        //mysqli_fetch_all($result, MYSQLI_ASSOC)??
        ?>
        
        <div data-date="<?php echo $row->examDate; ?>" id="count-down" ></div>
        
        <script type="text/javascript">    
        $(document).ready(function(){
   
            
            $("#count-down").TimeCircles();
            
            
            
            
        });
            </script>