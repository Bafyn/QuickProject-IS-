<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{
    public static function headerLocation($location = '/')
    {
        header("Location: $location");
    }
    static function start()
	{
            // контроллер и действие по умолчанию
                $controller_name = 'Main';
                $action_name = 'index';

                $routes = explode('/', $_SERVER['REQUEST_URI']);
                //parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY));
                //var_dump(parse_url($_SERVER['REQUEST_URI']));
                //echo $reg;

            // получаем имя контроллера
            if ( !empty($routes[1]) )
            {	
                $controller_name = $routes[1];
            }
            // получаем имя экшена
            if ( !empty($routes[2]) )
            {
                $action_name = $routes[2];
            }
            if($controller_name == "Main")
            {
                Route::headerLocation("/login");
            }
            // добавляем префиксы
            $model_name = 'Model_'.$controller_name;
            $controller_name = 'Controller_'.$controller_name;
            $action_name = 'action_'.$action_name;
                
            // подцепляем файл с классом модели (файла модели может и не быть)
            $model_file = strtolower($model_name).'.php';
            $model_path = "models/".$model_file;
            if(file_exists($model_path))
            {
                require_once "models/".$model_file;
            }

            // подцепляем файл с классом контроллера
            $controller_file = strtolower($controller_name).'.php';
            $controller_path = "controllers/".$controller_file;
            if(file_exists($controller_path))
            {
                require_once "controllers/".$controller_file;
            }
            else
            {
                Route::ErrorPage404();
                return true;
            }

            // создаем контроллер
            $controller = new $controller_name;
            $action = $action_name;
            if(method_exists($controller, $action))
            {
                $controller->$action();
            }
            else
            {
                Route::ErrorPage404();
                return true;
            }
        }
	function ErrorPage404()
	{
            echo "404";
            return true;
        }
}
