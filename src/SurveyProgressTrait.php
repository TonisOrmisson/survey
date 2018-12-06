<?php

namespace andmemasin\survey;


/**
 * Trait SurveyProgressTrait
 * @package andmemasin\survey
 * @author Tõnis Ormisson <tonis@andmemasin.eu>
 *
 * @property float $fullProgress
 *
 */
trait SurveyProgressTrait
{
    /** @var string $surveyKey survey unique key */
    public $surveyKey = "";

    /** @var string $surveyName */
    public $surveyName = "";

    /** @var integer $targetCount */
    public $targetCount = 0;

    /** @var integer $totalSampleCount */
    public $totalSampleCount = 0;

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

    /**
     * @return float
     */
    public function getFullProgress()
    {
        return (float) $this->fullCount / $this->targetCount;
    }

}