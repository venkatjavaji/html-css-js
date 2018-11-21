<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         * Simple example script using PHPMailer with exceptions enabled
         * @package phpmailer
         * @version $Id$
         */
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
        }
        require('class.phpmailer.php');

        try {

            $mail = new PHPMailer(true); //New instance, with exceptions enabled

            $mailcont = "<!DOCTYPE html> <html lang='en-us'>     <head>         <title>Email Template</title>         <meta charset='UTF-8'>         <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' />         <link rel='stylesheet' href='http://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css'/>       </head>     <body style='font-family: Verdana,sans-serif; color: #6c6e70;'>         <div class='container'>             <div class='head' style=' min-height: 450px; color: #6c6e70; line-height: 25px;'>                 <h3 style='padding:20px;background: #337ab7;color: #f5f5f5;'>Dear <strong>#firstname#</strong>, Thank you for requesting a Quote.</h3>                 <div class='well'>                     <p>One of our Team Member will get in touch with you with the best possible Itinerary.                         We will get back to you shortly.</p></div>                 <div class='well'>                     <div class='contxt table-responsive' style=' min-height: 250px;'>                         <table class='table'>                             <tr>                                 <th>Phone number</th>                                 <td>#phnum#</td>                                 <th>Service Type</th>                                 <td>#service#</td>                             </tr>                             <tr>                                 <th>Email</th>                                 <td>#email#</td>                                 <th>No of passengers</th>                                 <td>#nop#</td>                             </tr>                             #journey#                              <tr>                                 <th colspan='4'>comments</th>                              </tr>                             <tr>                                 <td colspan='4'>#comments#</td>                             </tr>                          </table>                     </div>                 </div>                 <div class='well'>                      <p>Thanks & Regards,</p>                     <p>BestBusinessFares Team</p>                 </div>                 <div>                     <h3 style='background: #31b0d5;color: #fff; text-align: center;padding:10px;'>have a query</h3>                     <div class='well'> <p>phone1:&nbsp;&nbsp; 1-888-627-9403</p>                         <p>phone2:&nbsp;&nbsp; 1-628-666-0017</p>                         <p> Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info@bestbusinessfares.com</p>                         <p> Website:&nbsp;&nbsp;<a style='text-decoration:none;' href='www.bestbusinessfares.com'> www.bestbusinessfares.com</a></p></div>                 </div>             </div>             <div>                  © 2016 Best Business Fares Limited.  All rights reserved.             </div>         </div>     </body> </html>";
            //  $body = preg_replace('/\\\\/', '', $body); //Strip backslashes

            $phncodenum = $_POST['phonecode'] . '-' . $_POST['phonenumber'];
            $emailid = $_POST['email'];
            $myname = $_POST['firstname'];
            $servicetype = $_POST['servicetype'];
            $nop = $_POST['npassengers'];
            $source_city = $_POST['fromcity'];
            $to_city = $_POST['tocity'];
            $depdate = $_POST['departuredate'];
            $comments = $_POST['comment'];
            $journey_txt = "";
            $trip = $_POST['optradio'];
            if ($trip == 'one') {
                $journey_txt = "<tr><th>Source : " + $source_city + "</th><th>Destination : " + $to_city + "</th><th colspan='2'>Date of Depature : " + $depdate + "</th></tr>";
            } else if ($trip == 'round') {
				$retdate = $_POST['returndate'];
               $journey_txt = "<tr><th>Source : " + $source_city + "</th><th>Destination : " + $to_city + "</th><th>Date of Depature : " + $depdate + "</th><th>Date of Return : " + $retdate + "</th></tr>"; 
            } else if ($trip == 'multi') {
                
            }


            $toreplace = array("#firstname#", "#phnum#", "#service#", "#email#", "#nop#", "#journey#", "#comments#");
            $actualval = array($myname, $phncodenum, $servicetype, $emailid, $nop, $journey_txt, $comments);

            $mailcont_mod = str_replace($toreplace, $actualval, $mailcont);
            $body = $mailcont_mod;

            $mail->IsSMTP();                           // tell the class to use SMTP
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = 'tls';
            $mail->SMTPDebug = 1;
           /* $mail->Port = 25;                    // GODaddy default port set the SMTP server port
            $mail->Host = "localhost"; // GODaddy SMTP server
            $mail->Username = "info@bestbusinessfares.com";     // SMTP server username
            $mail->Password = "bbf@1234";            // SMTP server password
            $mail->AddReplyTo("info@bestbusinessfares.com");

            $mail->From = "info@bestbusinessfares.com";
            $mail->FromName = "BestBusinessFares";*/

            // $to = "javaji.venkat@gmail.com";

            $mail->Port = 465;                    // set the SMTP server port
            $mail->Host = "smtp.gmail.com"; // SMTP server
            $mail->Username = "bestbusinessfares@gmail.com";     // SMTP server username
            $mail->Password = "bbf@1234";            // SMTP server password

           // $mail->AddReplyTo("javaji.venkat@domain.com", "First Last");

            $mail->From = "bestbusinessfares@gmail.com";
            $mail->FromName = "CustomerCare";

           // $to = "javaji.venkat@gmail.com";
            
            $mail->AddAddress($emailid);

            $mail->AddCC('bestbusinessfares@gmail.com');
            //$mail->AddCC('ijitendar@gmail.com');
            // $mail->AddCC('sidhu396@gmail.com');
            //$mail->AddCC('javaji.venkat@gmail.com');
            //$mailer->AddAddress('recipient3@domain.com', 'Third Name');

            $mail->Subject = "Greetings from Best Business Fares!!";

            $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            $mail->WordWrap = 80; // set word wrap

            $mail->MsgHTML($body);

            $mail->IsHTML(true); // send as HTML

            $mail->Send();

            echo 'Message has been sent.';
            //echo "<script type='text/javascript'> document.location = 'index.php?mail=sent'; </script>";
        } catch (phpmailerException $e) {
            //echo "<script type='text/javascript'> document.location = 'index.php?mail=error'; </script>";
        }
        ?>
    </body>
</html>
