<?php

namespace App\Repository;

use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;

class JobRepository
{
    public function __construct(
        protected Job $model = new Job()
    ) {
    }

    public function getJobs(): Collection
    {
        return $this->model->all();
    }
}
