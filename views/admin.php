<!-- This file is used to markup the administration form of the widget. -->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e("Titre :", "extra-widget-archive"); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>"/>
</p>

<p>
	<input id="<?php echo $this->get_field_id('show_by_date'); ?>" type="checkbox" name="<?php echo $this->get_field_name('show_by_date'); ?>" value="1" <?php echo ($instance['show_by_date'] == 1) ? 'checked="checked"' : ''; ?>/>
	<label for="<?php echo $this->get_field_id('show_by_date'); ?>"><?php _e("Tri par date", "extra-widget-archive"); ?></label>
</p>
<p>
	<input id="<?php echo $this->get_field_id('show_by_popularity'); ?>" type="checkbox" name="<?php echo $this->get_field_name('show_by_popularity'); ?>" value="1" <?php echo ($instance['show_by_popularity'] == 1) ? 'checked="checked"' : ''; ?>/>
	<label for="<?php echo $this->get_field_id('show_by_popularity'); ?>"><?php _e("Tri par popularité (nombre de commentaires)", "extra-widget-archive"); ?></label>
</p>
<p>
	<input id="<?php echo $this->get_field_id('show_by_category'); ?>" type="checkbox" name="<?php echo $this->get_field_name('show_by_category'); ?>" value="1" <?php echo ($instance['show_by_category'] == 1) ? 'checked="checked"' : ''; ?>/>
	<label for="<?php echo $this->get_field_id('show_by_category'); ?>"><?php _e("Tri par categorie", "extra-widget-archive"); ?></label>
</p>                                                                                                                                                                                                                               