<?php

namespace App\Repository;

use App\Models\RespondentAnswer;

class RespondentAnswerRepository
{
    public function __construct(
        protected RespondentAnswer $model = new RespondentAnswer(),
    ) {
    }

    public function addRespondentAnswer(array $data): RespondentAnswer
    {
        return RespondentAnswer::create($data);
    }
}
