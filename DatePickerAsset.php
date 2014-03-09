<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */

namespace yii\datepicker;
/**
 * Description of DateTimePicker
 * @property type $name Description
 */
class DatePickerAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@vendor/yiidoc/yii2-datepicker/assets';
    public $depends = array('yii\bootstrap\BootstrapAsset');

    public function init()
    {
        $this->js[] = YII_DEBUG ? 'js/jquery.bootstrap-datepicker.js' : 'js/jquery.bootstrap-datepicker.min.js';
        $this->css[] = YII_DEBUG ? 'css/bootstrap3.datepicker.css' : 'css/bootstrap3.datepicker.min.css';
    }

}