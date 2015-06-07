<?php

require_once WWW_ROOT . 'dao' . DIRECTORY_SEPARATOR . 'DAO.php';

class PulseDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT *
    		FROM `MA4_pulse`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

	public function selectByConcert($concert) {
		$concert = "%#".$concert."%";
		$sql = "SELECT *
						FROM `MA4_pulse`
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


  public function selectHighest() {
    $sql = "SELECT MAX(pulse) AS maxPulse FROM `MA4_pulse`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }



}
