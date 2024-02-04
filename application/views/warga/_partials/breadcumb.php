
                        <!-- <h1 class="mt-4"><?php echo ucfirst($this->uri->segment(1))?></h1> -->
						<h1 class="mt-4"><?php echo ucfirst(($this->uri->segment(1) == 'admin') ? 'warga' : $this->uri->segment(1)) ?></h1>

                        <ol class="breadcrumb mb-4">
<?php foreach ($this->uri->segments as $segment): ?>
	<?php 
		$url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
		$is_active =  $url == $this->uri->uri_string;
		// Ganti "admin" menjadi "warga"
		$segment_display = ($segment == 'admin') ? 'warga' : ucfirst($segment);
	?>


	<li class="breadcrumb-item active <?php echo $is_active ? 'active': '' ?>">
		<?php if($is_active): ?>
			<?php echo ucfirst($segment_display) ?>
		<?php else: ?>
			<a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment_display) ?></a>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ol>