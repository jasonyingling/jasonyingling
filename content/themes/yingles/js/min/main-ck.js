jQuery(document).ready(function($){$("body").flowtype({minimum:500,maximum:1200,minFont:14,maxFont:28,fontRatio:50}),$(".expand_bio").click(function(a){$(this).hasClass("open")?($(".author_bio").slideUp(),$(".expand_bio").removeClass("open"),$(".expand_bio .fa").removeClass("fa-minus").addClass("fa-plus")):($(".author_bio").slideDown(),$(".expand_bio").addClass("open"),$(".expand_bio .fa").removeClass("fa-plus").addClass("fa-minus"))})});