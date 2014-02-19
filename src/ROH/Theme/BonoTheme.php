<?php

namespace ROH\Theme;

use \Bono\App;
use \ROH\BonoComponent\PlainTable;
use \ROH\BonoComponent\PlainForm;

class BonoTheme extends \Bono\Theme\Theme {

    protected $overwrite;

    public function __construct($config) {
        $config['baseDirectories'] = array( dirname(dirname(dirname(dirname(__FILE__)))) );
        // var_dump($config);
        // exit;
        parent::__construct($config);

        // $app->filter('css', function($file) {
        //     if ($this->app->config('bono.debug')) {
        //         $src = $this->getPath(substr($file, 1));
        //         $dest = dirname($_SERVER['SCRIPT_FILENAME']).$file;
        //         if ($this->overwrite || !is_readable($dest)) {
        //             $dir = dirname($dest);
        //             if (!is_readable($dir)) {
        //                 mkdir($dir, 0755, 1);
        //             }
        //             copy($src, $dest);
        //         }
        //     }
        //     return $file;
        // }, 1);

        $app = App::getInstance();

        $app->filter('table', function($entries) use ($app) {

            // $t = new PlainTable($app->controller->clazz);
            // return $t->show($entries);
        });

        $app->filter('form', function($entry) use ($app) {
            // $f = new PlainForm($app->controller->clazz);
            // return $f->renderFields($entry);
        });

        $app->filter('form.ro', function($entry) use ($app) {
            // $f = new PlainForm($app->controller->clazz);
            // return $f->renderReadonlyFields($entry);
        });
    }

}