<?php
date_default_timezone_set('Asia/Kolkata');
 $hour = date("H");
if($hour >= 12 && $hour <= 15){
    echo "GOOD AFTERNOON";
}else if($hour >15  && $hour <= 23){
    echo "GOOD EVENING";
}elseif($hour > 0 && $hour < 12){
    echo "GOOD MORNING";
}



?>