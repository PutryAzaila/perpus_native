<?php
//                      host      usename pass  nama database
  $conn=mysqli_connect('localhost','root','','db_perpus_xiir5');
  /* check connection */
  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }
?>