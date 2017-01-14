<?
include("connection.php");
$sql="select count from visitors_count where page='".$page."'";

$count=0;

$cresult=mysql_query($csql);

if(mysql_numrows($cresult))
{
       $crow=mysql_fetch_row($cresult);
      $count=$crow[0];

 echo "Visitors:".$count."<br>";
}

     $count=$count+1;

$usql="update visitors_count set count=".$count." where page='".$page."'";

if(!mysql_query($usql))
{
       echo mysql_errno().":";<br>
       echo mysql_error();<br>
}

?>