<div>
	<h3>Add Ambulance</h3>
	<?php echo form_open( base_url() . 'reports/ambulance/validatenewambulance' );?>
		<p><label class="label">Plate No: </label><input type="text" name="plateno" class="textbox" value="<?php echo set_value('plateno');?>"/><span><?php echo form_error('plateno'); ?></span></p>
		<p><label class="label">Capacity: </label><input type="text" name="capacity" class="textbox" value="<?php echo set_value('capacity');?>" /><span><?php echo form_error('capacity'); ?></span></p>
		<p><input type="submit" value="Add Ambulance" class="button"/>
		<input type="reset" value="Reset" class="button"/></p>
	<?php echo form_close();?>
</div>