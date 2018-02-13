<?php

$isAdmin = function ($request, $response, $next) {
    // $response->getBody()->write('BEFORE');
    $response = $next($request, $response);

    
  
    return $response;
};