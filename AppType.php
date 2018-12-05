<?php

namespace andmemasin\survey;

use yii\base\Component;

/**
 *
 * Class AppType
 * @package andmemasin\surveyapp\models
 */
class AppType extends Component
{
    /** @const Type of App - this must be in line with SurveyHub AppType */
    const TYPE_SYSTEM           = 1;
    const TYPE_CATI             = 2;
    const TYPE_WEB_PANEL        = 3;
    const TYPE_WEB              = 4;
    const TYPE_F2F              = 5;
    const TYPE_RESPONDENT_HUB   = 6;

    /** @var  string $code */
    public $code;

    /** @var  string $label */
    public $label;

}