

<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "kumarchandansingh22@gmail.com";
         $subject = "Thanks a lot";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>Chandan singh Thanks</h1>";
         
         $header = "From:chandankumarsoft@gmail.com \r\n";
         $header .= "Cc:chandankumarsoft@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>