<?php

session_start();
include("dbconnection.php");


?>

<?php
    if(isset($_GET['statusmsg']))
        {
        
        if($_GET['statusmsg'] == 'emptytextbox')
            {
?>
<h5>Address :- <input type="text" id="changetext" name="changetext"></h5>
                                                <hr>

                                <button type="button" title="Edit Address"  onclick="changeaddress('cancel')" class="button"><span><span>cancel</span></span>
                                                                </button>
                                                    <button type="button" title="Edit Address"  onclick="changeaddress('changetextdone')" class="button"><span><span>Done</span></span>
                                                                </button>
                                                   
<?php
             }
             
             
             if($_GET['statusmsg'] == 'changetextdone')
            {
                 updateShippingAddress($_SESSION['user_loged_id'],$_GET['changetextresult']);
                 
                 $_SESSION['changeshipingaddress'] = $_GET['changetextresult'];
                 $_SESSION['canceleditaddress'] = $_GET['changetextresult'];
?>
<h5>Address :- <?php echo $_GET['changetextresult']; ?></h5>
                                                <hr>

                                                    <button type="button" title="Edit Address"  onclick="changeaddress('emptytextbox')" class="button"><span><span>Edit Address</span></span>
                                                                </button>
                                                   
<?php
             }
             
             if($_GET['statusmsg'] == 'cancel')
            {
                 
?>
<h5>Address :- <?php echo $_SESSION['canceleditaddress'] ?></h5>
                                                <hr>

                                                    <button type="button" title="Edit Address"  onclick="changeaddress('emptytextbox')" class="button"><span><span>Edit Address</span></span>
                                                                </button>
                                                   
<?php
             }
    }
?>