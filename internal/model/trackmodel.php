<?php

class track{
    public function trackin($in,$user_id,$ip){
        $sql="INSERT INTO track (track_in,user_id,ip) "
                . "VALUES ('$in','$user_id','$ip')";
        $con=$GLOBALS['con'];
        $result=$con->query($sql);
        $track_id=$con->insert_id; //Last Inserted ID
        return $track_id;       
        
    }
    public function trackout($track_id,$out){
        $sql="UPDATE track SET track_out='$out',track_status='LogOut' "
                . "WHERE track_id='$track_id'";
        $con=$GLOBALS['con'];
        $result=$con->query($sql);       
    }    
}

?>

