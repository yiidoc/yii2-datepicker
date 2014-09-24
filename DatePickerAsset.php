<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */

namespace yii\datepicker;

class DatePickerAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/bootstrap-datepicker';
    public $depends = ['yii\bootstrap\BootstrapAsset'];
    public $css = ['css/datepicker3.css'];
    public $js = ['js/bootstrap-datepicker.js'];
}
