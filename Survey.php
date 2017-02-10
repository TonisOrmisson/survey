<?php

namespace andmemasin\survey;
class Survey
{
    /** The action name of the Get-new-key in SurveyHub */
    const ACTION_SURVEY_GETNEWKEY = "survey/get-new-key";

    /** The action name of the Get-new-key in SurveyHub */
    const ACTION_RESPONDENT_GETNEWKEY = "respondent/get-new-key";

    /** The action name of the Get-new-key in SurveyHub */
    const ACTION_RESPONSE_GETNEWKEY = "response/get-new-key";

    /** The action name of the Set-status in SurveyHub */
    const ACTION_SURVEY_SETNEWSTATUS = "survey/set-status";

    /** The action name of the Set-status in SurveyHub */
    const ACTION_RESPONDENT_SETNEWSTATUS = "respondent/set-status";

    /** The action name of the get-status in SurveyHub */
    const ACTION_SURVEY_GETNEWSTATUS = "survey/get-status";

    /** The action name of the get-status in SurveyHub */
    const ACTION_RESPONDENT_GETNEWSTATUS = "respondent/get-status";

    /** The action name of the view respondent in SurveyHub */
    const ACTION_RESPONDENT_GET = "respondent/view";

    /** The action name of the get-apps in SurveyHub */
    const ACTION_SURVEY_GETAPPS = "survey/get-apps";

    /** The action name of the validate survey */
    const ACTION_SURVEY_VALIDATE = "survey/validate";

    /** The action name of the validate respondent */
    const ACTION_RESPONDENT_VALIDATE = "respondent/validate";
}