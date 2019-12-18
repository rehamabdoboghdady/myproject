<?php
$conn=new mysqli("localhost","root","","db");
if($conn->connect_error)
die($conn->connect_error);

if(isset($_POST['load'])){
    $load=json_decode($_POST['load'],true);
    echo json_encode($load);
    for($i=0;$i<count($load);$i++)
    {
        $local_target=$load[$i]["target"];
        $local_type=$load[$i]["type"];
        $local_date =$load[$i]["date"];
        $sql="Insert Into localstore Values('$local_target','$local_type',' $local_date')";
        $conn->query($sql);
        if($conn->affected_rows >0)
        {
        echo "inserted succesfuly";
        }
        else 
        {
        echo "problem with insertion";
        }
       
    }
}
if(isset($_POST['unload'])){
    $unload=json_decode($_POST['unload'],true);
    echo json_encode($unload);
	for($i=0;$i<count($unload);$i++)
    {
        $local_target=$unload[$i]["target"];
        $local_type=$unload[$i]["type"];
        $local_date =$unload[$i]["date"];
        $sql="Insert Into localstore Values('$local_target','$local_type','$local_date')";
        $conn->query($sql);
        if($conn->affected_rows >0)
        {
        echo "inserted succesfuly";
        }
        else 
        {
        echo "problem with insertion";
        }
}
}
if(isset($_POST['generate'])){
    $generate=json_decode($_POST['generate'],true);
    echo json_encode($generate);
	for($i=0;$i<count($generate);$i++)
    {
        $local_target=$generate[$i]["target"];
        $local_type=$generate[$i]["type"];
        $local_date =$generate[$i]["date"];
        $sql="Insert Into localstore Values('$local_target','$local_type',' $local_date')";
        $conn->query($sql);
        if($conn->affected_rows >0)
        {
        echo "inserted succesfuly";
        }
        else 
        {
        echo "problem with insertion";
        }
}
}
if(isset($_POST['clickbtn'])){
    $clickbtn=json_decode($_POST['clickbtn'],true);
    echo json_encode($clickbtn);
	for($i=0;$i<count($clickbtn);$i++)
    {
        $local_target=$clickbtn[$i]["target"];
        $local_type=$clickbtn[$i]["type"];
        $local_date =$clickbtn[$i]["date"];
        $sql="Insert Into localstore Values('$local_target','$local_type',' $local_date')";
        $conn->query($sql);
        if($conn->affected_rows >0)
        {
        echo "inserted succesfuly";
        }
        else 
        {
        echo "problem with insertion";
        }
}
}
if(isset($_GET['localstore']))
{
	$sql="Select * from localstore";
	if($res=$conn->query($sql))
	{
		$rows=array();
		if($res->num_rows >0){
			while($row=$res->fetch_assoc()){
				array_push($rows,$row);
			
		}
		echo json_encode($rows);
	}
	}
	else
	{
		echo "No Data received";
	}
	
}
?>