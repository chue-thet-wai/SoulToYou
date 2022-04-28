$(document).ready(function() {
    $(".mainright-navbar > li > a").click(function (e) {
          $("mainright-navbar > li").removeClass("active");  
          $(this).addClass("active");
      });
});