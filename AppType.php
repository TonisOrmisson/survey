<?php

namespace andmemasin\survey;

use yii\base\Component;

/**
 *
 * Class AppType
 * @package andmemasin\surveyapp\models
 * @property string $label
 * @property string $iconName FA icon name
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

    /**
     * @return string
     */
    public function getLabel() {
        switch ($this->code) {
            case static::TYPE_SYSTEM:
                return \Yii::t('survey', "System app");
            case static::TYPE_CATI:
                return \Yii::t('survey', "CATI");
            case static::TYPE_WEB_PANEL:
                return \Yii::t('survey', "Online panel");
            case static::TYPE_WEB:
                return \Yii::t('survey', "Web survey");
            case static::TYPE_F2F:
                return \Yii::t('survey', "F2F");
            case static::TYPE_RESPONDENT_HUB:
                return \Yii::t('survey', "Responddent-hub");
            default:
                return "";
        }

    }
    /**
     * @return string
     */
    public function getIconName() {
        switch ($this->code) {
            case static::TYPE_SYSTEM:
                return 'gear';
            case static::TYPE_CATI:
                return 'phone';
            case static::TYPE_WEB_PANEL:
                return 'check';
            case static::TYPE_WEB:
                return 'chrome';
            case static::TYPE_F2F:
                return 'tablet';
            case static::TYPE_RESPONDENT_HUB:
                return 'users';
            default:
                return '';
        }

    }

}