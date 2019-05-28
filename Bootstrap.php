<?php

namespace wdmg\bookmarks;

/**
 * @author          Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 * @copyright       Copyright (c) 2019 W.D.M.Group, Ukraine
 * @license         https://opensource.org/licenses/MIT Massachusetts Institute of Technology (MIT) License
 */

use yii\base\BootstrapInterface;
use Yii;
use wdmg\bookmarks\components\Bookmarks;


class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        // Get the module instance
        $module = Yii::$app->getModule('bookmarks');

        // Get URL path prefix if exist
        if (isset($module->routePrefix)) {
            $app->getUrlManager()->enableStrictParsing = true;
            $prefix = $module->routePrefix . '/';
        } else {
            $prefix = '';
        }

        // Add module URL rules
        $app->getUrlManager()->addRules(
            [
                $prefix . '<module:bookmarks>/' => '<module>/bookmarks/index',
                $prefix . '<module:bookmarks>/<controller:\w+>/' => '<module>/<controller>',
                $prefix . '<module:bookmarks>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                [
                    'pattern' => $prefix . '<module:bookmarks>/',
                    'route' => '<module>/bookmarks/index',
                    'suffix' => '',
                ], [
                    'pattern' => $prefix . '<module:bookmarks>/<controller:\w+>/',
                    'route' => '<module>/<controller>',
                    'suffix' => '',
                ], [
                    'pattern' => $prefix . '<module:bookmarks>/<controller:\w+>/<action:\w+>',
                    'route' => '<module>/<controller>/<action>',
                    'suffix' => '',
                ],
            ],
            true
        );

        // Configure options component
        $app->setComponents([
            'bookmarks' => [
                'class' => Bookmarks::className()
            ]
        ]);
    }
}