(function($){

/*
var leadLetter = function(letter,element) {
     //var letter = $(element).text().substr(0,1);
     if ( letter == 'A' || letter == 'V' || letter == 'W' || letter == 'X' || letter == 'Y' ) {
	     $(element).closest('div').addClass('leading-angle');
     // Leading Straight Line
     } if ( letter == 'B' || letter == 'D' || letter == 'E' || letter == 'F' || letter == 'H' || letter == 'K' || letter == 'L' || letter == 'M' || letter == 'N' || letter == 'P' || letter == 'R' || letter == 'U' ) {
	     $(element).closest('div').addClass('leading-line');
     // Leading Bowl
     } if ( letter == 'C' || letter == 'G' || letter == 'J' || letter == 'O' || letter == 'Q' || letter == 'S' ) {
	     $(element).closest('div').addClass('leading-bowl');
	 // Leading Jut
	 } if ( letter == 'T' || letter == 'I' ) {
	     $(element).closest('div').addClass('leading-jut');
	 }
};
*/

/* var countLines = function(text) {

	var eachLine = text.split('\n');

	alert('Lines found: ' + eachLine.length);

	for(var i = 0, l = eachLine.length; i < l; i++) {
	  alert('Line ' + (i+1) + ': ' + eachLine[i]);
	}
	
} */

$(document).ready(function(){

/*	$editables = $('[contenteditable="true"]');

$editables.filter(".title").on('keypress',function(e){
 if(e.keyCode==13){ //enter && shift

  e.preventDefault(); //Prevent default browser behavior
  if (window.getSelection) {
      var selection = window.getSelection(),
          range = selection.getRangeAt(0),
          br = document.createElement("br"),
          textNode = document.createTextNode("\u00a0"); //Passing " " directly will not end up being shown correctly
      range.deleteContents();//required or not?
      range.insertNode(br);
      range.collapse(false);
      range.insertNode(textNode);
      range.selectNodeContents(textNode);

      selection.removeAllRanges();
      selection.addRange(range);
      return false;
  }

   }
});

$(".title").on("keydown","[contenteditable=true]",function(e) {
    if(e.which===13) {
        lineBreak = "<br /> ";
        document.execCommand("insertHTML",false,lineBreak);
        return false;
    }
});  */

	/*
$('.signature div').each(function(){
		var lead = $(this).text().substr(0,1).toLowerCase();
		$(this).addClass('leading-'+lead);
	});
*/
	
	$('.unit .title').on('keyup', function() {		 
		if ( ( $('.unit .title div').length ) && ( $('.unit .title br') ) ) {
			$('.unit').removeClass('single-line').addClas('multi-line');
		} else {
			$('.unit').removeClass('multi-line').addClas('single-line');
		}
	});

	$('#enter-prefix input').on('keyup change', function() {
		 var prefix = $(this).val();
		 if (prefix != "") {
			 $('.unit-prefix').removeClass('blank').empty().prepend(prefix);
			 $('.signature').addClass('has-prefix');
		 } else {
		 	$('.unit-prefix').addClass('blank').empty();
		 	$('.signature').removeClass('has-prefix');
		 }
	});
	
	$('.unit textarea').on('keyup change', function() {
		 var text = $(this).val();
		 countLines(text);
		 $('.unit-title-one').removeClass('blank').empty().prepend(unit_line_one);
		 var letter = $(this).val().substr(0,1);
		 // leadLetter(letter,'.unit-title-one');
	});
	
	$('#enter-unit .enter-line-one input').on('keyup change', function() {
		 var unit_line_one = $(this).val();
		 $('.unit-title-one').removeClass('blank').empty().prepend(unit_line_one);
		 var letter = $(this).val().substr(0,1);
		 // leadLetter(letter,'.unit-title-one');
	});
	
	$('#enter-unit .enter-line-two input').on('keyup change', function() {
		var unit_line_two = $(this).val();
		if ( unit_line_two != "" ) {
			$('.unit').removeClass('one-line').addClass('two-line');
		} else {
			$('.unit').removeClass('two-line');
		}
		$('.unit-title-two').removeClass('blank').empty().prepend(unit_line_two);
		var letter = $(this).val().substr(0,1);
		// leadLetter(letter,'.unit-title-two');
	});
	
	$('#enter-unit .enter-line-three input').on('change', function() {
		 var unit_line_three = $(this).val();
		 $('.unit').removeClass('one-line two-line').addClass('three-line');
		 $('.unit-title-three').removeClass('blank').empty().prepend(unit_line_three);
		 var letter = $(this).val().substr(0,1);
		 // leadLetter(letter,'.unit-title-three');
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