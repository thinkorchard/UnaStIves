<?php

	/**
	 * Stay Book Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );



?>

<div <?php ign_block_attrs( $block ); ?>>
	<div class="container">
		<form  method="post" action="https://be.synxis.com/" target="_blank" rel="noopener">
			<div class="form-wrapper">
				<div class="form-field-wrapper">
					<label for="arrive">Check in</label>
					<input type="text" name="arrive" id="arrive" placeholder="SELECT">
					<!-- /# -->
				</div>
				<!-- /.form-field-wrapper -->
				<div class="form-field-wrapper">
					<label for="depart">Check out</label>
					<input type="text" name="depart" id="depart" placeholder="SELECT">
					<!-- /# -->
				</div>
				<!-- /.form-field-wrapper -->
				<div class="form-field-wrapper">
					<label for="adult">Adults</label>
					<select id="adult" name="adult">
						<option value="1">1</option>
						<option value="2" selected="">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
					<!-- /# -->
				</div>
				<!-- /.form-field-wrapper -->
				<div class="form-field-wrapper">
					<label for="child">Children</label>
					<select id="child" name="child">
                        <option value="0" selected="">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					<!-- /# -->
				</div>
				<!-- /.form-field-wrapper -->
			</div>
			<!-- /.form-wrapper -->
			<div class="button-wrapper">
				<input type="submit" value="Check availability">
			</div>
			<!-- /.button-wrapper -->
		</form>
	</div>
	<!-- /.container -->
	
	
</div>
