<?php

	class Menu{

		public function index($active=""){
			if($active == "index")
				return '<li><a href="../blackpearl/" class="active"><i class="fa fa-home"></i>Dashboard</a></li>';
			return '<li><a href="../blackpearl/"><i class="fa fa-home"></i>Dashboard</a></li>';
		}

		public function typo($active){
			if($active == "typo")
				return '<li><a href="typography.php" class="active"><i class="fa fa-pencil"></i>Typography</a></li>';
			return '<li><a href="typography.php"><i class="fa fa-pencil"></i>Typography</a></li>';
		}

		public function socialwall($active){
			if($active == "wall")
				return '<li><a href="wall.php" class="active"><i class="fa fa-comments"></i>Social Wall</a></li>';
			return '<li><a href="wall.php"><i class="fa fa-comments"></i>Social Wall</a></li>';
		}

		public function widget($active=""){
			$act = explode("-",$active);
			if($act[0]=="widget"){
				$temp= '<li class="submenu '.$act[1].'">
	                    <a href="" class="active"><i class="fa fa-cog"></i>Widgets</a>
	                    <ul>';
	            if($act[2] == "sidebar"){
	                $temp .= '<li><a class="active" href="sidebar-widgets.php">Sidebar</a></li>
	                          <li><a href="content-widgets.php">Content</a></li>
	                          <li><a href="shortcut-widgets.php">Shortcuts</a></li>';
	            }
	            else if($act[2] == "content"){
	            	$temp .= '<li><a href="sidebar-widgets.php">Sidebar</a></li>
	                          <li><a class="active" href="content-widgets.php">Content</a></li>
	                          <li><a href="shortcut-widgets.php">Shortcuts</a></li>';
	            } 
	            else if($act[2] == "shortcut"){
	            	$temp .= '<li><a href="sidebar-widgets.php">Sidebar</a></li>
	                          <li><a href="content-widgets.php">Content</a></li>
	                          <li><a class="active" href="shortcut-widgets.php">Shortcuts</a></li>';
	            } 

	            $temp .= '</ul></li>';

	            return $temp;
        	}
        	else{
        		$temp= '<li class="submenu">
                                  <a href="" ><i class="fa fa-cog"></i>Widgets</a>
                                  <ul>
                                      <li><a href="sidebar-widgets.php">Sidebar</a></li>
                                      <li><a href="content-widgets.php">Content</a></li>
                                      <li><a href="shortcut-widgets.php">Shortcuts</a></li>
                                  </ul>
                             </li>';
                return $temp;
        	}
		}

		public function tables($active=""){
			if($active == "tables")
        return '<li><a href="tables.php" class="active"><i class="fa fa-table"></i>Tables</a></li>';
      return '<li><a href="tables.php"><i class="fa fa-table"></i>Tables</a></li>';
		}
		public function form($active){
			$act = explode("-",$active);
			if($act[0]=="form"){
				$temp= '<li class="submenu '.$act[1].'">
	                    <a href="" class="active"><i class="fa fa-file"></i>Forms</a>
	                    <ul>';
	            if($act[2] == "element"){
	                $temp .= '<li><a class="active" href="form-elements.php">Basic Form Elements</a></li>
                              <li><a href="form-components.php">Form Components</a></li>
                              <li><a href="form-examples.php">Form Examples</a></li>
                              <li><a href="form-validation.php">Form Validation</a></li>
                              <li><a href="form-wizard.php">Form Wizard</a></li>';
	            }
	            else if($act[2] == "component"){
	            	$temp .= '<li><a href="form-elements.php">Basic Form Elements</a></li>
                              <li><a class="active" href="form-components.php">Form Components</a></li>
                              <li><a href="form-examples.php">Form Examples</a></li>
                              <li><a href="form-validation.php">Form Validation</a></li>
                              <li><a href="form-wizard.php">Form Wizard</a></li>';
	            } 
	            else if($act[2] == "example"){
	            	$temp .= '<li><a href="form-elements.php">Basic Form Elements</a></li>
                              <li><a href="form-components.php">Form Components</a></li>
                              <li><a class="active" href="form-examples.php">Form Examples</a></li>
                              <li><a href="form-validation.php">Form Validation</a></li>
                              <li><a href="form-wizard.php">Form Wizard</a></li>';
	            } 
	            else if($act[2] == "validation"){
	            	$temp .= '<li><a href="form-elements.php">Basic Form Elements</a></li>
                              <li><a href="form-components.php">Form Components</a></li>
                              <li><a href="form-examples.php">Form Examples</a></li>
                              <li><a class="active" href="form-validation.php">Form Validation</a></li>
                              <li><a href="form-wizard.php">Form Wizard</a></li>';
	            } 
	            else if($act[2] == "wizard"){
	            	$temp .= '<li><a href="form-elements.php">Basic Form Elements</a></li>
                              <li><a href="form-components.php">Form Components</a></li>
                              <li><a href="form-examples.php">Form Examples</a></li>
                              <li><a href="form-validation.php">Form Validation</a></li>
                              <li><a class="active" href="form-wizard.php">Form Wizard</a></li>';
	            } 

	            $temp .= '</ul></li>';

	            return $temp;
        	}
        	else{
        		$temp= '<li class="submenu">
                                  <a href=""><i class="fa fa-file"></i>Forms</a>
                                  <ul>
                                      <li><a href="form-elements.php">Basic Form Elements</a></li>
                                      <li><a href="form-components.php">Form Components</a></li>
                                      <li><a href="form-examples.php">Form Examples</a></li>
                                      <li><a href="form-validation.php">Form Validation</a></li>
                                      <li><a href="form-wizard.php">Form Wizard</a></li>
                                  </ul>
                             </li>';
                return $temp;
        	}
		}
		public function UI($active){
			$act = explode("-",$active);
			if($act[0]=="ui"){
				$temp= '<li class="submenu '.$act[1].'">
	                    <a href="" class="active"><i class="fa fa-magic"></i>User Interface</a>
	                    <ul>';
	            if($act[2] == "button"){
	                $temp .= '<li><a class="active" href="buttons.php">Buttons</a></li>
                              <li><a href="labels.php">Labels</a></li>
                              <li><a href="images-icons.php">Images & Icons</a></li>
                              <li><a href="alerts.php">Alerts</a></li>
                              <li><a href="media.php">Media</a></li>
                              <li><a href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                              <li><a href="components.php">Components</a></li>
                              <li><a href="other-components.php">Others</a></li>';
	            }
	            else if($act[2] == "label"){
	            	$temp .= '<li><a href="buttons.php">Buttons</a></li>
                              <li><a class="active" href="labels.php">Labels</a></li>
                              <li><a href="images-icons.php">Images & Icons</a></li>
                              <li><a href="alerts.php">Alerts</a></li>
                              <li><a href="media.php">Media</a></li>
                              <li><a href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                              <li><a href="components.php">Components</a></li>
                              <li><a href="other-components.php">Others</a></li>';
	            }  
	            else if($act[2] == "imageicon"){
	            	$temp .= '<li><a href="buttons.php">Buttons</a></li>
                              <li><a href="labels.php">Labels</a></li>
                              <li><a class="active" href="images-icons.php">Images & Icons</a></li>
                              <li><a href="alerts.php">Alerts</a></li>
                              <li><a href="media.php">Media</a></li>
                              <li><a href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                              <li><a href="components.php">Components</a></li>
                              <li><a href="other-components.php">Others</a></li>';
	            } 
	            else if($act[2] == "alert"){
	            	$temp .= '<li><a href="buttons.php">Buttons</a></li>
                              <li><a href="labels.php">Labels</a></li>
                              <li><a href="images-icons.php">Images & Icons</a></li>
                              <li><a class="active" href="alerts.php">Alerts</a></li>
                              <li><a href="media.php">Media</a></li>
                              <li><a href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                              <li><a href="components.php">Components</a></li>
                              <li><a href="other-components.php">Others</a></li>';
	            }
	            else if($act[2] == "media"){
	            	$temp .= '<li><a href="buttons.php">Buttons</a></li>
                              <li><a href="labels.php">Labels</a></li>
                              <li><a href="images-icons.php">Images & Icons</a></li>
                              <li><a href="alerts.php">Alerts</a></li>
                              <li><a class="active" href="media.php">Media</a></li>
                              <li><a href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                              <li><a href="components.php">Components</a></li>
                              <li><a href="other-components.php">Others</a></li>';
	            } 
	            else if($act[2] == "pagi"){
	            	$temp .= '<li><a href="buttons.php">Buttons</a></li>
                              <li><a href="labels.php">Labels</a></li>
                              <li><a href="images-icons.php">Images & Icons</a></li>
                              <li><a href="alerts.php">Alerts</a></li>
                              <li><a href="media.php">Media</a></li>
                              <li><a class="active" href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                              <li><a href="components.php">Components</a></li>
                              <li><a href="other-components.php">Others</a></li>';
	            } 
	            else if($act[2] == "component"){
	            	$temp .= '<li><a href="buttons.php">Buttons</a></li>
                              <li><a href="labels.php">Labels</a></li>
                              <li><a href="images-icons.php">Images & Icons</a></li>
                              <li><a href="alerts.php">Alerts</a></li>
                              <li><a href="media.php">Media</a></li>
                              <li><a href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                              <li><a class="active" href="components.php">Components</a></li>
                              <li><a href="other-components.php">Others</a></li>';
	            }
	            else if($act[2] == "other"){
	            	$temp .= '<li><a href="buttons.php">Buttons</a></li>
                              <li><a href="labels.php">Labels</a></li>
                              <li><a href="images-icons.php">Images & Icons</a></li>
                              <li><a href="alerts.php">Alerts</a></li>
                              <li><a href="media.php">Media</a></li>
                              <li><a href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                              <li><a href="components.php">Components</a></li>
                              <li><a class="active" href="other-components.php">Others</a></li>';
	            }  

	            $temp .= '</ul></li>';

	            return $temp;
        	}
        	else{
        		$temp= '<li class="submenu">
                                  <a href=""><i class="fa fa-magic"></i>User Interface</a>
                                  <ul>
                                       <li><a href="buttons.php">Buttons</a></li>
                                       <li><a href="labels.php">Labels</a></li>
                                       <li><a href="images-icons.php">Images & Icons</a></li>
                                       <li><a href="alerts.php">Alerts</a></li>
                                       <li><a href="media.php">Media</a></li>
                                       <li><a href="pagination-breadcrumbs.php">Pagination & Breadcrumbs</a></li>
                                       <li><a href="components.php">Components</a></li>
                                       <li><a href="other-components.php">Others</a></li>
                                  </ul>
                             </li>';
                return $temp;
        	}
		}
		public function charts($active){
			if($active == "chart")
				return '<li><a href="charts.php" class="active"><i class="fa fa-bar-chart"></i>Charts</a></li>';
			return '<li><a href="charts.php"><i class="fa fa-bar-chart"></i>Charts</a></li>';
		}
		public function photogallery($active){
			$act = explode("-",$active);
			if($act[0]=="photo"){
				$temp= '<li class="submenu '.$act[1].'">
	                    <a href="" class="active"><i class="fa fa-camera"></i>Photo Gallery</a>
	                    <ul>';
	            if($act[2] == "default"){
	                $temp .= '<li><a class="active" href="photo-gallery-default.php">Default Gallery</a></li>
                              <li><a href="photo-gallery-sortable.php">Sortable Gallery</a></li>';
	            }
	            else if($act[2] == "sort"){
	            	$temp .= '<li><a href="photo-gallery-default.php">Default Gallery</a></li>
                              <li><a class="active" href="photo-gallery-sortable.php">Sortable Gallery</a></li>';
	            }  
	            $temp .= '</ul></li>';

	            return $temp;
        	}
        	else{
        		$temp= '<li class="submenu">
                                  <a href=""><i class="fa fa-camera"></i>Photo Gallery</a>
                                  <ul>
                                       <li><a href="photo-gallery-default.php">Default Gallery</a></li>
                                       <li><a href="photo-gallery-sortable.php">Sortable Gallery</a></li>
                                  </ul>
                             </li>';
                return $temp;
        	}
		}
		public function samples($active){
			$act = explode("-",$active);
			if($act[0]=="sample"){
				$temp= '<li class="submenu '.$act[1].'">
	                    <a href="" class="active"><i class="fa fa-align-justify"></i>Sample Pages</a>
	                    <ul>';
	            if($act[2] == "list"){
	                $temp .= '<li><a class="active" href="list-view.php">List View</a></li>
                              <li><a href="profile-page.php">Profile Page</a></li>
                              <li><a href="messages.php">Messages</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="404.php">404 Error</a></li>
                              <li><a href="student-signup-form.php">Signup Form</a></li>
                              <li><a href="sales.php">Sales</a></li>';
	            }
	            else if($act[2] == "profile"){
	            	$temp .= '<li><a href="list-view.php">List View</a></li>
                              <li><a class="active" href="profile-page.php">Profile Page</a></li>
                              <li><a href="messages.php">Messages</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="404.php">404 Error</a></li>
                              <li><a href="student-signup-form.php">Signup Form</a></li>
                              <li><a href="sales.php">Sales</a></li>';
	            }  
	            else if($act[2] == "message"){
	            	$temp .= '<li><a href="list-view.php">List View</a></li>
                              <li><a href="profile-page.php">Profile Page</a></li>
                              <li><a class="active" href="messages.php">Messages</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="404.php">404 Error</a></li>
                              <li><a href="student-signup-form.php">Signup Form</a></li>
                              <li><a href="sales.php">Sales</a></li>';
	            } 
	            else if($act[2] == "login"){
	            	$temp .= '<li><a href="list-view.php">List View</a></li>
                              <li><a href="profile-page.php">Profile Page</a></li>
                              <li><a href="messages.php">Messages</a></li>
                              <li><a class="active" href="login.php">Login</a></li>
                              <li><a href="404.php">404 Error</a></li>
                              <li><a href="student-signup-form.php">Signup Form</a></li>
                              <li><a href="sales.php">Sales</a></li>';
	            }
	            else if($act[2] == "404"){
	            	$temp .= '<li><a href="list-view.php">List View</a></li>
                              <li><a href="profile-page.php">Profile Page</a></li>
                              <li><a href="messages.php">Messages</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a class="active" href="404.php">404 Error</a></li>
                              <li><a href="student-signup-form.php">Signup Form</a></li>
                              <li><a href="sales.php">Sales</a></li>';
	            } 
	            else if($act[2] == "signup"){
	            	$temp .= '<li><a href="list-view.php">List View</a></li>
                              <li><a href="profile-page.php">Profile Page</a></li>
                              <li><a href="messages.php">Messages</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="404.php">404 Error</a></li>
                              <li><a class="active" href="student-signup-form.php">Signup Form</a></li>
                              <li><a href="sales.php">Sales</a></li>';
	            }
              else if($act[2] == "sales"){
                $temp .= '<li><a href="list-view.php">List View</a></li>
                              <li><a href="profile-page.php">Profile Page</a></li>
                              <li><a href="messages.php">Messages</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="404.php">404 Error</a></li>
                              <li><a href="student-signup-form.php">Signup Form</a></li>
                              <li><a class="active" href="sales.php">Sales</a></li>';
              }    

	            $temp .= '</ul></li>';

	            return $temp;
        	}
        	else{
        		$temp= '<li class="submenu">
                                  <a href=""><i class="fa fa-align-justify"></i>Sample Pages</a>
                                  <ul>
                                      <li><a href="list-view.php">List View</a></li>
                                      <li><a href="profile-page.php">Profile Page</a></li>
                                      <li><a href="messages.php">Messages</a></li>
                                      <li><a href="login.php">Login</a></li>
                                      <li><a href="404.php">404 Error</a></li>
                                      <li><a href="student-signup-form.php">Signup Form</a></li>
                                      <li><a href="sales.php">Sales</a></li>
                                  </ul>
                             </li>';
                return $temp;
        	}
		}

    public function sSales(){

    }

    public function sVideos(){

    }

    public function sEvents(){

    }

    public function sReport(){

    }

    public function sProfile(){

    }

    public function sForm(){

    }

    public function sChart(){

    }


	}
?>