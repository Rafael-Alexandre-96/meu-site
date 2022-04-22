<?php

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouteSwitch {
  public function run(string $requestUri) {
    /*$requestUri = explode('/', $requestUri);
    $destino = $requestUri[2];*/

    $destino = substr($requestUri, 1);

    if ($destino === '') {
        $this->home();
    } elseif ($destino == 'Sobre') {
        $this->sobre();
    } elseif ($destino == 'Projetos') {
        $this->projetos();
    } elseif ($destino == 'Contato') {
      $this->contato();
    } else {
      $this->error404();
    }
  }
}