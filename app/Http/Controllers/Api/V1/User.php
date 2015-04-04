<?php namespace Transorder\Http\Controllers\Api\V1;

use Illuminate\Contracts\Routing\ResponseFactory as Response;
use Illuminate\Http\Request;
use Transorder\Http\Controllers\Controller;
use Transorder\User as UserModel;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class User extends Controller
{


    /**
     * @var Requests
     */
    private $request;
    /**
     * @var Response
     */
    private $response;
    /**
     * @var AuthenticationModel
     */
    private $user;
    /**
     * @var JWTAuth
     */
    private $JWTAuth;

    public function __construct(Request $request, Response $response, UserModel $user, JWTAuth $JWTAuth)
    {
        $this->request = $request;
        $this->response = $response;
        $this->user = $user;
        $this->JWTAuth = $JWTAuth;
    }

    public function user()
    {
        try {
            $this->JWTAuth->parseToken()->toUser();
        } catch (JWTException $e) {
            return $this->response->json(['error' => $e->getMessage()], 401);
        }

        return $this->response->json(['data' => 'This has come from a dedicated API subdomain with restricted access.']);

    }
}
