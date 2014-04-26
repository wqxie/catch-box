jQuery(document).ready(function(){
  var rand = Math.ceil(Math.random()*3); 
  console.log(rand);

  var src_string = jQuery("#home-pic")[0].src;
  console.log(src_string);
  var index = src_string.length-5;
  src_string = src_string.substr(0,index)+rand+src_string.substr(index+1);
  jQuery("#home-pic").attr('src',src_string);
  jQuery("#home-pic").fadeTo(2000,1);
});