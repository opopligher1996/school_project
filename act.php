<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="assets/css/style_act.css" rel="stylesheet"> 
<link href="assets/css/style_card.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="assets/css/style_card.css">
<title>無標題文件</title>
<script type="text/javascript" src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
<script src="http://www.gstatic.com/firebasejs/live/3.1/firebase.js"> </script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="https://masonry.desandro.com/jquery.masonry.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="assets/js/act.js"></script>
<script src="assets/js/act_1.js"></script>
<style>
.content_box{
	display: inline-block;
	padding: 5px;
	margin: 5px 5px 5px 0;
	overflow:hidden;
	width:250px;
	border: 0px solid #e6e6e6;
  	background-color: white;
  	box-shadow: 0px -1px 2px rgba(58, 58, 58, 0.1), 1px 1px 2px rgba(58, 58, 58, 0.1);
}
</style>
</head>

<body>



<div id="test">
    <div class="toolbar">
        <div class="toolbar-section">
          <span class="logo toolbar-item"><i class="fa fa-picture-o"></i>ContentGrid</span>
        </div><!-- /.toolbar-section -->
        <div class="toolbar-section">
          <div class="toolbar-item form-field">
            <input type="text" name="filter" placeholder="phrase to filter" ng-model="search"/>
          </div>
        </div><!-- /.toolbar-section -->
    </div><!-- /.toolbar -->
    
    
	<div id="_container" class="content_style">         
     
	 <script>
	 		var act_id = [];
	 		var act_date = [];
			var act_holder = [];
			var act_intro = [];
			var act_joined = [];
			var act_month = [];
			var act_name = [];
			var act_no_std = [];
			var act_place = [];
			var act_rate = [];
			var act_type = [];
			var act_year = [];
			
			
            var config = {
    			apiKey: "AIzaSyADHzQUC_rNnfXo8kRDBcyfZ3nZkvecQj4",
    			authDomain: "myschoolapp-c830d.firebaseapp.com",
    			databaseURL: "https://myschoolapp-c830d.firebaseio.com",
    			projectId: "myschoolapp-c830d",
    			storageBucket: "myschoolapp-c830d.appspot.com",
    			messagingSenderId: "414822311416"
  			};
			
			firebase.initializeApp(config);
			const dbRefObject = firebase.database().ref().child('Activity');
			
			
			dbRefObject.once('value',snap => {
			   
			    snap.forEach(function(data) {
					act_id.push(data.key);
					act_name.push(data.val().Name);
    			});
			}).then(function(result) {
				
				var $container = $('#_container');
 				for(i=0; i<5;i++)
				{
					console.log(act_id);
					console.log("enter the loop");
					var src = 'product-10.jpg';
					var $boxes = $('<div class="blog-card spring-fever">'+'<div class="color-overlay">'+'</div>'+'</div>');
					<!--var $boxes = $('<div class="content_box">'+'<img class="content-box-thumb" src=\'assets/images/shop/'+src+'\' alt="tech image"/><h1 class="content-box-header">'+act_id[i]+';</h1><p class="content-box-blurb">Intro</p><a class="readmore-link" href="#" ng-click="toggleBlurb($event)">read more</a>'+'</div>');
					-->
					
					$('#_container').append( $boxes ).masonry('appended', $boxes,true);
				}
			});
			

	 </script>
	</div>
    
    </div>
    


  <div class="blog-card spring-fever">
      <div class="title-content">
        <h3><a href="#">10 inspiring photos</a></h3>
        <div class="intro"> <a href="#">Inspiration</a> </div>
      </div>
      <div class="card-info">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim... 
        <a href="#">Read Article<span class="licon icon-arr icon-black"></span></a>
      </div>
      <div class="utility-info">
        <ul class="utility-list">
          <li><span class="licon icon-like"></span><a href="#">2</a></li>
          <li><span class="licon icon-com"></span><a href="#">12</a></li>
          <li><span class="licon icon-dat"></span>03 jun 2017</li>
          <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
        </ul>
      </div>
      <div class="gradient-overlay"></div>
      <div class="color-overlay"></div>
    </div><!-- /.blog-card -->


</body>
</html>