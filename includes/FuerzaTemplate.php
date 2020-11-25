<?php


	/**
	 * Class FuerzaTemplate
	 */
	final class FuerzaTemplate {

		/**
		 * FuerzaTemplate constructor.
		 */
		public function __construct() {

			add_action( 'template_include', [ $this, 'add_cpt_templates' ], 99 );

		}

		/**
		 * @param $template
		 *
		 * @return string
		 */
		public function add_cpt_templates( $template ): string {

			if ( is_singular( 'fuerza_courses' ) ) {

				if ( file_exists( get_stylesheet_directory() . '/templates/single-fuerza-courses.php' ) ) {

					return get_stylesheet_directory() . '/templates/single-fuerza-courses.php';

				}

				return plugin_dir_path(WC_PLUGIN_FILE ) .  'templates/single-fuerza-courses.php';

			}

			return $template;

		}

	}