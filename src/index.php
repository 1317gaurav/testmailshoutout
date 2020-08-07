<?php
// Multiple recipients
$to = 'nidhi.s@taboola.com, hadas.shmueli@taboola.com'; // note the comma

// Subject
$subject = 'Taboola Shoutout Weekly Report';

// Message
$message = '
 <div style="width: 760px;
    height: 382px;
    padding: 20px;
    border: 5px solid #003399;

">
     
       <br><br>
       <span style="font-size:18px;text-align: center;"><b style="color:#000;">Total shoutout sent since launch :<b style="color: #003399"> 60</b> 
</i></span><br>
<span style="font-size:18px;text-align: center;"><b style="color:#000;">Shoutout sent this week :<b style="color: #003399"> 2</b> 
</i></span><br><br>
          <center>
      <span><img src="http://brahmarishisaubhari.com/feedback/Feedback/assets/img/logo.png"/></span> <br/><br/>
         </center>
<p style="color:#000;">Details of shoutout sent this week :</p>
<table rules="all" style="border-color:#666" cellpadding="10">
<tbody><tr style="background:#eee;color:#000"><td><strong>Sender</strong> </td><td><strong>Receiver</strong> </td><td><strong>Manager</strong> </td><td><strong>Quality Exhibited</strong> </td><td><strong>Date</strong> </td></tr>
<tr><td><a href="digvijay.s@taboola.com" target="_blank">digvijay.s@taboola.com</a></td><td><a href="katia.g@taboola.com" target="_blank">katia.g@taboola.com</a></td><td><a href="amit.w@taboola.com" target="_blank">amit.w@taboola.com</a></td><td>Collaboration </td><td>Aug,06,2020 11:52:31 AM</td></tr>
<tr><td><a href="digvijay.s@taboola.com" target="_blank">digvijay.s@taboola.com</a></td><td><a href="benny.k@taboola.com" target="_blank">benny.k@taboola.com</a></td><td><a href="jay.s@taboola.com" target="_blank">jay.s@taboola.com</a></td><td>Empowering </td><td>Aug,06,2020 04:18:34 PM</td></tr>
</tbody></table>
</div>';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: Shoutout Report<noreply>';
$headers[] = 'Cc: jay.s@taboola.com, harel.u@taboola.com, sudip.c@taboola.com';
$headers[] = 'Bcc: gaurav.k@taboola.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
echo "Success";
?>
