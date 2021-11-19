<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SurveyAnswer;

class Survey extends Model
{
    public function answers()
    {
        return $this->hasMany(SurveyAnswer::class, 'survey_id', 'id');
    }
}
