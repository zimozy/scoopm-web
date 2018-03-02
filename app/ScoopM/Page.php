<?php
namespace ScoopM;
class Page {
    public function __construct($page, $container, $code) {
        $this->page = $page;
        $this->container = $container;
        $this->code = $code;
    }
    public function __invoke($request, $response) {
        $response = $this->container->view->render($response, $this->page);
        $response = $response->withStatus($this->code);
        return $response;
   }
}
