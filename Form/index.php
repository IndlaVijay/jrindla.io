
<?php 
      // PHP code to sent contact form to client and owner
if (isset($_POST['submit'])) {   //Check if user enter data
        $mailto="varmavijay259@yahoo.com"; // My email
        $from=$_POST['email']; //Senders email
        $name=$_POST['name']; //User name
        $subject=$_POST['subject'];
        $subject2="Your message submitted successfully"; // This is for client
        $message="Client Name: ". $name. ", Wrote the folloe ing message". "\n\n". $_POST['message'];
        $message2="Dear ". $name. "\n\n" ."Thank You for contacting Us! We'll get back you shortly";
        $headers="From: ". $from; //User entered emsil sddress
        $headers2="From: ". $mailto; //This will receive a client 
        $result= mail($mailto, $subject, $message, $headers); // Send mail to owner 
        $result2= mail($fro, $subject2, $message2, $headers2); // Send  mail to user as well
        if ($result) {
            echo '<script type="text/javascript">alert("Message Sent. Thank you! We will connect you shortly.") </script>';
        } 
          else {
            echo '<script type="text/javascript">alert("Submission failed! Try again later.") </script>';
        }
    } 
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="form.css">
        <!-- <script src="form.js"></script> -->
    </head>
    <body>
    
    <section>
        <div class="container">
          <form action="" method="POST" id="my-form">
      
            <div class="form-group">
              <label for="firstName"> First Name</label>
              <input type="text" id="firstName" name="firstName" required>
            </div>
      
            <div class="form-group">
              <label for="latsName">Last Name</label>
              <input type="text" id="lastName" name="lastName" required>
            </div>
      
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
            </div>
      
            <div class="form-group">
              <label for="massage">Massage</label>
              <textarea name="massage" id="message" cols="30" rows="10"></textarea>
            </div>
      
            <button type="submit">Submit</button>
          </form>
        </div>
        <div id="status"></div>
      </section>
</body>
</html>
  
