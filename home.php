<?php get_header(); ?>

<main class="">

<div class="controls">

<dl class="unprinted">
	<dt>Controls</dt>
	<dd><button class="small">small</button></dd>
	<dd><button class="medium active">medium</button></dd>
	<dd><button class="large">large</button></dd>
	<dd><button class="invert">invert</button></dd>
</dl>

<dl id="select-prefix" class="unchecked">
	<dt><input type="checkbox" name="prefix" value="prefix" data-line="prefix"> <label for="campus-prefix">Prefix</label></dt>
	<dd>
		<select>
			<option id="none" value="none">None Selected</option>
			<option disabled role=separator>----------</option>
			<option id="center" value="Center for">Center for</option>
			<option id="college" value="College of">College of</option>
			<option id="department" value="Department of">Department of</option>
			<option id="office" value="Office of">Office of</option>
		</select>
	</dd>
</dl>

<dl id="select-college" class="unchecked">
	<dt><input type="checkbox" id="college-checkbox" name="college" value="college" data-line="college"> <label for="college-checkbox">College</label> </dt>
	<dd>
		<select>
			<option value="none">None Selected</option>
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

<dl id="select-campus" class="unchecked">
	<dt><input type="checkbox" id="campus-checkbox" name="campus" value="campus" data-line="campus"> <label for="campus-checkbox">Campus</label> </dt>
	<dd>
		<select>
			<option id="none" value="none">None Selected</option>
			<option disabled role=separator>----------</option>
			<option id="spokane" value="Spokane">Spokane</option>
			<option id="tricities" value="Tri-Cities">Tri-Cities</option>
			<option id="vancouver" value="Vancouver">Vancouver</option>
		</select>
	</dd>
</dl>

</div><!--/controls-->

<div class="signature-block">
	
	<div class="signature">
	
		<div class="shield"></div>
	
		<div class="unit single-line">
			<div class="prefix gray" contenteditable="true">Prefix</div>
			<div class="title gray" contenteditable="true">Signature</div>
		</div>
		<div class="college gray" contenteditable="true">College</div>
		<div class="university gray"></div>
		<div class="campus gray" contenteditable="true">Campus</div>
	
	</div>

</div>

</main>

<?php get_footer(); ?>
