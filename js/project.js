jQuery(document).ready(function(){
  jQuery(".filter-item").on("click",function(){
    if (!jQuery(this).parent().hasClass("active-tag")) {
      jQuery(this).next().slideDown();
      jQuery(".active-tag").find(".filter-block").slideUp();
      jQuery(".active-tag").removeClass("active-tag");
      jQuery(this).parent().addClass("active-tag");
    }else{
      jQuery(this).next().slideUp();
      jQuery(this).parent().removeClass("active-tag");
    }
  });
  jQuery(".filter-block-item").on("click",function(){
    jQuery(this).toggleClass("filter-selected");
    var count = jQuery(this).parent().find(".filter-selected").length;
    if (count == 0) {
      jQuery(this).parent().parent().find(".filter-count").hide();
    }else if(count > 0){
      jQuery(this).parent().parent().find(".filter-count").text(count);
      jQuery(this).parent().parent().find(".filter-count").show();
    }
  });
  jQuery(".clear-filter").on("click",function(){
    jQuery(".filter-selected").removeClass("filter-selected");
     jQuery(".filter-count").hide();
  });
  
});