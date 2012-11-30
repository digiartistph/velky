<div>
	<h3>Report Accident</h3>
	<?php echo form_open( base_url() . 'master/accident/validateaddreport' );?>
		<p><label>Accident Type: </label>
			<select class="select" name="accidenttype">
			<?php foreach ($types as $type):?>
			<option value="<?php echo $type->at_id;?>"><?php echo $type->name;?></option>
			<?php endforeach;?>
			</select><a href="<?php echo base_url() . 'master/accident_type/section/addaccident_type'?>">Add accident type</a>
		</p>
		<p><label>Barangay: </label><input class="textboxA" type="text" name="barangay" /><span><?php echo form_error('barangay'); ?></span></p>
		<p><label>Details: </label><textarea class="textarea" rows="4" cols="20" name="details"></textarea> <span><?php echo form_error('details'); ?></span></p>
		<p><label>Caller: </label><input class="textboxB" type="text" name="caller" /><span><?php echo form_error('caller'); ?></span></p>
		<p><label>Accident Date: </label><input class="textboxB" type="text" name="acdntdate" /><span><?php echo form_error('acdntdate'); ?></span></p>
		<p><label>Report Date: </label><input class="textboxD" type="text" name="rptdate" /><span><?php echo form_error('rptdate'); ?></span></p>
		<p><input class="button" type="submit" value="Create Report"/></p>
	<?php echo form_close();?>
</div>