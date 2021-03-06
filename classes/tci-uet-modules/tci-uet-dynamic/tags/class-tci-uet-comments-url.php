<?php
namespace TCI_UET\TCI_UET_Modules\TCI_UET_Dynamic;

use Elementor\Core\DynamicTags\Data_Tag;
use Elementor\Modules\DynamicTags\Module;
use TCI_UET\TCI_UET_Modules\TCI_UET_Dynamic;

class TCI_UET_Comments_Url extends Data_Tag {

	public function get_name() {
		return 'TCI_UET_Comments_Url';
	}

	public function get_title() {
		return __( 'Comments URL', 'tci-uet' );
	}

	public function get_group() {
		return TCI_UET_Dynamic::COMMENTS_GROUP;
	}

	public function get_categories() {
		return [ Module::URL_CATEGORY ];
	}

	public function get_value( array $options = [] ) {
		return get_comments_link();
	}
}
