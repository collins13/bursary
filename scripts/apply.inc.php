<?php
$f_name = ((isset($_POST['f_name']))?$_POST['f_name']:'');
$l_name = ((isset($_POST['l_name']))?$_POST['l_name']:'');
$email = ((isset($_POST['email']))?$_POST['email']:'');
$id = ((isset($_POST['id_no']))?$_POST['id_no']:'');
$phone = ((isset($_POST['phone']))?$_POST['phone']:'');
$age = ((isset($_POST['age']))?$_POST['age']:'');
$dob = ((isset($_POST['dob']))?$_POST['dob']:'');
$gender = ((isset($_POST['gender']))?$_POST['gender']:'');
$parent = ((isset($_POST['parent']))?$_POST['parent']:'');
$social = ((isset($_POST['social']))?$_POST['social']:'');
$s_county = ((isset($_POST['s_county']))?$_POST['s_county']:'');
$ward = ((isset($_POST['ward']))?$_POST['ward']:'');
$village = ((isset($_POST['village']))?$_POST['village']:'');
$ni = ((isset($_POST['ni']))?$_POST['ni']:'');
$adm = ((isset($_POST['adm']))?$_POST['adm']:'');
$cn = ((isset($_POST['cn']))?$_POST['cn']:'');
$level = ((isset($_POST['level']))?$_POST['level']:'');
$level1 = ((isset($_POST['level1']))?$_POST['level1']:'');
$level2 = ((isset($_POST['level2']))?$_POST['level2']:'');
$yos = ((isset($_POST['yos']))?$_POST['yos']:'');
$amount = ((isset($_POST['amount']))?$_POST['amount']:'');
$errors = array();
$success = '';