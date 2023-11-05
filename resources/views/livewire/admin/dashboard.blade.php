<section class="section">
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Respondent Perbulan</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart" height="158"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="" style="display:flex; align-items:center">
                        <div class="card-stats-title col-md-6">Filter</div>
                        <div class="col-lg-6 col-md-12" style="padding:1rem">
                            <input type="Month" class="form-control" placeholder="Tahun" wire:model.live="filterDate">
                        </div>
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Respondent</h4>
                    </div>
                    <div class="card-body">
                        {{ $respondents->count() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const monthLabel = ["January", "February", "March", "April", "May", "June", "July", "August",
            "September",
            "October", "November", "December"
        ]

        let respondentPerBulanChart;

        function initRespondentPerBulanChart(data) {
            var ctx = document.getElementById("myChart").getContext('2d');
            respondentPerBulanChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: monthLabel,
                    datasets: [{
                        label: 'Respondent',
                        data: data,
                        borderWidth: 2,
                        backgroundColor: 'rgba(63,82,227,.8)',
                        borderWidth: 0,
                        borderColor: 'transparent',
                        pointBorderWidth: 0,
                        pointRadius: 3.5,
                        pointBackgroundColor: 'transparent',
                        pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
                    }, ]
                },
            });
        }
        document.addEventListener('livewire:initialized', () => {
            initRespondentPerBulanChart(@json($this->getMontlyRespondent));
        })
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.on('filter-update', (data) => {
                setTimeout(() => {
                    respondentPerBulanChart.destroy();
                    initRespondentPerBulanChart(data[0]);
                }, 0)
            })
        });
    </script>
</section>
