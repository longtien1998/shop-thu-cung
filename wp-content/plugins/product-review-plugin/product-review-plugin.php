<?php
/*
Plugin Name: Product Review
Plugin URI: http://vuontainguyen.com/
Description: Giao diện khác cho phần bình luận sản phẩm của theme Flatsome.
Version: 1.0
Author: vuontainguyen.com
*/

if ( ! defined( 'WPINC' ) ) {
  die;
}

define('FPR_URL', untrailingslashit(plugin_dir_url(__FILE__)));
define('FPR_DIR', untrailingslashit(plugin_dir_path(__FILE__)));

// register_activation_hook( __FILE__, 'fpr_install' );
// register_deactivation_hook( __FILE__, 'fpr_deactive' );

add_action('init', 'fpr_init', 99 );

function fpr_init() {
	if ( class_exists( 'WooCommerce' ) ) {
		/*
		remove_filter( 'comments_template', array( 'WC_Template_Loader', 'comments_template_loader' ) );

		function fpr_comments_template_loader($template) {
			if ( get_post_type() !== 'product' ) {
				return $template;
			}

			$check_dirs = array(
				trailingslashit( WC()->plugin_path() ) . 'templates/',
			);

			foreach ( $check_dirs as $dir ) {
				if ( file_exists( trailingslashit( $dir ) . 'single-product-reviews.php' ) ) {
					return trailingslashit( $dir ) . 'single-product-reviews.php';
				}
			}
		}
		add_filter( 'comments_template', 'fpr_comments_template_loader');
		*/
		remove_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating' );

		function fpr_remove_product_reviews_tab($tabs) {
			//print_r($tabs);
			if(isset($tabs['reviews'])) {
				unset($tabs['reviews']);
			}
			return $tabs;
		}
		add_filter( 'woocommerce_product_tabs', 'fpr_remove_product_reviews_tab', 99 );

		function fpr_add_reviews() {
			comments_template();
		}
		add_action( 'woocommerce_after_single_product_summary', 'fpr_add_reviews', 12 );

		function fpr_styles() {
			?>
			<style type="text/css">
				/* Plugin Flatsome Product Review style */
				@media screen and (min-width: 850px) {
					#reviews .col {
						width: 100%;
						max-width: 100%;
						flex-basis: 100%;
					}
					.fpr-tab {
						border-bottom: #e80b0b 2px solid;
						margin-bottom: 15px;
					}
					.fpr-tab .fpr-tab-title {
						display: inline-block;
						padding: 5px 15px;
						background: #e80b0b;
						color: #fff;
						text-transform: uppercase;
					}
					.commentlist li .comment-text, .comment-list li .comment-text {
						margin: 0 0 0 15px;
					    border: 1px solid #e4e1e3;
					    border-radius: 4px;
					    padding: 1em 1em 0;
					}
					.fpr-meta-wrap {
						margin-bottom: 10px;
					}
					.commentlist li .description, .comment-list li .description {
						font-style: normal;
						color: #333;
					}
					.star-rating span:before {
						color: #eec327;
					}
					.star-rating:before, .woocommerce-page .star-rating:before {
						color: #d3ced2;
					}
				}
			</style>
			<?php
		}
		add_action( 'wp_head', 'fpr_styles', 30 );

		function fpr_reviews_tab_title() {
			?>
			<div class="fpr-tab">
				<div class="fpr-tab-title">Đánh giá sản phẩm</div>
			</div>
			<?php
		}
		add_action( 'woocommerce_after_single_product_summary', 'fpr_reviews_tab_title', 11 );

		function fpr_reviews_meta_wrap() {
			echo '<div class="fpr-meta-wrap flex-row">';
		}
		add_action('woocommerce_review_before_comment_meta', 'fpr_reviews_meta_wrap', 5);

		function fpr_reviews_meta_wrap_close() {
			echo '</div>';
		}
		add_action('woocommerce_review_meta', 'fpr_reviews_meta_wrap_close', 20);

		add_action( 'woocommerce_review_meta', 'woocommerce_review_display_rating', 15 );
	}
}