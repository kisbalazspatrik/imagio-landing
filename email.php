<?php

    //ügyfél kapja

    $msg = $_POST['user_message'];

    $email = $_POST['user_email'];

    $sub = $_POST['user_sub'];

    $name = $_POST['user_name'];



  require 'phpmailer/PHPMailerAutoload.php';



    $mail = new PHPMailer();



    $mail->IsSMTP();

    $mail->Mailer = 'smtp';

    $mail->SMTPAuth = true;

    $mail->Host = 'smtp.gmail.com';

    $mail->Port = 465;

    $mail->SMTPSecure = 'ssl';





    $mail->Username = "noreply.imagio@gmail.com";

    $mail->Password = "####";



  $mail -> CharSet = 'UTF-8';



  $mail->addReplyTo('kisbalazspatrik@gmail.com','imagio');

  $mail->addAddress($email, ''); //címzett



  $mail->Subject = "Imagio - Visszaigazolás";



  $mail->isHTML(true);



  $body = 'Kedves ' . $name.'.';

  $body .= '</br>';

  $body .= 'Köszi';

  $mail->Body ='<div class="">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <style>

    * {

        font-family: "Open Sans", sans-serif;

    }

    </style>

	<div class="aHl">

	</div>

	<div id=":1y1" tabindex="-1">

	</div>

	<div id=":1x3" class="ii gt">

	<div id=":1t9" class="a3s aXjCH " role="gridcell" tabindex="-1">

	<div style="background-color:#efefec;font-family:helvetica,arial,sans-serif;font-size:14px;line-height:20px;color:#2d2d2d">

	<div class="adM">

</div>

<center>

<table border="0" cellpadding="0" cellspacing="0" style="border-left:0x solid #ddddd6;border-right:0px solid #ddddd6;border-top:0px solid #ddddd6;border-bottom:0px solid #ddddd6;width:100%;max-width:600px;font-family:helvetica,arial,clean,sans-serif;font-size:14px;line-height:20px;color:#2d2d2d;background-color:#fff;empty-cells:show"><tbody><tr><td valign="top">

				<table style="width:100%" cellpadding="0" cellspacing="0" border="0"><tbody>

				<tr>

				<td valign="top" style="width:283px;border:none">

				<a href="imagio.hu" style="color:#d2271b;text-decoration:none" target="_blank">

				<img src="http://imagio.hu/images/emailheader.jpg" width="600" height="250" style="border:0px" alt="imagio.hu" title="imagio.hu" class="CToWUd"></a></td>



        </tr><tr><td class="m_-8906272242395356708content" style="padding:20px;text-align:left;background-color:#ffffff">

<div>Kedves '.$name.'!</div><br><br>



<div align="justify">Köszi a megkeresést! Hamarosan felvesszük veled a kapcsolatot.</div><br><br>



További szép napot!</td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:600px;font-family:helvetica,arial,clean,sans-serif;font-size:14px;line-height:20px;color:#2d2d2d;background-color:#efefec;empty-cells:show"><tbody><tr><td><div class="m_-8906272242395356708signature" style="font-size:8pt;padding:10px 0px 0px 5px;text-align:left">Ez egy <span class="il">automatikusan</span> küldött üzenet, kérjük, ne válaszoljon rá.<br><br>



					</tr>

					</tbody>

					</table>

					</center>

					<div class="yj6qo">

					</div>

					<div class="adL">

</div>

</div>

</div></div>

<div id=":1yi" class="ii gt" style="display:none">

<div id=":1yj" class="a3s aXjCH undefined" role="gridcell" tabindex="-1"></div></div><div class="hi">

</div>

</div>';

    $mail->send();



    $maill = new PHPMailer();

	$maill->IsSMTP();

	$maill->Mailer = 'smtp';

	$maill->SMTPAuth = true;

	$maill->Host = 'smtp.gmail.com';

	$maill->Port = 465;

	$maill->SMTPSecure = 'ssl';





	$maill->Username = "noreply.imagio@gmail.com";

    $maill->Password = "####";



	//charset

	$maill -> CharSet = 'UTF-8';



    $maill->addAddress('kisbalazspatrik@gmail.com', '');



    $maill->Subject = 'ImagioWEB - Új levél érkezett: '.$name.' - '.$sub.'!';



    $maill->isHTML(true);



	$msg = stripcslashes(isset($msg)

    ?

    preg_replace('#(\\\r|\\\r\\\n|\\\n)#', '<br/>', $msg)

    :

    false);



	$msg = str_replace("<br/><br/>","<br/>",$msg);

    $maill->Body ='<div class="">

<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <div class="aHl">

    <style>

    * {

        font-family: "Open Sans", sans-serif;

    }

    </style>

        </div>

        <div id=":1y1" tabindex="-1">

        </div>

        <div id=":1x3" class="ii gt">

        <div id=":1t9" class="a3s aXjCH " role="gridcell" tabindex="-1">

        <div style="background-color:#efefec;font-family:helvetica,arial,sans-serif;font-size:14px;line-height:20px;color:#2d2d2d">

        <div class="adM">

    </div>

    <center>

    <table border="0" cellpadding="0" cellspacing="0" style="border-left:0x solid #ddddd6;border-right:0px solid #ddddd6;border-top:0px solid #ddddd6;border-bottom:0px solid #ddddd6;width:100%;max-width:600px;font-family:helvetica,arial,clean,sans-serif;font-size:14px;line-height:20px;color:#2d2d2d;background-color:#fff;empty-cells:show"><tbody><tr><td valign="top">

                    <table style="width:100%" cellpadding="0" cellspacing="0" border="0"><tbody>

                    <tr>

                    <td valign="top" style="width:283px;border:none">

                    <a href="imagio.hu" style="color:#d2271b;text-decoration:none" target="_blank">

                    <img src="http://imagio.hu/images/emailheader.jpg" width="600" height="250" style="border:0px" alt="imagio.hu" title="imagio.hu" class="CToWUd"></a></td>

    

            </tr><tr><td class="m_-8906272242395356708content" style="padding:20px;text-align:left;background-color:#ffffff">

                      <div><b>Új levél érkezett!</b></div><br><br>

    

                      <div>Név: '.$name.'</div>

                      <div>Tárgy: '.$sub.'</div>

                      <div>Email: '.$email.'</div><br><br>

                      

                      <div>Az üzenet tartalma:</div>

                      <p style="background: #f9f9f9; padding:10px">'.nl2br(strip_tags($msg)).'</p>

                      

                      <br><br>

    

    Imagio kapcsolatfelvétel - web</td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:600px;font-family:helvetica,arial,clean,sans-serif;font-size:14px;line-height:20px;color:#2d2d2d;background-color:#efefec;empty-cells:show"><tbody><tr><td><div class="m_-8906272242395356708signature" style="font-size:8pt;padding:10px 0px 0px 5px;text-align:left">Ez egy <span class="il">automatikusan</span> küldött üzenet, kérjük, ne válaszoljon rá.<br><br>

    

                        </tr>

                        </tbody>

                        </table>

                        </center>

                        <div class="yj6qo">

                        </div>

                        <div class="adL">

    </div>

    </div>

    </div></div>

    <div id=":1yi" class="ii gt" style="display:none">

    <div id=":1yj" class="a3s aXjCH undefined" role="gridcell" tabindex="-1"></div></div><div class="hi">

    </div>

    </div>';

    $maill->send();

  ?>

