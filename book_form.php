<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $event_type = $_POST['event_type'];
      $no_of_days = $_POST['no_of_days'];
      $start = $_POST['start'];
      $end = $_POST['end'];

      $request = " insert into book_form(name, email, phone, address, event_type, no_of_days, start, end) values('$name','$email','$phone','$address','$event_type','$no_of_days','$start','$end') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>