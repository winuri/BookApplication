@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <!-- Metrics Row -->
    <div class="row mb-3">
        <!-- Active Users -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm text-center p-3 rounded-3">
                <h4 class="fw-semibold">Active Users</h4>
                <h1 class="display-4 fw-bold">{{ $activeUsers }}</h1>
                <small class="text-success">+5</small>
            </div>
        </div>

        <!-- Total Content -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm text-center p-3 rounded-3">
                <h4 class="fw-semibold">Total Content</h4>
                <h2 class="fw-bold">250</h2>
                <small>70% Books, 20% Games, 10% Courses</small>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Top Content -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 rounded-3">
                <h4 class="fw-bold mb-3">Top Content</h4>
                @foreach([['Lorem Ipsum',70,'orange'],['Dolor Sit',85,'navy'],['Diam Nonum',40,'orange'],
                         ['Aiquan Erat',55,'navy'],['Sed Siam',60,'orange'],['Magna Aliqua',75,'navy'],
                         ['Laoreet Sed',50,'orange']] as $item)
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>{{ $item[0] }}</span>
                        <span>Lvl {{ $loop->index + 1 }}</span>
                    </div>
                    <div class="progress" style="height: 8px; border-radius: 8px;">
                        <div class="progress-bar" role="progressbar"
                             style="width: {{ $item[1] }}%; background-color: {{ $item[2] }}; border-radius: 8px;"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Users By Hour Chart + Subscriptions/Earnings -->
        <div class="col-md-8 mb-3">
            <div class="card shadow-sm p-3 rounded-3 mb-3">
                <h4 class="fw-bold mb-3">Users By Hour</h4>
                <canvas id="usersChart" height="100"></canvas>
            </div>

            <!-- Subscriptions & Earnings BELOW Chart -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm text-center p-3 rounded-3">
                        <h6 class="fw-semibold">All Time Subscriptions</h6>
                        <h4 class="fw-bold text-primary">{{ $subscriptions }}</h4>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm text-center p-3 rounded-3">
                        <h6 class="fw-semibold">All Time Earnings</h6>
                        <h4 class="fw-bold text-success">{{ $earnings }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('usersChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: Array(12).fill(''), // no labels, only markers
        datasets: [
            {
                label: 'Users',
                data: [30,60,90,120,150,110,130,100,90,150,140,170],
                backgroundColor: 'navy',
                borderRadius: 6
            }
        ]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: {
            x: { grid: { display: false, drawTicks: true, drawOnChartArea: false } },
            y: { beginAtZero: true }
        },
        interaction: { mode: 'index', intersect: false }
    }
});
</script>
@endsection