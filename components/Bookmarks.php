<?php

namespace wdmg\bookmarks\components;


/**
 * Yii2 Bookmarks
 *
 * @category        Component
 * @version         0.0.4
 * @author          Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 * @link            https://github.com/wdmg/yii2-bookmarks
 * @copyright       Copyright (c) 2019 W.D.M.Group, Ukraine
 * @license         https://opensource.org/licenses/MIT Massachusetts Institute of Technology (MIT) License
 *
 */

use Yii;
use yii\base\Component;
use yii\base\InvalidArgumentException;

class Bookmarks extends Component
{

    protected $model;

    /**
     * Initialize the component
     *
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();
        $this->model = new \wdmg\bookmarks\models\Bookmarks;
    }

    /**
     * {@inheritdoc}
     */
    public function __get($param) {
        return parent::__get($param);
    }

    /**
     * {@inheritdoc}
     */
    public function __set($param, $value) {
        return parent::__set($param, $value);
    }

}

?>