<?php
class Router {
    static $routers = array();
    static $error_controllers = array();

    static $current_router_name = null;

    static function get_url($name) {
        return HOME_URL . self::$routers[$name]['url'];
    }

    static function path($url, $controller, $name = null) {
        if($name)
            self::$routers[$name] = array(
                'url'   => $url,
                'controller' => $controller
            );
        else
            self::$routers[] = self::$routers[$name] = array(
                'url'   => $url,
                'controller' => $controller
            );
    }
    static function page_not_found($controller) {
        self::$error_controllers['404'] = $controller;
    }
    static function display_page() {
        // Get url
        $requestUri = strtok($_SERVER['REQUEST_URI'], '?');

        // Default url
        $parsedDomainUrl = parse_url(HOME_URL);
        $defaultDomainPath = $parsedDomainUrl['path'] ?? '';
        
        $requestUri = str_replace($defaultDomainPath, '', $requestUri);
        $requestUri = rtrim($requestUri, '/');

        

        $request_found = false;
        foreach(self::$routers as $router_name => $router) {
            if($router['url'] == $requestUri) {
                self::$current_router_name = $router_name;
                $request_found = true;

                $router['controller']->index();
            }
        }

        if(!$request_found)
            self::display_error('404');
    }
    static function display_error($error_code) {
        http_response_code((int)$error_code);

        if(isset(self::$error_controllers['404']))
            self::$error_controllers['404']->index();
        else
            echo 'Error ' . $error_code;
    }
}
?>