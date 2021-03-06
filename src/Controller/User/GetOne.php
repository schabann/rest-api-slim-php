<?php declare(strict_types=1);

namespace App\Controller\User;

use Slim\Http\Request;
use Slim\Http\Response;

class GetOne extends Base
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $user = $this->getUserService()->getOne((int) $args['id']);

        return $this->jsonResponse($response, 'success', $user, 200);
    }
}
