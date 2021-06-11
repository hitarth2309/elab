<?php
  $conn = mysqli_connect('localhost','root','','elab');

  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $date = $_POST['date'];
  $service = $_POST['service'];
  $ftime = $_POST['ftime'];
  $ttime = $_POST['ttime'];
  $price = $_POST['price'];
  
  $query = "INSERT INTO booking (`name`, `email`, `phone`, `address`, `date`, `start_time`, `to_time`, `service`, `price`)  VALUES ('$username','$email','$phone','$address','$date','$ftime','$ttime','$service','$price')";

  $result =  $conn->query($query);
  if($result){
	  $data = array("Response"=>200,"Error"=>0,"Message"=>"Successfully inserted");
  }else{
    $data = array("Response"=>201,"Error"=>1,"Message"=>"Failed to insert Data");
  }
  
echo json_encode($data);

  ?>