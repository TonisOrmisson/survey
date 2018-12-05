<?php

namespace andmemasin\survey;


/**
 *
 * Class AppTypeTrait

 * @package andmemasin\surveyapp\models
 * @property string $label
 * @property string $iconName FA icon name
 */
trait AppTypeTrait
{

    /** @var  string $code */
    public $code;

    /**
     * @return string
     */
    public function getLabel() {
        switch ($this->code) {
            case AppTypeInterface::TYPE_SYSTEM:
                return \Yii::t('survey', "System app");
            case AppTypeInterface::TYPE_CATI:
                return \Yii::t('survey', "CATI");
            case AppTypeInterface::TYPE_WEB_PANEL:
                return \Yii::t('survey', "Online panel");
            case AppTypeInterface::TYPE_WEB:
                return \Yii::t('survey', "Web survey");
            case AppTypeInterface::TYPE_F2F:
                return \Yii::t('survey', "F2F");
            case AppTypeInterface::TYPE_RESPONDENT_HUB:
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
            case AppTypeInterface::TYPE_SYSTEM:
                return 'gear';
            case AppTypeInterface::TYPE_CATI:
                return 'phone';
            case AppTypeInterface::TYPE_WEB_PANEL:
                return 'check';
            case AppTypeInterface::TYPE_WEB:
                return 'chrome';
            case AppTypeInterface::TYPE_F2F:
                return 'tablet';
            case AppTypeInterface::TYPE_RESPONDENT_HUB:
                return 'users';
            default:
                return '';
        }

    }

}