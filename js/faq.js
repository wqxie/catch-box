jQuery(document).ready(function(){
  console.log("i am in");
  jQuery('.faq .faq1').click(function(){
			jQuery(this).next().slideToggle();
		});	
		jQuery('.faq .faq3').click(function(){
			jQuery(this).next().slideToggle();
		});	
		jQuery('.commonissue .faq3').click(function(){
			jQuery(this).next().slideToggle();
		});	
    var availableTags = [
      { "value": 1, "label": "1.Lorem ipsum dolor sit amet, consectetur adipiscing first?" }, 
     { "value": 2, "label": "2.Lorem ipsum dolor sit amet, consectetur adipiscing second?" },
     { "value": 3, "label": "3.Lorem ipsum dolor sit amet, consectetur adipiscing third?" }, 
     { "value": 4, "label": "1.Lorem ipsum dolor sit amet, consectetur adipiscing fourth?"},
     { "value": 5, "label": "2.Lorem ipsum dolor sit amet, consectetur adipiscing fifth?" }, 
     { "value": 6, "label": "3.Lorem ipsum dolor sit amet, consectetur adipiscing sixth?" } 
    ];
    jQuery( "#tags" )
    .autocomplete({
      source: availableTags,
      focus: function (event, ui) {
        event.preventDefault();
        jQuery("#tags").val(ui.item.label);
    },
      select: function (event, ui){
		console.log(ui.item.value);
        jQuery("#tags").val(ui.item.label);
        var search = ui.item.value;
        jQuery('.faq .faq4').slideUp();
        jQuery('.faq .faq2').slideUp();
        if(search <4){
        	jQuery('#slide1').slideDown();
        	jQuery('#slide1'+search).next().slideDown();
        }else{
        	jQuery('#slide2').slideDown();
        	jQuery('#slide2'+(search-3)).next().slideDown();
        }
        return false;

}
    });
});