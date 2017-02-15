<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Palindrome.php';


    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(
        new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views')
    );

    $app->get('/', function() use ($app) {
        $input_string = "";
        $string_result = "";

        $input_key = 'string_to_test';
        if (array_key_exists($input_key, $_GET)) {
            $input_string = $_GET[$input_key];
            $new_palindrome = new Palindrome;
            $boolean_result = $new_palindrome->palindromeTester($input_string) ;

            if ($boolean_result) {
                $string_result = 'true';
            } else {
                $string_result = 'false';
            }
        }

        return $app['twig']->render(
            'palindrome.html.twig',
            array(
                "string" => $input_string,
                "result" => $string_result
            )
        );
    });

    return $app;
?>
