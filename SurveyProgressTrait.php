<?php

namespace andmemasin\survey;

trait SurveyProgressTrait
{
    /** @var string $surveyKey survey unique key */
    public $surveyKey = "";

    /** @var string $surveyName */
    public $surveyName = "";

    /** @var integer $targetCount */
    public $targetCount = 0;

    /** @var integer $fullCount */
    public $fullCount = 0;

    /** @var integer $closedCount */
    public $closedCount = 0;

    /** @var array */
    public $periods = [];

    /** @var array */
    public $progressData = [];

    /** @var array */
    public $startClicksData = [];

    /** @var array */
    public $rejectClicksData = [];
}