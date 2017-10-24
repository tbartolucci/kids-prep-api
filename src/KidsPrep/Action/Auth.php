<?php
namespace KidsPrep\Action;

use KidsPrep\Http\Request;
use KidsPrep\Http\Response;

class Auth
{
    /**
     * @var \Slim\App
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function login(Request $request, Response $response)
    {

    }
}