<?php

use App\controller\DefaultController;
use App\controller\HttpController;
use App\controller\SecurityController;
use App\controller\FileController;
use App\controller\Controller;
use App\model\Route;
use App\model\Router;

$request = $_SERVER["REQUEST_URI"] ?? "/";

$router = (new Router())
//    ->addRoute(new Route("/student", StudentController::class, "list"))
    ->addRoute(new Route("^\/login$", SecurityController::class, "login"))
    ->addRoute(new Route("^\/auth$", SecurityController::class, "auth"))
    ->addRoute(new Route("^\/logout$", SecurityController::class, "logout"))
    ->addRoute(new Route("^\/about$", DefaultController::class, "page"))
    ->addRoute(new Route("^\/contacts$", DefaultController::class, "page"))
    ->addRoute(new Route("^\/uploads$", FileController::class, "list"))
    ->addRoute(new Route("^\/uploadfiles$", DefaultController::class, "page"))
    ->addRoute(new Route("^\/file-upload$", FileController::class, "upload"))
    ->addRoute(new Route("^\/clearfiles$", FileController::class, "clear"))
    ->addRoute(new Route("^\/$", DefaultController::class, "index"))
    ->addRoute(new Route("^\/remove-file/(.+)$", FileController::class, "removeFile"))
    ->addRoute(new Route("^\/downloadimagespage$", DefaultController::class, "page"))
    ->addRoute(new Route("^\/downloadpage", HttpController::class, "downloadimages"))
    ->addRoute(new Route("^\/test", HttpController::class, "test"))
;

$router->execute($request);
