<?php
session_start();
        if(!isset($_SESSION['uname']))
	{
	header("location:index.php");
	}
	$user=$_SESSION['uname'];
	$password=$_SESSION['password'];

	if(isset($_GET['sub']))
	{
	$a=$_GET['db'];
	//echo $a;
	$con=mysql_connect('localhost',$user,$password);
	$qu="create database $a";
	$res=mysql_query($qu);
           if($res==1)
           {
           header("location:databases.php");
           }
           else
           {
           header("location:databases.php");
           }
	}

//DROP DATABASE
  if(isset($_GET['db1']))
  {
  $database=$_GET['db1'];
  $con=mysql_connect('localhost',$user,$password);
  $qu="DROP DATABASE $database";
  $result=mysql_query($qu);
        if($result==1)
        {
        header("location:databases.php");
        }
        else
        {
        header("location:databases.php");
        }
  }
?>
