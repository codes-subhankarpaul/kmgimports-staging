<?php
/**
 * Customize API: kmgimport_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage kmgimport
 */

/**
 * Customize Notice Control class.
 *
 * @since kmgimport
 *
 * @see WP_Customize_Control
 */
class kmgimport_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since kmgimport
	 *
	 * @var string
	 */
	public $type = 'kmgimport-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since kmgimport
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'kmgimport' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/kmgimport/#dark-mode-support', 'kmgimport' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'kmgimport' ); ?>
			</a></p>
		</div>
		<?php
	}
}
