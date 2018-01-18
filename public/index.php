<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Core\Routing\RouteUrlMatcher;
use Metinet\Core\Routing\RouteNotFound;
use Metinet\Core\Config\JsonFileLoader;
use Metinet\Core\Config\ChainLoader;
use Metinet\Core\Controller\ControllerResolver;
use Metinet\Core\Config\Configuration;

use Metinet\Domain\DateOfBirth;
use Metinet\Domain\Conference;
use Metinet\Domain\Salle;
use Metinet\Domain\Adresse;

$request = Request::createFromGlobals();

$loader = new ChainLoader([
    new JsonFileLoader([__DIR__ . '/../conf/app.json']),
]);

$config = new Configuration($loader);

$logger = $config->getLogger();

//$test = new DateOfBirth("19/04/1992");

$student1 = new \Metinet\Domain\Student("Jean","Marabou",DateOfBirth::fromString("19/04/1992"),"2017");
$salle = [];
$salle[] = new Salle("0","La Salle 1", new Adresse("0","10 rue des Aubépines","01000","Bourg-en-Bresse"));
$evenements = [];
$evenements[] = new Conference("0","Conférence 1","La description 1","L'objectif 1",$salle[0],20,Date("d/m/Y"),"10h00","11h00",$student1,true);

try {
    $controllerResolver = new ControllerResolver(new RouteUrlMatcher($config->getRoutes()));
    $callableAction = $controllerResolver->resolve($request);
    $response = call_user_func($callableAction, $request);
} catch (RouteNotFound $e) {
    $logger->log($e->getMessage(), ['url' => $request->getPath()]);
    $response = new Response('Page not found', 404);
} catch (Throwable $e) {
    $logger->log($e->getMessage(), ['url' => $request->getPath()]);
    $response = new Response(sprintf('<p>Error: %s</p>', $e->getMessage()), 500);
}

$response->send();
