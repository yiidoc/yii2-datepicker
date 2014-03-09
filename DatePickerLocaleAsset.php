<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */

namespace yii\datepicker;

class DatePickerLocaleAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@vendor/yiidoc/yii2-datepicker/assets';
    public $depends = array('yii\datepicker\DatePickerAsset');

    public function init()
    {
        $this->js[] = YII_DEBUG ? 'js/jquery.bootstrap-datepicker-locales.js' : 'js/jquery.bootstrap-datepicker-locales.min.js';
    }

}