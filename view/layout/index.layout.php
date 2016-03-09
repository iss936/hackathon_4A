<?php 

//if is connected for let charge the header of the login form

if (security::is_connected()){
    include("view/inc/head.php"); 
}

    include "view/".$controller."/".$action.".php";
    include("view/inc/body.php");
    
//if(security::is_connected()){
    include("view/inc/foot.php");
//}
	


?>