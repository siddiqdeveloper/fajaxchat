<?php
use App\Option;
?>
 



<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
a{
  text-decoration:none;
  color:white;
}
.gt a{
  color:white !important;
}
</style>
<body style="background:black;color:white;text-align:center;padding:100px">

  
  <p>
    
    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/Bedroom"> Bedroom &nbsp;&nbsp;&nbsp;&nbsp;</a>

    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/LIVING%20ROOM"> Living Room &nbsp;&nbsp;&nbsp;&nbsp;</a>

    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/DINING%20ROOM"> Dining room &nbsp;&nbsp;&nbsp;&nbsp;</a>

    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/FLOORING">  Flooring &nbsp;&nbsp;&nbsp;&nbsp;</a>


    <a title="link" target="_blank"  href=" {{URL::to('')}} /main/BESPOKE">   BESPOKE &nbsp;&nbsp;&nbsp;&nbsp;</a>

     <a title="link" target="_blank"  href=" {{URL::to('')}} /main/LIGHTING">   LIGHTING &nbsp;&nbsp;&nbsp;&nbsp;</a>

     <a title="link" target="_blank"  href=" {{URL::to('')}} /main/MIRRORS">MIRRORS &nbsp;&nbsp;&nbsp;&nbsp;</a>
  </p>
  <hr>

<p class="MsoNormal" align="center" style="text-align:center"><b><span lang="EN-IN" style="font-size: 26pt;"><font color="#ff0000">WELCOME <o:p></o:p></font></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><span lang="EN-IN" style="font-size: 26pt;"><font color="#ff0000">TO <o:p></o:p></font></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><span lang="EN-IN" style="font-size: 26pt;"><font color="#ff0000">M. KELLY INTERIORS <o:p></o:p></font></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><span lang="EN-IN" style="font-size: 26pt;"><font color="#ff0000">SPIN &amp; WIN</font><o:p></o:p></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><u><span lang="EN-IN" style="font-size: 26pt;">________________________<o:p></o:p></span></u></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><i><span lang="EN-IN" style="font-size: 18pt;"><o:p>&nbsp;</o:p></span></i></b></p><p class="MsoNormal" align="center" style="text-align:center"><b><i><span lang="EN-IN" style="font-size: 16pt;">CONGRATULATIONS!<o:p></o:p></span></i></b></p><p style="line-height:15.0pt"><span lang="EN-IN" style="font-family: Helvetica;">You are now one of the supremely lucky few who can enjoy an extra
something from your shopping experience!<o:p></o:p></span></p><p style="line-height:15.0pt">


                    @if(Option::getvalue("spinnercouponvalue") != '')

                         <?php
                                    $couponcode = DB::table('couponcodes')->where('id',Option::getvalue("spinnercouponvalue"))->where('status','active')->first();
                                    //print_r($couponcode);
                                    ?>

                        @if($couponcode)
                 <span lang="EN-IN" style="font-family: Helvetica;">Here is your coupon for the win: {{ $couponcode->couponcode}} <o:p></o:p></span>
                       
                        @endif
                        @else
                          <span lang="EN-IN" style="font-family: Helvetica;">   {{Option::getvalue("spinnerdefaultmessage") }}<o:p></o:p></span>
            

                        @endif







</p><p style="line-height:15.0pt"><span lang="EN-IN" style="font-family: Helvetica;">&nbsp;</span></p><p style="line-height:15.0pt"><span lang="EN-IN" style="font-family: Helvetica;">Enjoy your win!<o:p></o:p></span></p><p align="center" style="text-align:center;line-height:15.0pt"><u><span lang="EN-IN" style="font-family: Helvetica;">Terms &amp; Conditions<o:p></o:p></span></u></p><p style="margin-left:.5in;text-indent:-.25in;line-height:15.0pt;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span lang="EN-IN" style="font-size: 10pt; font-family: Symbol;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-IN" style="font-size: 10pt;">Coupon is limited to single use
per customer<o:p></o:p></span></p><p style="margin-left:.5in;text-indent:-.25in;line-height:15.0pt;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span lang="EN-IN" style="font-size: 10pt; font-family: Symbol;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-IN" style="font-size: 10pt;">Discount may not apply if
qualifying items are not added to cart when coupon is in effect.<o:p></o:p></span></p><p style="margin-left:.5in;text-indent:-.25in;line-height:15.0pt;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span lang="EN-IN" style="font-size: 10pt; font-family: Symbol;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-IN" style="font-size: 10pt;">Shipping and handling charges
are applicable to all orders.<o:p></o:p></span></p><p style="margin-left:.5in;text-indent:-.25in;line-height:15.0pt;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span lang="EN-IN" style="font-size: 10pt; font-family: Symbol;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-IN" style="font-size: 10pt;">If items purchased with coupons
are retuned, coupon discount is subtracted from the return credit.<o:p></o:p></span></p><p class="MsoListParagraphCxSpFirst" style="text-indent:-.25in;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span lang="EN-IN" style="font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:
Symbol;mso-bidi-font-family:Symbol">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-IN" style="font-size: 10pt;">Should you face any trouble
using this promotion code or the payment process has been failed or been
interrupted before you have placed your order successfully, please contact M.
Kelly Interiors, </span><span lang="EN-IN" style="font-size:10.0pt">call on <b>012851444 </b>or send an email to </span><span lang="EN-IN"><a href="mailto:support@mkellyinteriors.ie"><b><span style="font-size:10.0pt">support@mkellyinteriors.ie</span></b></a></span><b><span lang="EN-IN" style="font-size:10.0pt"><o:p></o:p></span></b></p><p class="MsoListParagraphCxSpLast" style="text-indent:-.25in;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><span lang="EN-IN" style="font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:
Symbol;mso-bidi-font-family:Symbol">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-IN" style="font-size: 10pt;">Orders placed using this coupon
will be subject to Terms and Conditions of M. Kelly Interiors, found (Link for
terms and Conditions)</span><b><span lang="EN-IN" style="font-size:10.0pt"><o:p></o:p></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><span lang="EN-IN">&nbsp;</span></p><p class="MsoNormal" align="center" style="text-align:center"><span lang="EN-IN" style="font-size:11.0pt">For more information regarding refunds and returns,
please read our <u>return and refund policy.</u> For more information, please
read our <u>Privacy Policy and Terms and Conditions.<o:p></o:p></u></span></p><p class="MsoNormal" align="center" style="text-align:center"><b><span lang="EN-IN" style="font-size:11.0pt"><o:p>&nbsp;</o:p></span></b></p><p class="MsoNormal" align="center" style="text-align:center"><span lang="EN-IN" style="font-size: 11pt; color:white; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Thank you for choosing
M. Kelly Interiors. Keep visiting&nbsp;</span><span lang="EN-IN" style="font-size: 11pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">mkellyinteriors.ie
</span><span lang="EN-IN" style="font-size: 11pt; color:white; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">for
the new stock.<o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align:center"><span lang="EN-IN" style="font-size:11.0pt;color:white"><br>
<span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">M. Kelly Interiors<o:p></o:p></span></span></p><p class="MsoNormal" align="center" style="text-align:center"><span lang="EN-IN" style="font-size: 11pt; color:white; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal" align="center" style="text-align:center"><span lang="EN-IN" style="font-size: 11pt;">61 Sallynoggin Rd
Lower, Sallynoggin<o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align:center"><span lang="EN-IN" style="font-size: 11pt;">Co. Dublin, A96HY72<o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align:center">
</p><p class="MsoNormal"><span lang="EN-IN" style="font-size: 11pt;"><o:p>&nbsp;</o:p></span></p>
</body>
</html>