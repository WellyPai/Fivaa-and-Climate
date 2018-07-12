<form id="climate" action="<?php echo base_url(); ?>climate/weather" class="form-horizontal" method="POST">
	<label>Cities</label>
	<select name="city">
	    <option value="Jakarta">Jakarta</option>
	    <option value="Tokyo">Tokyo</option>
	    <option value="London">London</option>
	</select>
	<button type="submit" class="btn btn-primary">Get Weather</button>
</form>