<?php
	class Editor{

		public function navbar($array,$active){
			$dis = '<ul class="side-menu shadowed">';
			foreach ($array as $key) {
				if($key == "index")
					$dis .= Menu::index($active);
				if($key == "typo")
					$dis .= Menu::typo($active);
				if($key == "socialwall")
					$dis .= Menu::socialwall($active);
				if($key == "widget")
					$dis .= Menu::widget($active);
				if($key == "table")
					$dis .= Menu::tables($active);
				if($key == "form")
					$dis .= Menu::form($active);
				if($key == "UI")
					$dis .= Menu::UI($active);
				if($key == "chart")
					$dis .= Menu::charts($active);
				if($key == "photo")
					$dis .= Menu::photogallery($active);
				if($key == "sample")
					$dis .= Menu::samples($active);
			}

			$dis .= '</ul>';

			echo $dis;
		}


		public function header(){

		}

		public function leftbar(){
			
		}

		public function rightbar(){

		}

		
	}

    
?>