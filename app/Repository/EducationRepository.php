<?php

namespace App\Repository;

use App\Models\Education;
use Illuminate\Database\Eloquent\Collection;

class EducationRepository
{
    public function __construct(
        protected Education $model = new Education()
    ) {
    }

    public function getEducations(): Collection
    {
        return $this->model->all();
    }
}
