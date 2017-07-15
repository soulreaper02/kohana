<?php
	class Model_Post extends ORM {
		public function rules(){
		return array('name')=> array(array('not_empty')),
		'occupation')=> array(array('not_empty')),
		);
		
	   }
	}
>
