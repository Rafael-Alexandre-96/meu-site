<?php

require_once __DIR__ . '/Render.php';

abstract class RouteSwitch {
  protected function home() {
    renderView("DEV", "sobre");
  }

  protected function sobre() {
    renderView("Sobre Mim", "sobre");
  }

  protected function projetos() {
    renderView("Projetos", "projetos");
  }

  protected function contato() {
    renderView("Contato", "contato");
  }

  public function error404() {
    http_response_code(404);
    renderView("404", "error404", false, false);
  }
}