<?php

namespace App\Repository;

use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Collection;

class ServiceTypeRepository
{
    public function __construct(
        protected ServiceType $model = new ServiceType()
    ) {
    }

    public function getServiceTypes(): Collection
    {
        return $this->model->all();
    }
}
