<?php

namespace App\Controller;

use  Dwoo\Core;

class viewHome
{

    public function home($request, $response, $args)
    {
        $core = new Core();
        $data= array(
            'appName' => 'Page teste',
        ); 
        $template = $core->get(__DIR__.'/../../resources/index.tpl', $data); 
        $response->getBody()->write($template); 
        return $response;
    }

}