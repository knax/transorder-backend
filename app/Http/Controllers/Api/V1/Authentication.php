<?php namespace Transorder\Http\Controllers\Api\V1;

use Illuminate\Contracts\Routing\ResponseFactory as Response;
use Illuminate\Http\Request;
use Transorder\Http\Controllers\Controller;
use Transorder\User as UserModel;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class Authentication extends Controller
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

    public function login()
    {
        $credentials = $this->request->only('username', 'password');
        try {
            if (! $token = $this->JWTAuth->attempt($credentials)) {
                return $this->response->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return $this->response->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return $this->response->json(compact('token'));
    }
}
