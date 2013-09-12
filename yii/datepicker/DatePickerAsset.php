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

    public $depends = array('yii\web\JqueryAsset');

    public function init()
    {
        $this->sourcePath = Yii::getAlias('@yii/datepicker/assets');
        $this->js[] = YII_DEBUG ? 'js/jquery.datepicker.js' : 'js/jquery.datepicker.min.js';
        $this->css[] = YII_DEBUG ? 'css/datepicker.css' : 'js/datepicker.min.css';
    }

}