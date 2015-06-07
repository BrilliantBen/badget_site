<?php

$pulseDAO = new PulseDAO();

$app->get('/pulse/?',function() use ($pulseDAO){
	header("Content-Type: application/json");
	echo json_encode($pulseDAO->selectHighest(), JSON_NUMERIC_CHECK);
	exit();
});

