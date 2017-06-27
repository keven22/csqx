<?php
$conn=mysql_connect("56f53eb12e168.sh.cdb.myqcloud.com:6090","cdb_outerroot","kaiwen22");//链接数据库并返回句柄$conn
mysql_select_db("csqx",$conn); //选择数据库
if(!$conn){ 
    die('连接数据库出错:'.mysql_error());
}

function warn($city)//气温
{
$sql = "SELECT * FROM `warn` WHERE `city`='$city' AND `now`='NOW'"; 

    $query = mysql_query($sql);
       if($query){
          
    while($row = mysql_fetch_array($query)){

    echo "des1".": '<br/> ".$row['type'].$row['leaves']."预警',";
        $i++;
    
    }
        return $des;
       }
    else { echo "des:'<br/>当前无预警',";}
   
}
function warncolor($city)//气温
{
$sql = "SELECT * FROM `warn` WHERE `city`='$city' AND `now`='NOW'"; 

    $query = mysql_query($sql);
       
    while($row = mysql_fetch_array($query)){
    $color=$row['color'];
    }  
     if(!$color) { return "#9dc934";}
    else {

        return $color;}
}
?>