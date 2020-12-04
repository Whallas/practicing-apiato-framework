<?php

/**
 * @apiGroup           Car
 * @apiName            createNewCar
 *
 * @api                {POST} /v1/cars Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('cars', [
    'as' => 'api_car_create_new_car',
    'uses'  => 'Controller@createNewCar',
    'middleware' => [
        'auth:api',
    ],
]);
