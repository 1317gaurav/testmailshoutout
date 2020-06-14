<?php
// Multiple recipients
$to = 'gs1465010@gmail.com, gaurav.k@taboola.com'; // note the comma

// Subject
$subject = 'Taboola Shoutout Weekly Report';

// Message
$message = '
 <div style="width:500px; height:338px; padding:20px; text-align:center; border: 10px solid #003399;">
       <span style="font-size:20px; font-weight:600">Taboola Shoutout Report</span>
       <br><br>
       <span style="font-size:18px"><i>Total Shoutout<b> 58</b> 
</i></span><br>
<span style="font-size:18px"><i>Total Shoutout Tis Week<b>2</b> 
</i></span>
      <span><img src="http://brahmarishisaubhari.com/feedback/Feedback/assets/img/logo.png"/></span> <br/><br/>
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
