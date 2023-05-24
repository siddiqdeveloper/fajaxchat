
<?php
$status = '';
use App\Option;
?>

<!---<html>
<head>
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>You're at the top of our waiting list</title>

  <style type="text/css">
  .url{
        color: #e40046;
    font-weight: 700;
    font-size: 16px;
    text-decoration: none;
  }
    @media only screen {
      .container {
        padding: 10px;
      }

    }

    @media only screen {
      .content {
        padding: 10px;
      }

    }

    @media only screen and (max-width: 620px) {
      table[class=body] h1,
      table[class=body] h2,
      table[class=body] h3,
      table[class=body] h4 {
        font-weight: 600 !important;
      }

    }

    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 22px !important;
      }

    }

    @media only screen and (max-width: 620px) {
      table[class=body] h2 {
        font-size: 18px !important;
      }

    }

    @media only screen and (max-width: 620px) {
      table[class=body] h3 {
        font-size: 16px !important;
      }

    }

    @media only screen and (max-width: 620px) {
      table[class=body] .content,
      table[class=body] .wrapper {
        padding: 10px !important;
      }

    }

    @media only screen and (max-width: 620px) {
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }

    }

    @media only screen and (max-width: 620px) {
      table[class=body] .btn table,
      table[class=body] .btn a {
        width: 100% !important;
      }

    }

    @media only screen and (max-width: 620px) {
      .header {
        margin-bottom: 10px !important;
        margin-top: 20px !important;
      }

    }

    @media only screen and (max-width: 620px) {
      table[class=body] .wrapper {
        padding: 40px 20px !important;
      }

    }

    @media only screen and (max-width: 620px) {
      .main.signup .panel:nth-of-type(2),
      .main.signup .panel:nth-of-type(3) {
        padding-bottom: 10px !important;
      }

    }

    @media only screen and (max-width: 620px) {
      .main.signup .panel:nth-of-type(1) img.intro {
        width: 120px !important;
      }

    }

    @media only screen and (max-width: 620px) {
      .no-media-query {
        display: none !important;
      }

    }

    @media only screen and (max-width: 620px) {
      .small-screen-block {
        width: 100% !important;
        height: auto !important;
        overflow: inherit !important;
        float: none !important;
        display: block !important;
        max-height: none !important;
        position: relative !important;
      }

    }

    @media only screen {
      .media-query-available--inline {
        width: auto !important;
        min-height: auto !important;
        overflow: auto !important;
        float: none !important;
        display: inline !important;
        max-height: auto !important;
      }

    }

    @media only screen {
      .media-query-not-vailable {
        display: none !important;
      }

    }
  </style>
</head>

<body style="margin: 0; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; height: 100% !important; line-height: 1.6em; -webkit-font-smoothing: antialiased; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; background-color: #f6f6f6;">

  <table class="body" style="box-sizing: border-box; background-color: white; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%" bgcolor="white">
    <tbody>
      <tr>
        <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top;" valign="center">
          
         {{Option::getsidename()}}-Thanks for shopping with us! {{ $order }} Order is {{$status}} 
        </td>
      </tr>
     <tr>
        <td class="container" style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; display: block; margin: 0 auto !important; max-width: 580px; padding: 10px 0; width: 580px;"
          width="580" valign="center">
          <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px 0;">
            
            <table class="footer" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="box-sizing: border-box; clear: both; border-collapse: collapse !important; border-spacing: 0 !important; margin: 0 auto; max-width: 660px; table-layout: fixed !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
              <tbody>
                <tr style="color: #999999; font-size: 12px;">
                  <td align="center" style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; vertical-align: top; padding: 20px 10px 40px; text-align: center; font-size: 14px; color: grey;" valign="center">
                    <em style="color: #999999; font-size: 12px;">Copyright © 2020 {{Option::getsidename()}}, All rights reserved.</em><br style="color: #999999; font-size: 12px;"> You are receiving this email because you signed up on our website
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </td>
        <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top;" valign="center"></td>
      </tr>
    </tbody>
  </table>

</body>
</html> -->




<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">

body{
  font-family:'segoe ui';
}
a{
  text-decoration:none;
  color:white;
}
.gt a{
  color:white !important;
}
p{
  padding:0px;
  margin:0px;
}
</style>
<body style="background:black;color:white;text-align:center;padding:100px">

  
  <p style="text-transform:uppercase;">
    
    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/Bedroom"> Bedroom &nbsp;&nbsp;&nbsp;&nbsp;</a>

    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/LIVING%20ROOM"> Living Room &nbsp;&nbsp;&nbsp;&nbsp;</a>

    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/DINING%20ROOM"> Dining room &nbsp;&nbsp;&nbsp;&nbsp;</a>

    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/FLOORING">  Flooring &nbsp;&nbsp;&nbsp;&nbsp;</a>


    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/BESPOKE">   BESPOKE &nbsp;&nbsp;&nbsp;&nbsp;</a>

     <a title="link" target="_blank"  href=" {{URL::to('')}} /main/LIGHTING">   LIGHTING &nbsp;&nbsp;&nbsp;&nbsp;</a>

     <a title="link" target="_blank"  href=" {{URL::to('')}} /main/MIRRORS">MIRRORS &nbsp;&nbsp;&nbsp;&nbsp;</a>
  </p>
  <hr>
  
<p class="MsoNormal"><span lang="EN-IN">&nbsp;</span></p>
<p class="MsoNormal"><span lang="EN-IN">&nbsp;</span></p>
<p class="MsoNormal" style="text-align: center;" align="center"><span style="color: #ff0000; font-size: 48pt;"><strong><span lang="EN-IN">YOUR ORDER IS PLACED!</span></strong></span></p>
<p class="MsoNormal"  style="text-align: left" ><span lang="EN-IN">Hi  {{$order->username}}</span></p>
<p class="MsoNormal"  style="text-align: left" ><span lang="EN-IN">&nbsp;</span></p>
<p class="MsoNormal"  style="text-align: left" ><span lang="EN-IN">Thanks for shopping with M. Kelly Interiors!</span></p>
<p class="MsoNormal"  style="text-align: left" ><span lang="EN-IN">&nbsp;</span></p>
<p class="MsoNormal"  style="text-align: left" ><span lang="EN-IN">We have received your order and will contact you when your order is confirmed.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
<p class="MsoNormal"  style="text-align: left" ><span lang="EN-IN">If any details within your order are incorrect, you can call us on 012851444 or you can contact us on email Sales@mkellyinteriors.ie</span></p>
<p class="MsoNormal"><span lang="EN-IN">&nbsp;</span></p>
<table class="MsoTableGrid" style="border: none;width:100%;" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 32.9pt;">
<td style="width: 426.35pt; border: solid white 1.0pt; mso-border-alt: solid white .5pt; padding: 0in 5.4pt 0in 5.4pt; height: 32.9pt;" valign="center" width="568">
<p class="MsoNormal" style="text-align:center;"><span lang="EN-IN">ORDER NO:</span>{{ $order->orderId }} </p>
</td>
</tr>

<?php

                       

?>
<tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 32.9pt;">
<td style="width: 426.35pt; border: solid white 1.0pt; mso-border-alt: solid white .5pt; padding: 0in 5.4pt 0in 5.4pt; height: 32.9pt;" valign="center" width="568">
<p class="MsoNormal" style="text-align:center;"><span lang="EN-IN">PAYMENT METHOD:</span>{{ $order->paymenttype }} </p>
</td>
</tr>
<tr style="mso-yfti-irow: 1; height: 34.9pt;">
<td style="width: 426.35pt; border: solid white 1.0pt; border-top: none; mso-border-top-alt: solid white .5pt; mso-border-alt: solid white .5pt; padding: 0in 5.4pt 0in 5.4pt; height: 34.9pt;" valign="center" width="568">
<p class="MsoNormal" style="text-align:center;"><span lang="EN-IN">NAME: {{ $order->username }} </span>  </p>
</td>
</tr>
<tr style="mso-yfti-irow: 2; mso-yfti-lastrow: yes; height: 32.9pt;">
<td style="width: 426.35pt; border: solid white 1.0pt; border-top: none; mso-border-top-alt: solid white .5pt; mso-border-alt: solid white .5pt; padding: 0in 5.4pt 0in 5.4pt; height: 32.9pt;" valign="center" width="568">
<p class="MsoNormal" style="text-align:center;"><span lang="EN-IN">EMAIL: {{ $order->useremail }} </span>  </p>
</td>
</tr>
</tbody>
</table>
<p class="MsoNormal"><span lang="EN-IN">&nbsp;</span></p>
<p class="MsoNormal"><span lang="EN-IN">Thank you for choosing M. Kelly Interiors!</span></p>
<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN">&nbsp;</span></p>
<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN">Please note that our delivery may differ during the festive period, go to mkellyinteriors.ie for more details! Note that you cannot reply to this email. If you want to contact us, please call on <strong>012851444 </strong>or send an email to <strong>sales@mkellyinteriors.ie</strong> For more information on your orders, please log into&nbsp;My Account on mkellyinteriors.ie. For more information regarding refunds and returns, please read our <u>return and refund policy.</u> For more information, please read our <u>Privacy Policy and Terms and Conditions.</u></span></p>
<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN">&nbsp;</span></p>
<hr>
<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN">&nbsp;</span></p>


<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN" style="font-size: 10.5pt; color: white; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Thank you for choosing M. Kelly Interiors. Keep visiting&nbsp;</span><span lang="EN-IN" style="font-size: 10.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">mkellyinteriors.ie </span><span lang="EN-IN" style="font-size: 10.5pt; color: white; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">for the new stock.</span></p>
<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN" style="font-size: 10.5pt; color: white; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</span></p>
<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN" style="font-size: 10.5pt; color: white; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Best Regards,</span><span lang="EN-IN" style="font-size: 10.5pt; color: white;"><br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;opacity:0.9">M. Kelly Interiors 61 Sallynoggin Rd Lower, Sallynoggin, Co. Dublin, A96HY72</span></span></p>
<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN" style="font-size: 10pt;"></span></p>

<p class="MsoNormal" style="text-align: center;" align="center"><span lang="EN-IN" style="font-size: 10pt;"></span></p>

</body>
</html>