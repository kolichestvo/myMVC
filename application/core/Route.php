<?php

class Route
{
    static function start(){
        $params = [];
        $baseController = new Controller();

        //контроллер и действие по умолчанию
        $controllerName = 'Main';
        $actionName = 'Index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        //получаем имя контроллера
        if(!empty($routes[2])){
            $controllerName = ucfirst($routes[2]);
        }

        //получаем имя экшена
        if(!empty($routes[3])){
            $actionName = ucfirst($routes[3]);
        }

        if(!empty($routes[4])){
            for($i = 4; $i<=count($routes); $i++){
                array_push($params,$routes[$i]);
            }
        }

        //добавляем префиксы
        $modelName = $controllerName;
        $controllerName = $controllerName.'Controller';
        $actionName = 'action'.$actionName;

        //подгружаем файл с классом модели
        $modelFile = $modelName.'.php';
        $modelPath = "application/models/".$modelFile;
        if(file_exists($modelPath))
        {
            include $modelPath;
        }

        //подгружаем файл с классом контроллера
        $controllerFile = $controllerName.'.php';
        $controllerPath = 'application/controllers/'.$controllerFile;
        if(file_exists($controllerPath)){
            include $controllerPath;
            //создаем контроллер
            $controller = new $controllerName;
            $action = $actionName;
            if(method_exists($controller, $action)){
                //вызываем действие контроллера
                call_user_func_array(array($controller, $action), $params);
                //$controller->$action();
            }else{
                $baseController->action404();
            }
        }else{
            $baseController->action404();
        }
    }
}