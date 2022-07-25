<?php

function renderView($titulo, $conteudo, $renderHeader = true, $renderFooter = true) {
  $page = file_get_contents(__DIR__ . '/pages/page.html');
  $page = str_replace('{{titulo}}', $titulo, $page);

  $header = ($renderHeader == true) ? file_get_contents(__DIR__ . '/pages/header.html') : '';
  $page = str_replace('{{header}}', $header, $page);

  $view_patch = str_replace('{{main}}', $conteudo, '/pages/{{main}}.html');
  $main = file_get_contents(__DIR__ . $view_patch);
  $page = str_replace('{{main}}', $main, $page);

  $footer = ($renderFooter == true) ? file_get_contents(__DIR__ . '/pages/footer.html') : '';
  $page = str_replace('{{footer}}', $footer, $page);

  $page = str_replace('{{a:linkedin}}', 'https://www.linkedin.com/in/rafael-alexandre-766793bb/', $page);
  $page = str_replace('{{a:github}}', 'https://github.com/Rafael-Alexandre-96', $page);

  echo $page;
}