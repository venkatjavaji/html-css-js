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

            $mailcont = "<!DOCTYPE html> <html lang='en-us'> <head>     <title>Email Template</title>     <meta charset='UTF-8'> </head> <body style='font-family: Open Sans,Verdana,sans-serif; color: #6c6e70;'>     <div class='' style=''>         <div>             <div style='height:70px;width:275px;float:left;'>                 <img src='https://www.gobusinessfares.com/img/bbf_logo.png' heigh='70px' width='275px' alt='FlighHigh'></img>             </div> 			<div style='clear:both'></div> 			<h1 style='font-family:Lobster; padding-left:10px; border-left:5px solid #00b9ff;color:#f4560cbf'>GoBusinessFares</h1>         </div> 		<br/><br/>         <div class='' style=' min-height: 450px; color: #6c6e70; line-height: 25px;border:2px solid rgba(170, 169, 169, 0.16);'>             <div class='well' style='min-height: 20px;padding: 19px;margin-bottom: 20px;background-color: #f5f5f5;border: 1px solid #e3e3e3;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);box-shadow: inset 0 1px 1px rgba(0,0,0,.05);border-bottom: 5px solid #f6c514; border-top: 5px solid #00b9ff;'> 				 <p style='text-align: left;'>Dear <strong>#firstname#</strong>, Thank you for requesting a Quote.</p>                 <p>One of our Team Member will get in touch with you with the best possible Itinerary. We will get back to you                     shortly.</p>                 <p>                     <h4>The Lowest Price on Business and First class Airtickets. GUARANTEED!!</h4>                 </p>             </div>             <div class='well' style='min-height: 20px;padding: 19px;margin-bottom: 20px;background-color: #f5f5f5;border: 1px solid #e3e3e3;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);box-shadow: inset 0 1px 1px rgba(0,0,0,.05); border-bottom: 5px solid #f6c514;'>                 <div class='contxt table-responsive' style=' min-height: 250px;'>                     <table class='table' style='width: 100%;max-width: 100%;margin-bottom: 20px;text-align:left;'> 						#journey# 						<tr>                             <th>Phone number</th>                             <td>#phnum#</td>                             <th>Service Type</th>                             <td>#service#</td>                         </tr>                         <tr>                             <th>Email</th>                             <td>#email#</td>                             <th>No of passengers</th>                             <td>#nop#</td>                         </tr>                         <tr>                             <th colspan='4'>comments</th>                         </tr>                         <tr>                             <td colspan='4'>#comments#</td>                         </tr>                     </table>                 </div>             </div>             <div class='well'>                 <p style='padding-left:20px'><i>Thanks & Regards,</i></p>                 <p style='padding-left:20px'><strong>Go Business Fares Team</strong></p>             </div>             <div style='border-bottom: 5px solid #f6c514;'>                 <h3 style='background: #31b0d5;color: #fff; padding:10px;margin:0'>Have a Query</h3>                 <div class='well' style='min-height: 20px;padding: 20px;background-color: #f5f5f5;border: 1px solid #e3e3e3;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);box-shadow: inset 0 1px 1px rgba(0,0,0,.05);'>                     <p>phone1: 1-888-627-9403  &nbsp;&nbsp;| phone2: 1-628-666-0017 &nbsp;&nbsp; <br/>Email: <a style='text-decoration:none' href='mailto:info@gobusinessfares.com?Subject=#subject#>info@gobusinessfares.com</a> &nbsp;&nbsp;<br/> Website: <a style='text-decoration:none' href='https://www.gobusinessfares.com'>gobusinessfares.com</a></p> 					<p> © 2018 Go Business Fares Limited. All rights reserved. </p>                 </div>             </div>         </div>     </div> </body> </html >";
            //  $body = preg_replace('/\\\\/', '', $body); //Strip backslashes
			
			$postdata = file_get_contents("php://input");
			//echo file_get_contents("php://input");
			if(isset($postdata) && !empty($postdata))
			{
				$request     = json_decode($postdata,true);
				//echo  $request;
				//$phncodenum = $request['selected']['dial_code'] . ' - ' . $request['phonenumber'] ;
				$phncodenum = $request['phonenumber'] ;
				$emailid = $request['email'];
				$myname = $request['name'];
				$servicetype = $request['cabin'];
				$nop = $request['noofpassengers'];
				$source_city = $request['fromcity'];
				$to_city = $request['tocity'];
				$depdate = $request['departuredate'];
				$retdate = $request['returndate'];
				$comments = $request['comment'];
				$trip = $request['trip'];
				
				
			}
    

            
            $journey = '<tr>';

            if ($trip == 'oneway') {
                $journey = $journey . "<th colspan='4'>You have chosen One way Journey.</th></tr>";
                $journey = $journey . "<th>From City</th><td>" . $source_city . "</td><th>To city</th><td>" . $to_city . "</td>";

                $journey = $journey . "<tr><th colspan='2'>Date of Departure</th><td colspan='2'>" . $depdate . "</td>";
            } else if ($trip == 'roundtrip') {
                //$retdate = $retdate;
                $journey = $journey . "<th colspan='4'>You have chosen Round/Two way Journey.</th></tr>";
                $journey = $journey . "<tr><th>From City</th><td>" . $source_city . "</td><th>To city</th><td>" . $to_city . "</td><tr>";

                $journey = $journey . "<th>Date of Departure</th><td>" . $depdate . "</td>";
                $journey = $journey . "<th>Date of Return</th><td>" . $retdate . "</td>";
            } else if ($trip == 'multicity') {

                $journey = $journey . "<th colspan='4'>You have chosen Multi city Journey.</th></tr>";


                $source_city1 = $request['from1'];
                $to_city1 = $request['to1'];
                $depdate1 = $request['departuredate1'];
                $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city1 . " </td><td><Strong>To city : </Strong> " . $to_city1 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate1 . "</td></tr>";

                $source_city2 = $request['from2'];
                $to_city2 = $request['to2'];
                $depdate2 = $request['departuredate2'];
                if ($source_city2 != "" || $to_city2 != "" || $depdate2 != "") {
                    $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city2 . " </td><td><Strong>To city : </Strong> " . $to_city2 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate2 . "</td></tr>";
                }


                $source_city3 = $request['from3'];
                $to_city3 = $request['to3'];
                $depdate3 = $request['departuredate3'];
                if ($source_city3 != "" || $to_city3 != "" || $depdate3 != "") {
                    $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city3 . " </td><td><Strong>To city : </Strong> " . $to_city3 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate3 . "</td></tr>";
                }
                $source_city4 = $request['from4'];
                $to_city4 = $request['to4'];
                $depdate4 = $request['departuredate4'];
                if ($source_city4 != "" || $to_city4 != "" || $depdate4 != "") {
                    $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city4 . " </td><td><Strong>To city : </Strong> " . $to_city4 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate4 . "</td>";
                }
				
				$source_city5 = $request['from5'];
                $to_city5 = $request['to5'];
                $depdate5 = $request['departuredate5'];
                if ($source_city5 != "" || $to_city5 != "" || $depdate5 != "") {
                    $journey = $journey . "<tr><td><Strong>From City : </Strong>" . $source_city5 . " </td><td><Strong>To city : </Strong> " . $to_city5 . "</td><td colspan='2'><strong>Date of departure</strong> : " . $depdate5 . "</td>";
                }
            }

            $journey = $journey . '</tr>';

            if ($comments == "") {
                $comments = "You did not add any comments!!";
            }

			$subject = "Query on my Itenary ". $myname;
            $toreplace = array("#firstname#", "#phnum#", "#service#", "#comments#", "#email#", "#nop#", "#journey#", "#subject#");
            $actualval = array($myname, $phncodenum, $servicetype, $comments, $emailid, $nop, $journey,$subject);

            $mailcont_mod = str_replace($toreplace, $actualval, $mailcont);
            $body = $mailcont_mod;

            $mail->IsSMTP();                           // tell the class to use SMTP
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            //$mail->SMTPSecure = 'ssl';
			$mail->SMTPSecure = 'tls';
            $mail->SMTPDebug = 1;
			$mail->Port = 25;
            //$mail->Port = 465;                    // GODaddy default port set the SMTP server port
            $mail->Host = "localhost"; // GODaddy SMTP server
            $mail->Username = "support@gobusinessfares.com";     // SMTP server username
            $mail->Password = "dinesh";            // SMTP server password

            $mail->From = "	support@gobusinessfares.com";
            $mail->FromName = "GoBusinessFares";

            // $to = "javaji.venkat@gmail.com";
			$mail->AddReplyTo("vjalt1022@gmail.com","GBF Support");
            $mail->AddAddress($emailid);

            $mail->AddCC('vjalt1022@gmail.com');
            
            $mail->AddCC('sidhu396@gmail.com');
            //$mail->AddCC('javaji.venkat@gmail.com');
            //$mailer->AddAddress('recipient3@domain.com', 'Third Name');

            $mail->Subject = "Greetings from Go Business Fares!!";

            $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            $mail->WordWrap = 80; // set word wrap

            $mail->MsgHTML($body);

            $mail->IsHTML(true); // send as HTML

            $mail->Send();

            //echo 'Message has been sent.';
            //echo "<script type='text/javascript'> document.location = 'index.php?mail=sent'; </script>";
        } catch (phpmailerException $e) {
            echo $e;
            // echo "<script type='text/javascript'> document.location = 'index.php?mail=error'; </script>";
        }
        ?>
    </body>
</html>
