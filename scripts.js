(function($){

$(document).ready(function(){
	
	$(".unit .title").on('keyup', function() {		 
		if ( ( $(".unit .title div").length ) || ( $('.unit .title br').length ) ) {
			$(".unit").removeClass('single-line').addClass('multi-line');
		} else {
			$(".unit").removeClass('multi-line').addClass('single-line');
		}
	});

	$('.controls input[type=checkbox]').on('click', function() {
		 var control = $(this).data("line");
		 $(this).closest('dl').toggleClass('checked unchecked');
		 $(".signature").toggleClass('has-'+control);
	});
	
	$('#select-prefix select').on('keyup change', function() {
		 var prefix = $(this).val();
		 if (prefix != "none") {
			 var prefix_id = $(this).children(":selected").attr("id");
			 $('.signature .prefix').removeClass('blank').addClass(prefix_id).empty().append(prefix);
		 } else {
			$('.signature .prefix').addClass('blank').removeClass(function (index, css) {
			    return (css.match (/(^|\s)ca-\S+/g) || []).join(' ');
			}); 
		 };
	});
	
	$('#select-college select').on('change', function() {
		 var college = $(this).val();
		 if (college != "none") {
			 var college_id = $(this).children(":selected").attr("id");
			 $('.signature .college').removeClass('blank').addClass(college_id).empty().append(college);
		 } else {
			$('.signature .college').addClass('blank').removeClass(function (index, css) {
			    return (css.match (/(^|\s)ca-\S+/g) || []).join(' ');
			}); 
		 };
	});
 
	$('#select-campus select').on('change', function() {
		var campus = $(this).val();
		if (campus != "none") {
			var campus_id = $(this).children(":selected").attr("id");
			$('.signature .campus').removeClass('blank').addClass(campus_id).empty().append(campus);
		} else {
			$('.signature .campus').addClass('blank');
		}
	});
	
	
	$("button.small").on('click', function() {
		$(".block").css('font-size','10px');
		$(this).closest('dd').siblings('dd').children('button').removeClass('active');
		$(this).addClass('active');
	})
	$("button.medium").on('click', function() {
		$(".block").css('font-size','20px');
		$(this).closest('dd').siblings('dd').children('button').removeClass('active');
		$(this).addClass('active');
	})
	$("button.large").on('click', function() {
		$(".block").css('font-size','40px');
		$(this).closest('dd').siblings('dd').children('button').removeClass('active');
		$(this).addClass('active');
	})
	$("button.invert").on('click', function() {
		$("body").toggleClass('inverted');
		$("body").css('background','black !important');
	})
   
});

})(jQuery);