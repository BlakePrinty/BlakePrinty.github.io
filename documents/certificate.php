<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" id="html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
function back_to_login() {
	$("#whole_page").animate({opacity:0},500);
	setTimeout(function() { 
		window.location.href = "?"
	}, 500)
}
function checkSubmit(e) {
   if (e && e.keyCode == 13) {
      student_login();
   }
}
$(window).load(function() {
	$("#background").css({opacity:0,display:'block'});
	$("#container").css({opacity:0,display:''});
	$("#background").animate({opacity:1},1000);
	setTimeout(function() {
		$("#body").css({background:'#fff'});
		$("#container").animate({opacity:1},750);
	}, 1500);
});
</script>
<title>We Can Code IT Student Portal</title>
<link rel="icon" href="https://wcci.polischool.net/admin/attachments/images/favicon.png" type="image/x-icon">
<script type="text/javascript">if (top.location!= self.location) {top.location = self.location.href} var firstname = '';</script>
<script src="https://d2efu6r0ksnao4.cloudfront.net/js/poliPORTAL.js?v=2022.1043" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,500,700" rel="stylesheet">
<style>
html, body {
	height: auto;
	min-height:100%;
	margin:0;
	font-family: 'Lato', sans-serif;
}
body {
	background:#f4f4f4 url(https://d2efu6r0ksnao4.cloudfront.net/images/ps-white-watermark.png) center center no-repeat;
}
a, a:visited {
	text-decoration:underline !important;
	font-weight:700;
	color:#777 !important;
}
a:hover {
	text-decoration:none !important;
}
	
h1, h2, h3 {
	font-weight:300;
}
#background {
	display:none;
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:fixed;
	z-index:1;
 	background: #fff url(admin/attachments/images/login/career-day.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
#overlayAll {
	position:fixed;
	top:0;
	left:0;
	bottom:0;
	right:0;
	z-index:10000;
	background: rgba(72,91,106,0.6);
	background-image: url(images/ps-white-watermark.png);
	background-position:49.5% 100%;
	background-repeat:no-repeat;
	width:100%;
	height:100%;
	text-align:center;
	color:#333;
	display:none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
#container {
	position:relative;
	z-index:2;
	margin-top:180px;
	width:100%;
	min-width:750px;
}
#content {
	min-height:180px;
	padding:0;
	background:none;
}
#siteName{
	position:absolute;
	height:50px;overflow:visible;
	left:10px;
	width:99%;
		font-size:24px;
	top:-100px;
		min-width:750px;
	text-align:center;
	color:#777;
}
.loginTable {
	margin:0 auto;
	width:33%;
	min-width:350px;
	max-width:450px;
	background:rgba(255,255,255,0.4);
	border:1px solid #fff;
	border-radius: 25px;
	-moz-box-shadow: 0px 0px 35px -10px rgba(170,170,170,0.5);
	-webkit-box-shadow: 0px 0px 35px -10px rgba(170,170,170,0.5);
	box-shadow: 0px 0px 35px -10px rgba(170,170,170,0.5);
}
#version {
	margin:30px auto 0 auto;
	width:33%;
	min-width:280px;
	text-align:center;
}
#powered {
	position:fixed;
	bottom:5px;
	width:100%;
	text-align:center;
	font-size:10px;
	color:#999;
	background:none;
	z-index:999;
}

.buttonBlue {
	background:#06C;
	background: #007CDA;
	border:1px solid #999;
	padding: 3px 4px 3px 3px;
	cursor:pointer;
	color:#FFF;
	font-weight:500;
	text-align:center;
	font-size:35px;
	max-width:300px;
	min-width:200px;
	width:100%;
	margin:0 auto;
	-webkit-transition: all 0.3s ease-out;
	-moz-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	ms-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
}
.buttonBlue:hover {
	background:#5C875C;
}

.field {
	padding:3px;
	border:none;
	border:1px solid #ccc;
	color:#555;
	max-width:300px;
	min-width:200px;
	width:100%;
	background:#fff;
	font-size:35px;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.field:focus, field:active {
	color:#555;
	background:rgba(250,250,250,0.5);
	border-color:#888;
}

::-webkit-input-placeholder { 
   color: rgba(120,120,120,0.4);
}

:-moz-placeholder { 
    color: rgba(120,120,120,0.4);
}

::-moz-placeholder { 
    color: rgba(12,120,120,0.4);
}

:-ms-input-placeholder {  
   color: rgba(120,120,120,0.4); 
}


.floatRight {
	float:right;
}
.floatLeft {
	float:left;
}
.small {
	font-size:14px;
}
.medium {
	font-size:16px;
}
.blue {
	color:#069;
}
.red {
	color:#C30;
}
.pointer {
	cursor:pointer;
}

.loginOpts {
	width:102%;
	max-width:307px;
	margin:0 auto;
	padding-top:20px;
	
}
@media screen and (max-width: 770px) {
	.medium, body, .buttonBlue {
		font-size:1.3em;
	}
	.small {
		font-size:1.2em;
	}
	h1 { font-size:1em;}
	
	#container {
		margin-top:20%;
		width:100%;
		min-width:100%;
		padding:0;
	}
	#content {
		min-height:80px;
		margin:0 auto;
	}
	.loginTable {
		width:75%;
		max-width:75%;
	}
	#siteName{
		min-width:100%;
		top:-55px;
		padding:0;
		left:0;
			}
	#powered {
		display:none;
	}
	.loginTable {
		width:60%;
		margin:0 auto;
	}
	.field, .buttonBlue {
		width:90%;
		max-width:90%;
		margin: 0 auto;
		font-size:36px;
	}
	.loginOpts {
		width:90%;
		max-width:90%;
	}
	
}
@media screen and (max-width: 731px) and (orientation:landscape) {
	#container {
		margin-top:30px;
	}
	.loginTable {
		width:90%;
		margin:0 auto;
		font-size:15px;
	}
	#siteName{	
		top:-35px;
		font-size:16px;
	}
}
@media screen and (max-width: 520px) {
	.medium, body, .field, .buttonBlue {
		font-size:1.5em;
	}
	h1 { font-size:1.8em;}
	#siteName{	
		top:-80px;
				font-size:15px;
	}
	.loginTable {
		width:50%;
		margin:10px auto;
		font-size:20px;
		min-width:300px;
	}
	.field, .buttonBlue {
		width:90%;
		max-width:90%;
	}
}
</style>
<body id="body">
<div id="background">
<div id = "powered"><div style="text-align:center;font-size:11px;margin:5px auto 5px auto;">powered by poliSCHOOL&reg;<br>copyright &copy; 2014-2022 poliARC, LLC. All rights reserved.</div>
</div>
</div>
<div id="verifying" style="position:fixed;width:100%;padding:0;top:30%;left:0;display:none;z-index:999999;font-size:35px;text-align:center;color:#FFF;"></div>
<div class="loading" id="overlayAll">
  <div id="overlayInsert" style="margin:30px auto;"></div>
</div>
<div id="container" style="display:none;">
  <div id = "padder">
    <div id="siteName">
      <h1>WeCanCodeIT Portal</h1>
    </div>
    <div id = "content">
            <form id="liform" name="liform" method="POST" onKeyPress="checkSubmit(event)">
      <div class="loginTable">
        <table border="0" align="center" cellpadding="1" cellspacing="1" width="100%">
         <tr>
            <td align="center" style="padding:10px 10px 15px 10px;"><span class="small" style="color:#616669;">APPLICANT, STUDENT &amp; ALUMNI LOGIN</span>
			 </td>
          </tr>
          <tr>
            <td align="center">
				<input name="u" type="text" class="field" id="u" value=""  placeholder="ID number" autocapitalize="off" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><input name="the_thing" type="password" class="field" id="the_thing" placeholder="password"/></td>
          </tr>
          <tr>
            <td><input name="goto" type="hidden" id="goto" value="" />
              <input name="t" type="hidden" id="t" value="bAniUy37d1zM1GR6yj4F3pkpfDWnK3gXsJm95o8p" />
              &nbsp;</td>
          </tr>
          <tr>
            <td><div class="buttonBlue" onclick="student_login()">LOG IN</div></td>
          </tr>
		
          <tr>
            <td><div class="loginOpts">
                <div class="floatLeft alignleft"><a href="?op=retrieve&amp;override=">reset password</a></div>
                <div class="floatRight alignright"><a href="https://wecancodeit.org">website</a></div>
              </div></td>
          </tr>
          <tr>
            <td align="center">&nbsp;
           
            </td>
          </tr>
          <tr>
            <td align="center"> <a href="https://polischool.net/tos/" target="_blank" style="font-size:13px;font-weight:bold;">By logging in, you agree to<br />the poliSCHOOL Terms of Service</a></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
        </table>
</div>
      </form>
          </div>
  </div>
  <!-- end content --> 
</div>
</div>
<!-- end padder -->
</div>
<!-- end container -->
</body>
</html>
<script>
function resetEmail() {
	if ($("#username").val() == '') {
		alert("Please enter your student ID.");
		return false;
	}
	$("#username").css({opacity:0.2});
	$("#retrieve2").css({display:'none'});
	$("#sending_reset").css({display:'block'});
	$("#retrieve").submit();
}
</script>