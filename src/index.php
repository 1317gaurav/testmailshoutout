<?php
// Multiple recipients
$to = 'gs1465010@gmail.com, gaurav.k@taboola.com'; // note the comma

// Subject
$subject = 'Taboola Shoutout Weekly Report';

// Message
$message = '
 <div style="width:500px; height:270px; padding:20px; border: 4px solid #003399; text-align:center; color:#003399;">
     
       <br><br>
       <span style="font-size:18px"><i>Total Shoutout<b> 58</b> 
</i></span><br>
<span style="font-size:18px"><i>Total Shoutout This Week<b> 2</b> 
</i></span><br><br>
          <center>
      <span><img src="http://brahmarishisaubhari.com/feedback/Feedback/assets/img/logo.png"/></span> <br/><br/>
         </center>
<table rules="all" style="border-color: #666;" cellpadding="10">
<tr style="background: #eee;"><td><strong>Sender</strong> </td><td>Gaurav</td></tr>
<tr><td><strong>Receiver</strong> </td><td>Roshan</td></tr>
<tr><td><strong>Quality Exhibited</strong> </td><td>Collaboration</td></tr>
<tr><td><strong>Date</strong> </td><td>Jan,23,2020 10:47:04 AM</td></tr>
</table>       
</div>';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Nidhi Sharma <gaurav12@taboola.com>, Hadas <gaurav34@taboola.com>';
$headers[] = 'From: Shoutout Report<noreply>';
$headers[] = 'Cc: birthdayarchive@example.com';
$headers[] = 'Bcc: birthdaycheck@example.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
echo "Success";
?>
