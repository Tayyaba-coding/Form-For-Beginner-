<?php
 $name = $_POST['name'];
 $company = $_POST['company'];
 $contact = $_POST['contact'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $city = $_POST['city'];
 $state = $_POST['state']
 $country = $_POST['coutry'];
 $indutry = $_POST['industry'];

 //database
 $conn = new mysql('localhost','root','','crm');
 if($conn->connect_error)
 {
      die('Connection Failed : '.$conn->connect_error );
      echo "error..";
 }
 else{
     $stmt =$conn->prepare("insert  into form(name, company, contact, email, password, city, state, country, industry) value(?,?,?,?,?,?,?,?,?)");
     $stmt->bind_param("ssissssss",$name, $company, $contact, $email, $password, $city, $state, $country, $indutry);
     $stmt->execute();
     echo "registration done...";
     $stmt->close();
     $conn->close();
    
 ?>