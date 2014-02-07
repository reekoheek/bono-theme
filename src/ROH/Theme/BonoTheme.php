<?php

namespace ROH\Theme;

use \ROH\BonoComponent\PlainTable;
use \ROH\BonoComponent\PlainForm;

class BonoTheme extends \Bono\Theme\Theme {

    protected $overwrite;

    public function __construct($app, $config) {
        $config['baseDir'] = realpath(dirname(__FILE__).'/../../..').'/';
        parent::__construct($app, $config);

        $app->filter('css', function($file) {
            if ($this->app->config('bono.debug')) {
                $src = $this->getPath(substr($file, 1));
                $dest = dirname($_SERVER['SCRIPT_FILENAME']).$file;
                if ($this->overwrite || !is_readable($dest)) {
                    $dir = dirname($dest);
                    if (!is_readable($dir)) {
                        mkdir($dir, 0755, 1);
                    }
                    copy($src, $dest);
                }
            }
            return $file;
        }, 1);

        $app->filter('table', function($entries) use ($app) {

            $t = new PlainTable($app->controller->clazz);
            return $t->show($entries);
        });

        $app->filter('form', function($entry) use ($app) {
            $f = new PlainForm($app->controller->clazz);
            return $f->renderFields($entry);
        });

        $app->filter('form.ro', function($entry) use ($app) {
            $f = new PlainForm($app->controller->clazz);
            return $f->renderReadonlyFields($entry);
        });
    }

}