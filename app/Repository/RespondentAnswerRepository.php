<?php

namespace App\Repository;

use App\Models\RespondentAnswer;
use Illuminate\Database\Eloquent\Collection;

class RespondentAnswerRepository
{
    public function __construct(
        protected RespondentAnswer $model = new RespondentAnswer()
    ) {
    }

    public function addRespondentAnswer(array $data): RespondentAnswer
    {
        return RespondentAnswer::create($data);
    }
}
