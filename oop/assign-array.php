<?php
    class AssignArray {
    	public $search = [];

        public function __construct(array $search) {
            $this->search = $search;
        }
        public function assignArray($field_name, $label, $field_type='string', $option=[]) {
            $this->search[] = [
			'fields' 		=> $field_name, // name
			'label' 		=> $label, // name
			'field_type' 	=> $field_type, // string
			'option' 		=> $option, // []
            ];
        }
        public function getSearch() {
            return $this->search;
        }
    }


    $ass1 = new AssignArray([]);

    $ass1->assignArray('name','name');

    print_r( $ass1->getSearch());
?>