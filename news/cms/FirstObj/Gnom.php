<?php
class Gnom extends Contenter {
	public function e_Test(){
		//echo "Hello";
		$data['gnoms'] = $this->Model->get_gnoms();
		$this->loadView('gnom_list', $data);
	}
	
}
?>