<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
@author Venkatesh Javaji
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

            $mailcont = "<!DOCTYPE html> <html lang='en-us'>     <head>         <title>Email Template</title>         <meta charset='UTF-8'> 		 </head>     <body style='font-family: Verdana,sans-serif; color: #6c6e70;'>         <div class='container' style=''> 		<div> 			<div style='height:70px;width:275px;float:left;'><img src='http://www.bestbusinessfares.com/img/bbf_logo.png' heigh='70px' width='275px' alt='BestBusinessFares'></img> 				 			</div> 			</div>             <div class='head' style=' min-height: 450px; color: #6c6e70; line-height: 25px;border:2px solid rgba(170, 169, 169, 0.16);padding:20px;'>                 <h3 style='color:#0070ff'>Dear <strong>#firstname#</strong>, Thank you for requesting a Quote.</h3>                 <div class='well' style='min-height: 20px;padding: 19px;margin-bottom: 20px;background-color: #f5f5f5;border: 1px solid #e3e3e3;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);box-shadow: inset 0 1px 1px rgba(0,0,0,.05);'>                     <p>One of our Team Member will get in touch with you with the best possible Itinerary.                         We will get back to you shortly.</p> 						 						<p><h4>The Lowest Price on Business and First class Airtickets. GUARANTEED!!</h4> 						</p></div>                 <div class='well' style='min-height: 20px;padding: 19px;margin-bottom: 20px;background-color: #f5f5f5;border: 1px solid #e3e3e3;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);box-shadow: inset 0 1px 1px rgba(0,0,0,.05);'>                     <div class='contxt table-responsive' style=' min-height: 250px;'>                         <table class='table' style='width: 100%;max-width: 100%;margin-bottom: 20px;text-align:left;'>                             <tr>                                 <th>Phone number</th>                                 <td>#phnum#</td>                                 <th>Service Type</th>                                 <td>#service#</td>                             </tr>                             <tr>                                 <th>Email</th>                                 <td>#email#</td>                                 <th>No of passengers</th>                                 <td>#nop#</td>                             </tr>                             #journey#                              <tr>                                 <th colspan='4'>comments</th>                              </tr>                             <tr>                                 <td colspan='4'>#comments#</td>                             </tr>                          </table>                     </div>                 </div>                 <div class='well'>                      <p>Thanks & Regards,</p>                     <p>BestBusinessFares Team</p>                 </div>                 <div>                     <h3 style='background: #31b0d5;color: #fff; text-align: center;padding:10px;'>have a query</h3>                     <div class='well' style='min-height: 20px;padding: 19px;margin-bottom: 20px;background-color: #f5f5f5;border: 1px solid #e3e3e3;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);box-shadow: inset 0 1px 1px rgba(0,0,0,.05);' > <p>phone1:&nbsp;&nbsp; 1-888-627-9403</p>                         <p>phone2:&nbsp;&nbsp; 1-628-666-0017</p>                         <p> Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info@bestbusinessfares.com</p>                         <p> Website:&nbsp;&nbsp; www.bestbusinessfares.com</p></div>                 </div>             </div>             <div>                  © 2016 Best Business Fares Limited.  All rights reserved.             </div>                      </div> 		 		 	<script>       </body> </html>";
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
            $trip = $_POST['optradio'];
            $journey = '<tr>';

            if ($trip == 'one') {
                $journey = $journey . "<th colspan='4'>You have chosen One way Journey.</th></tr>";
                $journey = $journey . "<th>From City</th><td>" . $source_city . "</td><th>To city</th><td>" . $to_city . "</td>";

                $journey = $journey . "<tr><th colspan='2'>Date of Departure</th><td colspan='2'>" . $depdate . "</td>";
            } else if ($trip == 'round') {
                $retdate = $_POST['returndate'];
                $journey = $journey . "<th colspan='4'>You have chosen Round/Two way Journey.</th></tr>";
                $journey = $journey . "<tr><th>From City</th><td>" . $source_city . "</td><th>To city</th><td>" . $to_city . "</td><tr>";

                $journey = $journey . "<th>Date of Departure</th><td>" . $depdate . "</td>";
                $journey = $journey . "<th>Date of Return</th><td>" . $retdate . "</td>";
            } else if ($trip == 'multitrip') {

                $journey = $journey . "<th colspan='4'>You have chosen Multi city Journey.</th></tr>";


                $source_city1 = $_POST['fromcity1'];
                $to_city1 = $_POST['tocity1'];
                $depdate1 = $_POST['departuredate1'];
                $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city1 . " </td><td><Strong>To city : </Strong> " . $to_city1 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate1 . "</td></tr>";

                $source_city2 = $_POST['fromcity2'];
                $to_city2 = $_POST['tocity2'];
                $depdate2 = $_POST['departuredate2'];
                if ($source_city2 != "" || $to_city2 != "" || $depdate2 != "") {
                    $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city2 . " </td><td><Strong>To city : </Strong> " . $to_city2 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate2 . "</td></tr>";
                }


                $source_city3 = $_POST['fromcity3'];
                $to_city3 = $_POST['tocity3'];
                $depdate3 = $_POST['departuredate3'];
                if ($source_city3 != "" || $to_city3 != "" || $depdate3 != "") {
                    $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city3 . " </td><td><Strong>To city : </Strong> " . $to_city3 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate3 . "</td></tr>";
                }
                $source_city4 = $_POST['fromcity4'];
                $to_city4 = $_POST['tocity4'];
                $depdate4 = $_POST['departuredate4'];
                if ($source_city4 != "" || $to_city4 != "" || $depdate4 != "") {
                    $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city4 . " </td><td><Strong>To city : </Strong> " . $to_city4 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate4 . "</td>";
                }
            }

            $journey = $journey . '</tr>';

            if ($comments == "") {
                $comments = "You did not add any comments!!";
            }

            $toreplace = array("#firstname#", "#phnum#", "#service#", "#comments#", "#email#", "#nop#", "#journey#");
            $actualval = array($myname, $phncodenum, $servicetype, $comments, $emailid, $nop, $journey);

            $mailcont_mod = str_replace($toreplace, $actualval, $mailcont);
            $body = $mailcont_mod;

            $mail->IsSMTP();                           // tell the class to use SMTP
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = 'ssl';
            $mail->SMTPDebug = 1;
            $mail->Port = 465;                    // GODaddy default port set the SMTP server port
            $mail->Host = "smtp.gmail.com"; // GODaddy SMTP server
            $mail->Username = "raghavraj1022@gmail.com";     // SMTP server username
            $mail->Password = "p@ssw@rd";            // SMTP server password

            $mail->From = "raghavraj1022@gmail.com";
            $mail->FromName = "BestBusinessFaresTest";

            // $to = "javaji.venkat@gmail.com";
			$mail->AddReplyTo("raghavraj1022@gmail.com","BBF Support");
            $mail->AddAddress($emailid);

            $mail->AddCC('javaji.venkat@yahoo.com.com');
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

            // echo 'Message has been sent.';
            echo "<script type='text/javascript'> document.location = 'index.php?mail=sent'; </script>";
        } catch (phpmailerException $e) {
            echo $e;
            // echo "<script type='text/javascript'> document.location = 'index.php?mail=error'; </script>";
        }
        ?>
    </body>
</html>
