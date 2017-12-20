<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>

<link href="assets/css/style_signup.css" rel="stylesheet">

</head>

<body>

<!-- multistep form -->
<form id="msform">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active"></li>
		<li></li>
		<li></li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h1 class="fs-title">Create Your Account</h1>
        <br>
        <br>
		<input type="text" name="email" placeholder="Email" id="email" />
		<input type="password" name="pass" placeholder="Password" id="password"/>
		<input type="password" name="cpass" placeholder="Confirm Password" />
		<input type="button" name="next" class="next action-button" value="Confirm Email" />
	</fieldset>
	<fieldset>
		<input type="text" name="name" placeholder="Name" />

		<input type="text" name="gender" placeholder="Gender">
        </input>
		<input type="text" name="school" placeholder="School" />
        <input type="text" name="major" placeholder="Major" />
        <input type="text" name="current_year" placeholder="Current Year" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Create Your Short Description</h2>
        <br>
        <br>
		<textarea name="intro" placeholder="Welcome to my Ulique."></textarea>
		<input type="button" name="submit" class="submit action-button" value="Get Start" />
	</fieldset>
</form>



<script type="text/javascript" src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script><script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-messaging.js"></script>
<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="assets/js/signup.js"></script>
</body>
</html>