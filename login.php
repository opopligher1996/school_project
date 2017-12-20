<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
<link href="assets/css/style_login.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		<form class="form">
			<input type="text" placeholder="Username" id="login-email" name="login-email" value="cltsuiab@connect.ust.hk">
			<input type="password" placeholder="Password" id="login-password" name="login-password" value="tune461dig100">
			<button type="button" id="login-button" name="login-button" onClick="Login()">Login</button>
		</form>
        
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
    
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script><script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-messaging.js"></script>
<script type="text/javascript">
  var config = {
    apiKey: "AIzaSyADHzQUC_rNnfXo8kRDBcyfZ3nZkvecQj4",
    authDomain: "myschoolapp-c830d.firebaseapp.com",
    databaseURL: "https://myschoolapp-c830d.firebaseio.com",
    projectId: "myschoolapp-c830d",
    storageBucket: "myschoolapp-c830d.appspot.com",
    messagingSenderId: "414822311416"
  };
  firebase.initializeApp(config);
  function Login(){
	console.log('hi');  
	window.location.href="index.php"
  }
  
	function Login() {
        var email = $("#login-email").val();
        var password = $("#login-password").val();
		firebase.auth().signInWithEmailAndPassword(email, password).then(function				        (){
			console.log("Success,success");
			//delCookie('email');
			var pos = email.indexOf("@");
			SetCookie('email',email.substring(0, pos));
			window.location.href = "profile.php";
		}).catch(function(error) {
			console.log("Error","Error");
  			var errorCode = error.code;
  			var errorMessage = error.message;
  // ...
		});
		
		function SetCookie(name,value)//两个参数，一个是cookie的名子，一个是值
		{
			var Days = 30; //此 cookie 将被保存 30 天
			var exp  = new Date();    //new Date("December 31, 9998");
			console.log('1');
			exp.setTime(exp.getTime() + Days*24*60*60*1000);
			console.log('2');
			document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
			return;
		}
		
		function delCookie(name)
		{
			var exp = new Date();
			exp.setTime(exp.getTime() - 1);
			var cval=getCookie(name);
			if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
			return;
		}
	}
</script>
</div>
</body>
</html>