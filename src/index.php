<?php
// Multiple recipients
$to = 'gs1465010@gmail.com, gaurav.k@taboola.com'; // note the comma

// Subject
$subject = 'Taboola Shoutout Weekly Report';

// Message
$message = '
 <div style="width:580px; height:415px; padding:20px; border: 4px solid #003399; text-align:center; color:#003399;">
     
       <br><br>
       <span style="font-size:18px"><i>Total Shoutout<b> 56</b> 
</i></span><br>
<span style="font-size:18px"><i>Total Shoutout This Week<b> 3</b> 
</i></span><br><br>
          <center>
      <span><img src="http://brahmarishisaubhari.com/feedback/Feedback/assets/img/logo.png"/></span> <br/><br/>
         </center>
<table rules="all" style="border-color: #666;" cellpadding="10">
<tr style="background: #eee;"><td><strong>Sender</strong> </td><td><strong>Receiver</strong> </td><td><strong>Manager</strong> </td><td><strong>Quality Exhibited</strong> </td><td><strong>Date</strong> </td></tr>
<tr><td>digvijay.s@taboola.com</td><td>navin.k@taboola.com</td><td>nuriel.a@taboola.com</td><td>Customer Centricity </td><td>Customer Centricity</td><td>Jun,15,2020 09:09:39 AM</td></tr>

</table>       
</div>';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Nidhi Sharma <gaurav.k@taboola.com>, Hadas <gaurav34@taboola.com>';
$headers[] = 'From: Shoutout Report<noreply>';
$headers[] = 'Cc: gs1465010@gmail.com, gaurav.srs@hotmail.com, gaurav1317@icloud.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
echo "Success";
?>
