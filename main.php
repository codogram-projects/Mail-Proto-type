<html>
    <body style="margin: 0px 0px; padding: 0px 0px;">
        <!-- login username using session -->
        <div align="center" style="font-size:25px; border:1px solid black;">
        <h2>
        <?php
        session_start();
        echo "WELCOME <br>".$_SESSION['login_name'];
        ?>
        </h2>
        </div>
        <h3 align="center">Mail box</h3>
        <!-- logout -->
        <div align="right" style="margin-right:50px;">
        <form method="post" action="logout.php">
            <?php echo $_SESSION['login_name']; ?>
        <button type="submit" name="logout" id="logout" >LOGOUT</button>
        </form>
        </div>
            <!-- Search bar -->
            <div align="right" style="margin-right:50px;">
             <form method="post" action="#">
            <lable>Search </lable>
            <input type="radio" name="s_filter" value="dd">DD based
            <input type="radio" name="s_filter" value="sender">Sender based
            <input type="radio" name="s_filter" value="mail">Mail based
           
            <input type="text" placeholder="Search" name="search_bar" id="search_bar"/>
            <button type="submit" name="submit" id="submit">SUBMIT</button>

            
        </form>
        
        </div>

    
            <!-- Mail Display area -->
            <div align="center">
            <table style="border:2px solid black" width="90%">
                <tr style="border:2px solid black">
                    <td style="border:2px solid black; text-align:center;">S.no</td>
                    <td style="border:2px solid black; text-align:center;">Sender</td>
                    <td style="border:2px solid black; text-align:center;">Mail</td>
                    <td style="border:2px solid black; text-align:center;">Date</td>
            </tr>
            
            <?php
            $dd=array(10, 18, 15, 25, 22);
            $mm=array(9, 9, 9, 9, 9);
            $yy=array(2021, 2021, 2021, 2021, 2021);
            $sender=array("Priya", "Abhinav", "Abhishek", "Aayush", "Madhav");
            $mail=array("Hey! Ankush Kumar.","How are you ?. ", "Where did you live lorem! ?. ", "what are you studying.", "can we have a dinner today night.");
            $mul_arr = array_multisort($dd,$sender,$mail,$mm);
            // print_r($dd);
            // print_r($sender);
            // print_r($mail); 

            //display all mail using loop 
            if (isset($_POST['search_bar'])==null){

           
            $count=0;
            $sno=1;
            $a=count($dd);
            $b=count($mail);
            $c=count($sender);
            $d=count($yy);
            if ($a==$b and $a==$c and $a==$d ){
                $count=($a-1);
            while($count>=0){
                 echo "<tr><td>$sno</td><td>$sender[$count]</td><td>$mail[$count]</td><td>$dd[$count]/$mm[$count]/$yy[$count]</td></tr>";
                 $count=$count-1;
                 $sno+=1;   

                }
            }
            else{
                echo "Error in code.";
            }
            // foreach($sender as $value){
            //     echo "<tr><td> $value </td>";
                
            //     }  
        }
        else{
            
            if(isset($_POST['search_bar']) && isset($_POST['s_filter'])){
                $f_type=$_POST['s_filter'];
                $keyword=$_POST['search_bar'];
                //echo $f_type;
                if ($f_type='DD'){
                    echo "<b>Match Found.</b>";
                    $sno=1;
                    $result=array_search($keyword, $dd);
                    echo "<tr><td>$sno</td><td>$sender[$result]</td><td>$mail[$result]</td><td>$dd[$result]/$mm[$result]/$yy[$result]</td></tr>";
                    $sno+=1;
                }
                elseif($f_type='sender'){
                    $sno=1;
                    $result=array_search($keyword, $sender);
                    echo "<tr><td>$sno</td><td>$sender[$result]</td><td>$mail[$result]</td><td>$dd[$result]/$mm[$result]/$yy[$result]</td></tr>";
                    $sno+=1;
                }
                //echo "<tr><td>$sno</td><td>$sender[$result]</td><td>$mail[$result]</td><td>$dd[$result]/$mm[$result]/$yy[$result]</td></tr>";   
            }
        }
            ?>
            
            </table>
            </div>-
            </body>
            </html>