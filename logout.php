<!-- logout php code -->
<?php
                session_start();
                if(isset($_POST['logout'])){
                    session_destroy();
                    echo "logging out in 3 sec...";
                    header('Refresh: 3; url= index.php');
                }
?>