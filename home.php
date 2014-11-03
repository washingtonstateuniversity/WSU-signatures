<?php get_header(); ?>

<main class="">

<dl class="controls unprinted">
<dt>Controls</dt>
<dd><button class="small">small</button></dd>
<dd><button class="medium active">medium</button></dd>
<dd><button class="large">large</button></dd>
<dd><button class="invert">invert</button></dd>
</dl>

<!--<canvas>

</canvas>-->

<input type="checkbox" name="prefix" value="prefix"> <label>Prefix</label> 
<input type="checkbox" name="college" value="college"> <label>College</label> 
<input type="checkbox" name="campus" value="campus"> <label>Campus</label> 

<hr>

<div class="block">
	
	<div class="signature">
	
		<div class="shield"></div>
	
		<div class="unit single-line">
			<div class="prefix gray" contenteditable="true">Prefix</div>
			<!--<textarea class="unit-title-one gray">Signature</textarea>-->
			<div class="title gray" contenteditable="true">Signature</div>
		</div>
		<div class="college gray" contenteditable="true">College</div>
		<div class="university gray"></div>
		<div class="campus gray" contenteditable="true">Campus</div>
	
	</div>

</div>

<form class="unprinted">

	<dl id="enter-prefix">
		<dt>Prefix</dt>
		<dd>
			<input type="text" placeholder="Department of, Office of, Center for, etc.">
		</dd>
	</dl>
	
	<dl id="enter-unit">
		<dt>Unit</dt>
		<dd class="enter-line-one">
			<input type="text" placeholder="Line One" maxlength="40">
		</dd>
		<dd class="enter-line-two">
			<input type="text" placeholder="Line Two" maxlength="40">
		</dd>
		<dd class="enter-line-three">
			<input type="text" placeholder="Line Three" maxlength="40">
		</dd>
	</dl>

	<dl id="select-college">
	<dt>College</dt>
	<dd>
		<select>
			<option value="none">None Shown</option>
			<option disabled role=separator>----------</option>
			<option id="carson" value="Carson College of Business">Carson College of Business</option>
			<option id="arts-sciences" value="College of Arts and Sciences">College of Arts and Sciences</option>
			<option id="medical" value="College of Medical Sciences">College of Medical Sciences</option>
			<option id="nursing" value="College of Nursing">College of Nursing</option>
			<option id="pharmacy" value="College of Pharmacy">College of Pharmacy</option>
			<option id="cahnrs" value="College of Agricultural, Human, <br>and Natural Resource Sciences">College of Agricultural, Human, and Natural Resource Sciences</option>
			<option id="veterinary" value="College of Veterinary Medicine">College of Veterinary Medicine</option>
			<option id="murrow" value="The Edward R. Murrow College of Communication">The Edward R. Murrow College of Communication</option>
			<option id="honors" value="Honors College">Honors College</option>
			<option id="voiland" value="">Voiland College of Engineering and Architecture</option>
		</select>
	</dd>
	</dl>
	
	<dl id="select-campus">
	<dt>Campus</dt>
	<dd>
		<select>
			<option id="none" value="none">None Shown</option>
			<option disabled role=separator>----------</option>
			<option id="spokane" value="Spokane">Spokane</option>
			<option id="tricities" value="Tri-Cities">Tri-Cities</option>
			<option id="vancouver" value="Vancouver">Vancouver</option>
		</select>
	</dd>
	</dl>


</form>



<!--<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/rgbcolor.js"></script> -->
<!--<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/StackBlur.js"></script>-->
<!--<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/canvg.js"></script> -->

<script>

(function($){

/* $(document).ready(function(){

 function drawHandCanvas(){
   var canvas = document.getElementById('canvas');
   var ctx = canvas.getContext('2d');
   var shield=  document.createElement('img');
   var logotype = document.createElement('img');

   shield.onload = function(){
    ctx.drawImage(this,0,0);
   }
   logotype.onload = function(){
    ctx.drawImage(this,0,0);
   }

    shield.src='/wp-content/themes/signatures/svgs/shield.svg';
    logotype.src='/wp-content/themes/signatures/svgs/WashingtonStateUniversity.svg';
    img.width = 60;  img.height = 60;

}
drawHandCanvas();

}); */

})(jQuery);

</script>

<canvas id="canvas" style="border:1px solid black;" width="1000px" height="500px">
</canvas>


<?php
/* @type WP_Query $wp_query */
global $wp_query;

$big = 99164;
$args = array(
	'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format'       => 'page/%#%',
	'total'        => $wp_query->max_num_pages, // Provide the number of pages this query expects to fill.
	'current'      => max( 1, get_query_var('paged') ), // Provide either 1 or the page number we're on.
);
?>
	<footer class="main-footer archive-footer">
		<section class="row side-right pager prevnext gutter">
			<div class="column one">
				<?php echo paginate_links( $args ); ?>
			</div>
			<div class="column two">
				<!-- intentionally empty -->
			</div>
		</section><!--pager-->
	</footer>
</main>
<?php

get_footer();
