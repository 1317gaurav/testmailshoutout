<?php
// Multiple recipients
$to = 'gs1465010@gmail.com, gaurav.k@taboola.com'; // note the comma

// Subject
$subject = 'Taboola Shoutout Weekly Report';

// Message
$message = '<html><body>';
$message .= '<img src="http://brahmarishisaubhari.com/feedback/Feedback/assets/img/logo.png" alt="Taboola Shoutout Report" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Total Shoutout</strong> </td><td>56</td></tr>";
$message .= "<tr><td><strong>Total Shoutout this week</strong> </td><td>5</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

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
