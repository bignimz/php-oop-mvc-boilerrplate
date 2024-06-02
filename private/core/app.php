<?php 

// Main App file

final class App
{
    protected $controller = "home";
    protected $method = "index";
    protected $params = array();

    public function __construct() {

        $URL = $this->getURL();
        if(file_exists("../private/controllers/" . $URL[0] . ".php"))
        {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        }

        require "../private/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();

        if(isset($URL[1]))
        {
            if(method_exists($this->controller, $URL[1]))
            {
                $this->method = ucfirst($URL[1]);
                unset($URL[1]);
            }
        }

        $URL = array_values($URL);
        $this->params = $URL;
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Generate clean URL
    private function setURL():array
    {
        // Get the url string
        $url = isset($_GET['url']) ? trim($_GET['url'], "/") : 'home';
        
        // split the urls with a slash and sanitize it
        return explode("/", filter_var($url),FILTER_SANITIZE_URL);
    }

    // Get clean URL
    private function getURL():array
    {
        return $this->setURL();
    }
}
