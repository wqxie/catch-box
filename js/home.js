function fade(a){
	var rand = Math.ceil(Math.random()*3); 
	var src_string = a.src;
	var index = src_string.length-5;
	src_string = src_string.substr(0,index)+rand+src_string.substr(index+1);
	var tag ='<img id="home-pic" src="'+src_string+'">';
	a.remove();
	jQuery("#home-div").append(tag);
	jQuery("#home-pic").ready(function(){
		jQuery("#home-pic").fadeTo(1000,1);
	});

 
};