	<nav>
		<ul class="actions">
			<li><a href="<?php echo base_url(); ?>profile/delete"><i class="icon icon-trash"></i><?php echo $this->lang->line('delete'); ?></a></li>
			<li><a href="<?php echo base_url(); ?>profile/connections"><i class="icon icon-signin"></i><?php echo $this->lang->line('active_connections'); ?></a></li>
		</ul>
	</nav>
</header>
<main>
	<section>
		<section>

	<article class="title item-selected">
		<ul class="actions">
			<?php if($this->member->mbr_nickname) { ?><li><a href="<?php echo base_url(); ?>member/<?php echo $this->member->mbr_nickname; ?>"><i class="icon icon-unlock"></i><?php echo $this->lang->line('public_profile'); ?></a></li><?php } ?>
		</ul>
		<h2><i class="icon icon-user"></i><?php if($this->member->mbr_nickname) { ?><?php echo $this->member->mbr_nickname; ?><?php } else { ?><?php echo $this->lang->line('profile'); ?><?php } ?></h2>
		<?php if($this->config->item('gravatar') && $this->member->mbr_gravatar) { ?>
			<p><img alt="" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower($this->member->mbr_gravatar)); ?>?rating=<?php echo $this->config->item('gravatar_rating'); ?>&amp;size=<?php echo $this->config->item('gravatar_size'); ?>&amp;default=<?php echo $this->config->item('gravatar_default'); ?>">
		<?php } ?>
		<?php if($this->member->mbr_description) { ?>
			<p><?php echo strip_tags($this->member->mbr_description); ?></p>
		<?php } ?>
	</article>

	<h2><i class="icon icon-wrench"></i><?php echo $this->lang->line('update'); ?></h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open(current_url()); ?>

	<?php if(!$this->config->item('ldap')) { ?>
		<p>
		<?php echo form_label($this->lang->line('mbr_email'), 'mbr_email'); ?>
		<?php echo form_input('mbr_email', set_value('mbr_email', $this->member->mbr_email), 'id="mbr_email" class="valid_email required"'); ?>
		</p>

		<p>
		<?php echo form_label($this->lang->line('mbr_email_confirm'), 'mbr_email_confirm'); ?>
		<?php echo form_input('mbr_email_confirm', set_value('mbr_email_confirm', $this->member->mbr_email), 'id="mbr_email_confirm" class="valid_email required"'); ?>
		</p>

		<p>
		<?php echo form_label($this->lang->line('mbr_password'), 'mbr_password'); ?>
		<?php echo form_password('mbr_password', set_value('mbr_password'), 'id="mbr_password"'); ?>
		</p>

		<p>
		<?php echo form_label($this->lang->line('mbr_password_confirm'), 'mbr_password_confirm'); ?>
		<?php echo form_password('mbr_password_confirm', set_value('mbr_password_confirm'), 'id="mbr_password_confirm"'); ?>
		</p>
	<?php } ?>

	<p>
	<?php echo form_label($this->lang->line('mbr_nickname'), 'mbr_nickname'); ?>
	<?php echo form_input('mbr_nickname', set_value('mbr_nickname', $this->member->mbr_nickname), 'id="mbr_nickname"'); ?>
	</p>

	<?php if($this->config->item('gravatar')) { ?>
		<p>
		<?php echo form_label($this->lang->line('gravatar'), 'mbr_gravatar'); ?>
		<?php echo form_input('mbr_gravatar', set_value('mbr_gravatar', $this->member->mbr_gravatar), 'id="mbr_gravatar" class="valid_email"'); ?>
		</p>
	<?php } ?>

	<p>
	<?php echo form_label($this->lang->line('description'), 'mbr_description'); ?>
	<?php echo form_textarea('mbr_description', set_value('mbr_description', $this->member->mbr_description), 'id="mbr_description"'); ?>
	</p>

	<p>
	<button type="submit"><?php echo $this->lang->line('send'); ?></button>
	</p>

	<?php echo form_close(); ?>
		</section>
	</section>
</main>
