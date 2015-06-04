<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'ImageDAO.php';

class HomeController extends Controller {

	private $imageDAO;

	function __construct() {
		$this->imageDAO = new ImageDAO();
	}

	public function overview() {
		$images = $this->imageDAO->selectLast();
		$this->set('images', $images);


		$errors = array();
		if (!empty($_POST)) {
			if (empty($_POST["image"])) {
			$errors['image'] = 'Please select an image';
		}
		if (empty($_POST["concert"])) {
			$errors['concert'] = 'Please enter at wich concert you are';
		}

		if (empty($errors)) {
			$data = array(
						"created"=>date('Y/m/d H:i:s'),
						"image"=>$_POST["image"],
						"concert"=>$_POST["concert"]
					);

				$this->imageDAO->insert($data);
				$_SESSION['info'] = "the image was uploaded";
				$this->redirect('index.php');
		}

		}



		if (!empty($errors)) {
			$_SESSION['error'] = "the image could not be uploaded";
		}

		$this->set('errors', $errors);
	}


	public function delete() {
		if (!empty($_GET["id"])) {
			$delete = $this->imageDAO->delete($_GET["id"]);
		}

		if (!empty($delete)) {
			$this->redirect('index.php');
		}

	}

}
