<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Palindrome.php';


    $app = new Silex\Application();
    $app['debug'] = true;

    // $app->register(
    //     new Silex\Provider\TwigServiceProvider(),
    //     array('twig.path' => __DIR__.'/../views')
    // );

    $app->get('/', function() use ($app) {
        return 'hello';
        


        // return $app['twig']->render(
        //     'anagram.html.twig',
        //     array(
        //         "actual_anagrams" => $actual_anagrams,
        //         "target_word" => $target_word,
        //         "possible_anagrams" => $possible_anagrams
        //     )
        // );
    });

    return $app;
?>
