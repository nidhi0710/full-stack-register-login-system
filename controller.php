<?php
include_once 'dao.php';
include_once 'model.php';
$m=new model();
$d=new dao;
extract($_POST);
if(isset($_POST['sub']))
{
	$q=$d->select("abcd","","");
	echo $q;

	// $m->set_data("name",$name);
	// $m->set_data("college",$college);
	// $m->set_data("mobile",$mobile);

	// $a= array('name'=>$get_data('name'),'college'=>$get_data('college'),'mobile'=>$get_data('mobile'));
}
   


  ?>
  