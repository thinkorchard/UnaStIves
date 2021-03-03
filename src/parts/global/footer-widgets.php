<?php if( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="above-footer">
		<div class="container">
			<aside class="flex-grid gutters">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</aside>
		</div>
	</div>
	<!-- /.above-footer -->

<?php endif; ?>
