<?php
error_reporting(0);
@ob_start();
include("dbnew.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hello World</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<linkrel="stylesheet"href="charity/css/A.bootstrap.min.css%2bfont-awesome.min.css%2belegant-fonts.css%2bthemify-icons.css%2bswiper.min.css%2cMcc.BgW-eGVxh5.css.pagespeed.cf.z1yXREZTTN.css" />
<link rel="stylesheet" href="A.style.css.pagespeed.cf.5NtMCPMuKO.css">
</head>
<body class="single-page contact-page">
<header class="site-header">
<div class="top-header-bar">
<div class="container">
<div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
<div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
</div>
</div>
</div>
</div>
<div class="nav-bar">
<div class="container">
<div class="row">
<div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
<div class="site-branding d-flex align-items-center">
<aclass="d-block"href="index.html"rel="home"><imgclass="d-block" src="charity/images/logo.jpg " alt="Image" height="60" width="70" ></a>
<div style="font-size:70%;color:#7a939e;font-family:helvetica"> Open hearts for orphans </div>
</div>
<nav class="site-navigation d-flex justify-content-end align-items-center">
<ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
<?php include("admenu.php");?>
</ul>
</nav>
<div class="hamburger-menu d-lg-none">
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>
</div>
</div>
</div>
</header>
<div class="page-header" >
<div class="container">
<div class="row">
<div class="col-12">  
<h1 style="font-size:300%;font-family:georgia">FOOD AND CLOTH WASTE COLLECTION SYSTEM</h1>
</div>
</div>
</div>
</div>
<div class="container" >
<div class="">
<div >
<style>
select {
 appearance: none;
outline: 0;
 background-image: none;
 width: 100%;
height: 100%;
color: black;
cursor: pointer;
border:1px solid black;
border-radius:3px;
}
.select {
      position: relative;
     display: block;
      width: 15em;
       height: 2em;
       line-height: 3;
       overflow: hidden;
        border-radius: .25em;
        padding-bottom:10px;
}
</style>
<br>
<h1 style="font-size:150%;margin-left:300px;font-family:georgia;color:#7a939e" >ADMIN LOGIN FORM</h1>
<div class="col-10" style="margin-top:30px" >
<div style="background-image:url(images/orphan2.jpg);background-size:cover;width:1000px;height:500px;margin-left:-20px">				
<form  method="post" class="login" style="margin-top:20px;margin-left:20px;width:1500px;height:500px">
<div  style="margin-left:50px">
 <br>
<p>EMAIL:<input type="text"  name="username"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"   required placeholder="Enter email id" style="margin-left:70px" > </p>
<p>PASSWORD:<input type="text" name="password" required placeholder="enter password" class="form-control" style="margin-left:25px"  > </p>
<p><input id="b1" type="submit" value="Login" name="login">	 
</p>
<?php
  if (isset($_POST['login'])) {
  $username = ($_POST['username']);
 $password = ($_POST['password']);
 $query = mysqli_query($db,"select * from admin where email='$username' and password='$password'") or die(mysqli_error());
 $count = mysqli_num_rows($query);
 $row = mysqli_fetch_array($query);
 if ($count == 1) {
session_start();
session_regenerate_id();
 $_SESSION['SESS_MEMBER_ID'] = $row['idngo'];
$_SESSION['SESS_MEMBER_EMAIL'] = $row['email'];
header('location:adminprofile.php');
session_write_close();
exit();
} else {
session_write_close();
?>
<div class="pull-right">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Login Email or Password Wrong</div>
</div>
<?php
exit();
}
}
?>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
error_reporting(0);
@ob_start();
include("dbnew.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hello World</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="charity/css/A.bootstrap.min.css%2bfont-awesome.min.css%2belegant-fonts.css%2bthemify-icons.css%2bswiper.min.css%2cMcc.BgW-eGVxh5.css.pagespeed.cf.z1yXREZTTN.css" />
<link rel="stylesheet" href="A.style.css.pagespeed.cf.5NtMCPMuKO.css">
</head>
<body class="single-page contact-page" >
<header class="site-header" >
<div class="top-header-bar">
<div class="container">
<div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
<div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
</div>
</div>
</div>
</div>
<div class="nav-bar"  >
<div class="container">
<div class="row">
<div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
<div class="site-branding d-flex align-items-center">
<a class="d-block" href="index.html" rel="home"><img class="d-block" src="charity/images/logo.jpg " alt="Image" height="60" width="70" ></a>
<div style="font-size:70%;color:#7a939e;font-family:helvetica"> Open hearts for orphans </div>
</div>
<nav class="site-navigation d-flex justify-content-end align-items-center">
<ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
<?php include("admenu.php");?>
</ul>
</nav>
<div class="hamburger-menu d-lg-none">
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>
</div>
</div>
</div>
</header>
<div class="page-header">
<div class="container">
<div class="row">
<div class="col-12">
<h1 style="font-size:300%;font-family:georgia">FOOD AND CLOTH WASTE COLLECTION SYSTEM</h1>
</div>
</div>
</div>
</div>
<div class="container" >
<div class="">
<div >
<style>
select {
appearance: none;
outline: 0;
background-image: none;
width: 100%;
height: 100%;
color: black;
cursor: pointer;
border:1px solid black;
border-radius:3px;
}
.select {
position: relative;
display: block;
width: 15em;
height: 2em;
line-height: 3;
overflow: hidden;
border-radius: .25em;
padding-bottom:10px;
}
</style>
<br>
<h1 style="font-size:150%;margin-left:300px;font-family:georgia;color:#7a939e" >Orphan Login Form</h1>
<div class="col-10" style="margin-top:30px" >
<div style="background-image:url(images/orphans.jpg);background-size:cover;width:1000px;height:500px;margin-left:-20px">
<form  method="post" class="login" style="margin-top:20px;margin-left:20px;width:1500px;height:500px">
<div  style="margin-left:50px">
<br>
<p>Email:<input type="text"  name="username"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"   required placeholder="ENTER Email Id" style="margin-left:50px"> </p>
<p>Password:<input type="text" name="password" required placeholder="ENTER" class="form-control" style="margin-left:20px"> </p>
<p><input id="b1" type="submit" value="Login" name="login">
</p>
<?php
if (isset($_POST['login'])) {
$username = ($_POST['username']);
$password = ($_POST['password']);
$query = mysqli_query($db,"select * from orphange where email='$username' and password='$password'") or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);
if ($count == 1) {
session_start();
session_regenerate_id();
$_SESSION['SESS_MEMBER_ID'] = $row['orphan_id'];
$_SESSION['SESS_MEMBER_EMAIL'] = $row['email'];
header('location:orpprofile.php');
session_write_close();
exit();
} else {
session_write_close();
?>
<div class="pull-right">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Login Email or Password Wrong</div>
</div>
<?php
exit();
}
}
?>
</form>
</div>
</div>
</div>
<script src='charity/js/jquery.js'></script>
<script>//<![CDATA[
/*!
* Collapsible.js v1.2.0
* https://github.com/jordnkr/collapsible
*
* Copyright 2017, Jordan Ruedy
* This content is released under the MIT license
* http://opensource.org/licenses/MIT
*/
!function(e,s){e.fn.collapsible=function(s){var n={accordion:!1,accordionUpSpeed:400,accordionDownSpeed:400,collapseSpeed:400,contentOpen:null,arrowRclass:"arrow-r",arrowDclass:"arrow-d",animate:!0},c=e.extend(n,s);return this.each(function(){!1===c.animate&&(c.accordionUpSpeed=0,c.accordionDownSpeed=0,c.collapseSpeed=0);var s=e(this).children(":even"),n=e(this).children(":odd"),r="accordion-active";if(e(this).children(":nth-child(even)").css("display","none"),!0===c.accordion)null!==c.contentOpen&&(e(s[c.contentOpen]).children(":first-child").toggleClass(c.arrowRclass+" "+c.arrowDclass),e(n[c.contentOpen]).show().addClass(r)),e(s).click(function(){e(this).next().attr("class")===r?(e(this).next().slideUp(c.accordionUpSpeed).removeClass(r),e(this).children(":first-child").toggleClass(c.arrowRclass+" "+c.arrowDclass)):(e(s).children().removeClass(c.arrowDclass).addClass(c.arrowRclass),e(n).slideUp(c.accordionUpSpeed).removeClass(r),e(this).next().slideDown(c.accordionDownSpeed).addClass(r),e(this).children(":first-child").toggleClass(c.arrowRclass+" "+c.arrowDclass))});else{if(null!==c.contentOpen)if(Array.isArray(c.contentOpen))for(var a=0;a<c.contentOpen.length;a++){var l=c.contentOpen[a];e(s[l]).children(":first-child").toggleClass(c.arrowRclass+" "+c.arrowDclass),e(n[l]).show()}else e(s[c.contentOpen]).children(":first-child").toggleClass(c.arrowRclass+" "+c.arrowDclass),e(n[c.contentOpen]).show();e(s).click(function(){e(this).children(":first-child").toggleClass(c.arrowRclass+" "+c.arrowDclass),e(this).next().slideToggle(c.collapseSpeed)})}})}}(jQuery);
//]]></script>
<script src='charity/js/swiper.min.js'></script>
<script src="charity/js/jquery.countdown.min.js%2bcircle-progress.min.js%2bjquery.countTo.min.js%2bjquery.barfiller.js%2bcustom.js.pagespeed.jc.kfJYmwuD8V.js"></script><script>eval(mod_pagespeed_rGIoo5eKqD);</script>
<script>eval(mod_pagespeed_s2h45vlwGd);</script>
<script>eval(mod_pagespeed_BodgmW9g8N);</script>
<script>eval(mod_pagespeed_eZZMgltAKL);</script>
<script>eval(mod_pagespeed_4Q30taEYkh);</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"67e8a4005fe152c8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.0","si":10}'></script>
</body>
<!-- Mirrored from preview.colorlib.com/theme/thecharity/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 07:59:20 GMT -->
</html>
<?php
error_reporting(0);
@ob_start();
include("dbnew.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hello World</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="charity/css/A.bootstrap.min.css%2bfont-awesome.min.css%2belegant-fonts.css%2bthemify-icons.css%2bswiper.min.css%2cMcc.BgW-eGVxh5.css.pagespeed.cf.z1yXREZTTN.css" />
<link rel="stylesheet" href="A.style.css.pagespeed.cf.5NtMCPMuKO.css">
</head>
<body class="single-page contact-page">
<header class="site-header">
<div class="top-header-bar">
<div class="container">
<div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
<div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
</div>
</div>
</div>
</div>
<div class="nav-bar">
<div class="container">
<div class="row">
<div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
<div class="site-branding d-flex align-items-center">
<a class="d-block" href="index.html" rel="home"><img class="d-block" src="charity/images/xlogo.png.pagespeed.ic.jje9n1Rfdy.png" alt="logo"></a>
</div>
<nav class="site-navigation d-flex justify-content-end align-items-center">
<ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
<?php include("admenu.php");?>
</ul>
</nav>
<div class="hamburger-menu d-lg-none">
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>
</div>
</div>
</div>
</header>
<div class="page-header">
<div class="container">
<div class="row">
<div class="col-12">
<h1 style="font-size:300%;font-family:georgia">FOOD AND CLOTH WASTE COLLECTION SYSTEM</h1>
</div>
</div>
</div>
</div>
<div class="container">
<div class="">
<div >
<style>
select {
appearance: none;
outline: 0;
background-image: none;
width: 100%;
height: 100%;
color: black;
cursor: pointer;
border:1px solid black;
border-radius:3px;
}
.select {
position: relative;
display: block;
width: 15em;
height: 2em;
line-height: 3;
overflow: hidden;
border-radius: .25em;
padding-bottom:10px;
}
</style>
<br>
<h1 style="font-size:150%;margin-left:300px;font-family:georgia;color:#7a939e">Restaurant Login Form</h1>
<div class="col-10" style="margin-top:30px" >
<div style="background-image:url(images/food.jpg);background-size:cover;width:1000px;height:500px;margin-left:-20px">
<form  method="post" class="login" style="margin-top:20px;margin-left:20px;width:1500px;height:500px">
<div  style="margin-left:50px">.
<br>
<p>Email:<input type="text"  name="username"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"   required placeholder="ENTER Email Id" style="margin-left:60px"></p>
<p>Password:<input type="text" name="password" required placeholder="ENTER" class="form-control" style="margin-left:30px" > </p>
<p><input id="b1" type="submit" value="Login" name="login">
</p>
<?php
if (isset($_POST['login'])) {
$username = ($_POST['username']);
$password = ($_POST['password']);
$query = mysqli_query($db,"select * from restuarant where email='$username' and password='$password'") or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);
if ($count == 1) {
session_start();
session_regenerate_id();
$_SESSION['SESS_MEMBER_ID'] = $row['idres'];
$_SESSION['SESS_MEMBER_EMAIL'] = $row['email'];
header('location:resprofile.php');
session_write_close();
exit();
} else {
session_write_close();
?>
<div class="pull-right">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Login Email or Password Wrong</div>
</div>
<?php
}
}
?>
</form>
</div>
</div>

