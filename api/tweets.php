<?php

$tweetDAO = new TweetDAO();

//GET -> /todos/
$app->get('/todos/?',function() use ($tweetDAO){
    header("Content-Type: application/json");
    echo json_encode($tweetDAO->selectAll(), JSON_NUMERIC_CHECK);
    exit();
});

//GET -> /todos/:id
$app->get('/todos/:id/?', function($id) use ($tweetDAO){
    header("Content-Type: application/json");
    echo json_encode($tweetDAO->selectById($id), JSON_NUMERIC_CHECK);
    exit();
});

//POST -> /todos/
//POST -> /todos/
$app->post('/todos/?', function() use ($app, $tweetDAO){
    header("Content-Type: application/json");
    $post = $app->request->post();
    if(empty($post)){
        $post = (array) json_decode($app->request()->getBody());
    }
    echo json_encode($tweetDAO->insert($post), JSON_NUMERIC_CHECK);
    exit();
});

//DELETE -> /todos/:id
$app->delete('/todos/:id/?', function($id) use ($tweetDAO){
    header("Content-Type: application/json");
    echo json_encode($tweetDAO->delete($id));
    exit();
});

//PUT -> /todos/:id
$app->put('/todos/:id/?', function($id) use ($app, $tweetDAO){
    header("Content-Type: application/json");
    $post = $app->request->post();
    if(empty($post)){
        $post = (array) json_decode($app->request()->getBody());
    }
    echo json_encode($tweetDAO->update($id, $post), JSON_NUMERIC_CHECK);
    exit();
});

//GET -> /todos/tags/:tag => alle todos met een specifieke hashtag ophalen
$app->get('/todos/tags/:tag/?', function($tag) use ($tweetDAO){
    header("Content-Type: application/json");
    echo json_encode($tweetDAO->selectByTag($tag), JSON_NUMERIC_CHECK);
    exit();
});



