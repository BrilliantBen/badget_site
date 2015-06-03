<?php

require_once WWW_ROOT . 'dao' . DIRECTORY_SEPARATOR . 'DAO.php';

class ImageDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT *
    				FROM `MA4_images`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

   public function selectLast() {
    $sql = "SELECT * FROM `MA4_images` ORDER BY `created` LIMIT 6";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

	public function selectById($id) {
		$sql = "SELECT *
						FROM `MA4_images`
						WHERE `id` = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if($result){
			return $result;
		}
		return [];
	}

	public function selectByConcert($concert) {
		$concert = "%#".$concert."%";
		$sql = "SELECT *
						FROM `MA4_images`
						WHERE `concert` LIKE :concert";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':concert', $concert);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if($result){
			return $result;
		}
		return [];
	}

	public function delete($id) {
		$sql = "DELETE
						FROM `MA4_images`
						WHERE `id` = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $id);
		return $stmt->execute();
	}

	public function insert($data) {
		$errors = $this->getValidationErrors($data);
		if(empty($errors)) {
			$sql = "INSERT INTO `MA4_images` (`image`, `concert`, `created`)
							VALUES (:image, :concert, :created)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':image', $data['image']);
			$stmt->bindValue(':concert', $data['concert']);
			$stmt->bindValue(':created', $data['created']);
			if($stmt->execute()) {
				$insertedId = $this->pdo->lastInsertId();
				return $this->selectById($insertedId);
			}
		}
		return false;
	}

	public function getValidationErrors($data) {
		$errors = array();
		if(empty($data['text'])) {
			$errors['text'] = 'field text has no value';
		}
		return $errors;
	}

}
