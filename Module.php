<?php

namespace wdmg\bookmarks;

/**
 * Yii2 Bookmarks
 *
 * @category        Module
 * @version         0.0.5
 * @author          Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 * @link            https://github.com/wdmg/yii2-bookmarks
 * @copyright       Copyright (c) 2019 W.D.M.Group, Ukraine
 * @license         https://opensource.org/licenses/MIT Massachusetts Institute of Technology (MIT) License
 *
 */

use Yii;
use wdmg\base\BaseModule;

/**
 * bookmarks module definition class
 */
class Module extends BaseModule
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'wdmg\bookmarks\controllers';

    /**
     * {@inheritdoc}
     */
    public $defaultRoute = 'bookmarks/index';

    /**
     * @var string, the name of module
     */
    public $name = "Bookmarks";

    /**
     * @var string, the description of module
     */
    public $description = "Bookmarks storage module";

    /**
     * @var string the module version
     */
    private $version = "0.0.5";

    /**
     * @var integer, priority of initialization
     */
    private $priority = 10;

    public function bootstrap($app)
    {
        parent::bootstrap($app);

        // Configure options component
        $app->setComponents([
            'bookmarks' => [
                'class' => Bookmarks::className()
            ]
        ]);
    }
}