<?php

/**
 *
 * frontend controller
 */
class App
{
    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];
    public function __construct()
    {
        # code...
        $this->prepareURL();
        $this->render();
    }
    /**
     * extract controller and method and params
     * @return void
     */
    private function prepareURL()
    {
        $url =  $_SERVER['QUERY_STRING'];

        if(!empty($url)) {
            $url = trim($url, "/");
            $url = explode('/', $url);
            // define the controller
            $this->controller = isset($url[0]) ? ucwords($url[0])."controller" : "HomeController";
            // define the action
            $this->action = isset($url[1]) ? $url[1] : "index";
            // to remove home and index from url array
            unset($url[0],$url[1]);
            // define the params
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }
/**
 * check if class exist
 */
    private function render()
    {
        # code...
        if(class_exists($this->controller)) {
            $controller = new $this->controller();
            if(method_exists($controller, $this->action)) {
                call_user_func_array([$controller, $this->action], $this->params);

            } else {
                echo "Method Not Exist";
            }


        } else {
            echo "This controller : ".$this->controller." Not Exist";
        }
    }
}
