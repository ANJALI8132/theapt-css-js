<?php
error_reporting(0);
if(isset($_POST['submit']) and !empty($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $companyname=$_POST['companyname'];
    $phonenumber=$_POST['phonenumber'];
    $emailid=$_POST['emailid'];
    $message=$_POST['message'];
    $response = $_POST["g-recaptcha-response"];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
                        $data = array(
                        'secret' => '6LeF-fwUAAAAAD4MJCHNzTpGHm2U7YYPTqQE-lS8',
                        'response' => $_POST["g-recaptcha-response"]
                        );
                        $options = array(
                        'http' => array (
                        'method' => 'POST',
                        'content' => http_build_query($data)
                            )
                        );
                        $context  = stream_context_create($options);
                        $verify = file_get_contents($url, false, $context);
                        $captcha_success=json_decode($verify);

                if ($captcha_success->success==true) {

    $to = "aisha.TAD@outlook.com, suneshkrishnan@gmail.com, cyril.viralmafia@gmail.com";

    $mail1_subject="APT Digital Website Contact Enquiry : " . $firstname;
    $mail1_txt="First Name :" . $firstname . "<br>" . "Last Name :" . $lastname . "<br>" . "Company Name :" . $companyname . "<br>" . "Mobile :" . $phonenumber . "<br>" . "E-Mail :" . $emailid . "<br>" . "Message :" . $message . "<br>";

    $mail2_subject="Thank You, " . $firstname;
    $mail2_txt=$name .", We are receiveing your enquiry. We contact soon thank you!!";


// More headers
$headers .= 'From: <aisha.TAD@outlook.com>' . "\r\n";

    $url = 'http://viralmafia.com/demo/jsonmailerapt.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:contact.php");
    }

}

}


?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>APT Digital - Marketing Agency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="images/favicon.ico">
	<link href="css/pace-inner.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/linea-arrows.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="revolution/css/settings.css" />
    <link rel="stylesheet" href="css/rev-slider.css" />

    <link href="css/panelmenu.css" rel="stylesheet">
	
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TDWMNRV');</script>
<!-- End Google Tag Manager -->


</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDWMNRV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ed4d8b3c75cbf1769f13747/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


    <div class="body_wraper">
<?php 

include 'header-contact.php'?>

<section>
<div class="inner_bannersec" style="background:url(images/bg4.jpg) no-repeat center; background-size:cover">
<div class="container">
    <div class="row inr_bnr_align">
        <div class="col-lg-6">
<div class="inner_bnr_title">
<h3>Let’s discuss how we can add value to your business</h3>
</div>
        </div>
    </div>  
</div>
</div>
</section>

<section>
<div class="contact_page" >
<div class="contact_detail_sec">
<div class="container">
<div class="row">
<div class="col-12">
<div class="contact_ifo_title iner_comentitle wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
<h3><span>We are here to help you!</span> Contact Details</h3>
</div>
</div>

<div class="col-lg-4 display_flex">
<div class="contact_box">
<div class="contact_box_in">
<div class="cbox_icon">
<img src="images/map.svg">
</div>
<h4>Address</h4>
<p>Level 35, Al Saqr Business Tower,<br> Sheikh Zayed Road, Dubai, UAE.</p>
</div>
</div>
</div>

<div class="col-lg-4 display_flex">
<div class="contact_box">
<div class="contact_box_in">
<div class="cbox_icon">
<img src="images/phone-incoming.svg">
</div>
<h4>Phone Number</h4>
<a href="tel:+971503198582"> +971 50 319 8582</a>
</div>
</div>
</div>

<div class="col-lg-4 display_flex">
<div class="contact_box">
<div class="contact_box_in">
<div class="cbox_icon">
<img src="images/mail.svg">
</div>
<h4>Email Address</h4>
<a href="mailto:info@theaptdigital.com">info@theaptdigital.com</a>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
function ValidateNo() {
  var phoneNo = document.getElementById('phone');
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
    return false;
  }
  return true;
}
</script>

<div class="contact_quote" id="quoteid">
<div class="container">
<div class="iner_comentitle wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
<h3>Request a Quotation</h3>
</div>
<form method="post" name="form1">
<div class="row">
<div class="col-lg-6">
<div class="quote_inputs">
<input class="form_icon_name" placeholder="First Name *" type="text" name="firstname" required>
</div>
</div>
<div class="col-lg-6">
<div class="quote_inputs ">
<input class="form_icon_name" placeholder="Last Name *" type="text" name="lastname" required>
</div>
</div>
<div class="col-lg-12">
<div class="quote_inputs ">
<input class="form_input_icon_compname" placeholder="Company Name *" type="text" name="companyname" required>
</div>
</div>
<div class="col-lg-6">
<div class="quote_inputs ">
<input class="form_icon_phone" placeholder="Phone Number *" type="number" name="phonenumber" id="phone" required>
</div>
</div>
<div class="col-lg-6">
<div class="quote_inputs ">
<input class="form_icon_email" placeholder="Email Address *" type="email" name="emailid" required>
</div>
</div>
<div class="col-lg-12">
<div class="quote_inputs">
<textarea class="form_message_icon" placeholder="Message" name="message"></textarea>
</div>
</div>

<div class="col-12">
<div class="captcha_sec">
<center><div class="g-recaptcha" data-sitekey="6LeF-fwUAAAAAEx3eXCZm1BJP2isVPhHVChvBhmW"></div></center>
</div>
<div class="quote_sbmit">
<input type="submit" value="Submit" name="submit" onclick="ValidateNo();">
</div>
</div>

</div>
</form>
</div>
</div>

<div class="map_sec">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.840216124037!2d55.274000014327626!3d25.20861043742498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f428f17a309e5%3A0xd469064f854aa001!2sEmirates%20Financial%20Towers%20DIFC!5e0!3m2!1sen!2sin!4v1590993793188!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

</div>
</section>


<?php 

include 'footer.php'?>

 </div> <!-- bodywrapper -->


    


    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/stickynew.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/custom.js"></script> 
	
	<script src="js/pace.min-inner.js"></script>
    <script src="js/loader.js"></script>

    <script src="js/panelmenu.js"></script>
    <script src="js/main.js"></script>

    <script src="js/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
 		
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW(
            {
                animateClass: 'animated',
                offset: 100,
                callback: function (box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
        );
        wow.init();
        document.getElementById('moar').onclick = function () {
            var section = document.createElement('section');
            section.className = 'section--purple wow fadeInDown';
            this.parentNode.insertBefore(section, this);
        };
    </script>

    <script src="js/totop.js"></script>
    <script>
        $('.totop').tottTop({
            scrollTop: 100
        });
    </script>

</body>

</html>