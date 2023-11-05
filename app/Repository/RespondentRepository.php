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

    public function getRespondent(mixed $respondentId): ?Respondent
    {
        return $this->model->findOrFail($respondentId);
    }

    public function getRespondents(): Collection
    {
        return $this->model->all();
    }

    public function addRespondent(array $data): Respondent
    {
        return Respondent::create($data);
    }
}
