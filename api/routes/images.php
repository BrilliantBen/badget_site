<?php

$imageDAO = new ImageDAO();


$app->get('/images/?',function() use ($imageDAO){
    header("Content-Type: application/json");
    echo json_encode($imageDAO->selectAll(), JSON_NUMERIC_CHECK);
    exit();
});

$app->get('/images/:id/?', function($id) use ($imageDAO){
    header("Content-Type: application/json");
    echo json_encode($imageDAO->selectById($id), JSON_NUMERIC_CHECK);
    exit();
});

$app->post('/images/?', function() use ($app, $imageDAO){
    header("Content-Type: application/json");
    $post = $app->request->post();
    if(empty($post)){
        $post = (array) json_decode($app->request()->getBody());
    }
    echo json_encode($imageDAO->insert($post), JSON_NUMERIC_CHECK);
    exit();
});


$app->delete('/images/:id/?', function($id) use ($imageDAO){
    header("Content-Type: application/json");
    echo json_encode($imageDAO->delete($id));
    exit();
});


$app->put('/images/:id/?', function($id) use ($app, $imageDAO){
    header("Content-Type: application/json");
    $post = $app->request->post();
    if(empty($post)){
        $post = (array) json_decode($app->request()->getBody());
    }
    echo json_encode($imageDAO->update($id, $post), JSON_NUMERIC_CHECK);
    exit();
});

$app->get('/images/concerts/:concert/?', function($concert) use ($imageDAO){
    header("Content-Type: application/json");
    echo json_encode($imageDAO->selectByConcert($concert), JSON_NUMERIC_CHECK);
    exit();
});



