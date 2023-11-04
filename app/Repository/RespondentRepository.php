<?php

namespace App\Repository;

use App\Models\Respondent;
use Illuminate\Database\Eloquent\Collection;

class RespondentRepository
{
    public function __construct(
        protected Respondent $model = new Respondent()
    ) {
    }

    public function getRespondents(): Collection
    {
        return $this->model->all();
    }
}
