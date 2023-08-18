
<!-----start-------->

			<a href="<?php echo $woocommerce->cart->get_cart_url(); ?>">
		
				<section id="cart">
					<div class="heading">
				
						<h4><img width="32" height="32" alt="" src="<?php  echo get_template_directory_uri();?>/image/cart-bg.png"></h4>
						<a><span id="cart-total"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?> - <?php echo $woocommerce->cart->get_cart_total();  ?></span></a>

					</div>

				</section>

			</a>

<!----end-------->	
