<?php

namespace App\Livewire\Landing;

use App\Repository\AgeRepository;
use App\Repository\EducationRepository;
use App\Repository\JobRepository;
use App\Repository\QuestionRepository;
use App\Repository\ServiceTypeRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public Collection $ageDatas;
    public Collection $educationDatas;
    public Collection $jobDatas;
    public Collection $serviceTypeDatas;
    public Collection $questionDatas;

    public string $name = "";
    public string $phoneNumber = "";
    public string $gender = "";
    public string $ageId = "";
    public string $jobId = "";
    public string $job = "";
    public string $serviceTypeId = "";

    public function __construct(
        protected AgeRepository $ageRepository = new AgeRepository(),
        protected EducationRepository $educationRepository = new EducationRepository(),
        protected JobRepository $jobRepository = new JobRepository(),
        protected ServiceTypeRepository $serviceTypeRepository = new ServiceTypeRepository(),
        protected QuestionRepository $questionRepository = new QuestionRepository(),
    ) {
    }

    public function mount(): void
    {
        $this->ageDatas = $this->ageRepository->getAges();
        $this->educationDatas = $this->educationRepository->getEducations();
        $this->jobDatas = $this->jobRepository->getJobs();
        $this->serviceTypeDatas = $this->serviceTypeRepository->getServiceTypes();
        $this->questionDatas = $this->questionRepository->getQuestions();
    }

    #[Layout('layouts.landing.app')]
    public function render(): View
    {
        return view('livewire.landing.index');
    }
}
