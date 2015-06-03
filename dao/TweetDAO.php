<?php

require_once WWW_ROOT . 'dao' . DIRECTORY_SEPARATOR . 'DAO.php';

class TweetDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT *
    				FROM `MA4_todos`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

	public function selectById($id) {
		$sql = "SELECT *
						FROM `MA4_todos`
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

	public function selectByTag($tag) {
		$tag = "%#".$tag."%";
		$sql = "SELECT *
						FROM `MA4_todos`
						WHERE `text` LIKE :tag";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':tag', $tag);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if($result){
			return $result;
		}
		return [];
	}

	public function delete($id) {
		$sql = "DELETE
						FROM `MA4_todos`
						WHERE `id` = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $id);
		return $stmt->execute();
	}

	public function update($id, $data) {
		$errors = $this->getValidationErrors($data);
		if(empty($errors)) {
			$sql = "UPDATE `MA4_todos`
							SET `text` = :text,
							WHERE `id` = :id";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':text', $data['text']);
			$stmt->bindValue(':id', $id);
			if($stmt->execute()) {
				return $this->selectById($id);
			}
		}
		return false;
	}

	public function insert($data) {
		$errors = $this->getValidationErrors($data);
		if(empty($errors)) {
			$sql = "INSERT INTO `MA4_todos` (`text`)
							VALUES (:text)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':text', $data['text']);
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
