<?php
/**
 * @author Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

namespace Tests\App;

use Api\Controller\UserController;
use Slim\Http\Request;
use Slim\Http\Response;

class SlimApp
{
    public function handle(Request $request)
    {
        $response = new Response();

        $controller = new UserController();
        $result = false;

        switch ($request->getUri()) {
            case '/v1/user/1':
                $result = $controller->getAction();
                break;
            case '/v1/user':
                $result = $controller->createAction();
                break;
            case '/v1/user/1/friends':
                $result = $controller->getFriendsAction();
                break;
        }

        $response->write(json_encode($result));
        $response->withHeader('Content-Type', 'application/json');

        return $response;
    }
}