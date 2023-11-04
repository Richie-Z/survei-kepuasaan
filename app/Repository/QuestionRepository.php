<?php

namespace App\Repository;

use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;

class QuestionRepository
{
    public function __construct(
        protected Question $model = new Question()
    ) {
    }

    public function getQuestions(): Collection
    {
        return $this->model->all();
    }
}
