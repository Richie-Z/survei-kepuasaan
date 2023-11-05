<?php

namespace App\Livewire\Admin;

use App\Repository\RespondentRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Dashboard extends Component
{
    public string $filterDate = "";
    public Collection $respondents;


    public function __construct(
        protected RespondentRepository $respondentRepository = new RespondentRepository(),
    ) {
    }

    public function mount(): void
    {
        $this->updateRespondents();
    }

    public function updated(): void
    {
        $this->updateRespondents();
        $this->dispatch('filter-update', $this->getMontlyRespondent());
    }

    public function render(): View
    {
        return view('livewire.admin.dashboard')->title("Dashboard");
    }

    private function updateRespondents(): void
    {
        $this->respondents = $this->respondentRepository->getRespondents(
            $this->filterDate == "" ? null : Carbon::createFromFormat('Y-m', $this->filterDate)
        );
    }

    #[Computed()]
    public function getMontlyRespondent(): array
    {
        $data = [];
        for ($i = 1; $i  <= 12; $i++) {
            $year = $this->filterDate == "" ? Carbon::now()->year : explode('-', $this->filterDate)[0];
            $data[] = $this->respondentRepository->getRespondents(Carbon::createFromFormat('Y-m', "$year-$i"))->count();
        }
        return $data;
    }
}
