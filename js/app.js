// JavaScript Document
( function() {  
  			var config = {
    			apiKey: "AIzaSyADHzQUC_rNnfXo8kRDBcyfZ3nZkvecQj4",
    			authDomain: "myschoolapp-c830d.firebaseapp.com",
    			databaseURL: "https://myschoolapp-c830d.firebaseio.com",
    			projectId: "myschoolapp-c830d",
    			storageBucket: "myschoolapp-c830d.appspot.com",
    			messagingSenderId: "414822311416"
  			};
			
			var stid = getCookie('email');
		
			console.log(stid);
			
			firebase.initializeApp(config);
			
			const preObject = document.getElementById('name');
			const des = document.getElementById('des');
			const ulList = document.getElementById('list');
			
			const dbRefObject = firebase.database().ref().child('Student').child(stid);
				
			dbRefObject.child('Name').on('value', snap => {console.log(snap.val()); preObject.innerText=snap.val()});
			
			dbRefObject.child('Intro').on('value', snap => {console.log(snap.val()); des.innerText=snap.val()});
			
			function getCookie(name)        
			{
				var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
				 if(arr != null) return unescape(arr[2]); return null;
			
			}
			function delCookie(name)
			{
				var exp = new Date();
				exp.setTime(exp.getTime() - 1);
				var cval=getCookie(name);
				if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
			}
}());