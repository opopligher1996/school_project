// JavaScript Document
$(function(){  
    $('#_container').scroll(function(){
		console.log('load');
        var scrollTop = $(this).scrollTop();
        var height = $(this).height();
        var scrollHeight = $(this)[0].scrollHeight;
        if(scrollTop + height >= scrollHeight){//关键
            
			
			var act_id = [];
			var act_name = [];
			var act_date = [];
			var act_holder = [];
			var act_intro = [];
			var act_joined = [];
			var act_no_std = [];
			const dbRefObject = firebase.database().ref().child('Activity');
			dbRefObject.on('value', snap => {
			    snap.forEach(function(data) {
					act_id.push(data.key);
					act_name.push(data.val().Name);
					act_intro.push(data.val().Intro);
    			});
				
				console.log(act_id[0]);
				console.log(act_name[0]);
				
			});
			

			
        }
    })
});