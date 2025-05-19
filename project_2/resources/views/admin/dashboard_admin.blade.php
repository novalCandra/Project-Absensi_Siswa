@extends('layout')

@section('konten')
<link rel="stylesheet" href="{{ asset('/css/DashboardAdmin.css')}}">
<div class="dashboard-container">
    <div class="row">
        <!-- Card untuk Total Jurusan -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="stat-card jurusan-card">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Jumlah Jurusan</h5>
                        <p class="card-value">{{ $totalJurusan }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card untuk Total Guru -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="stat-card guru-card">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Jumlah Guru</h5>
                        <p class="card-value">{{ $totalGuru }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card untuk Total Siswa -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="stat-card siswa-card">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Jumlah Siswa</h5>
                        <p class="card-value">{{ $jumlahSiswa }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-right">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Distribusi kelas perjurusan</div>

                <div class="card-body">
                    <canvas id="kelasChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('kelasChart').getContext('2d');
        const kelasChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: @json($labels),
                datasets: [{
                    data: @json($counts),
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Distribusi kelas perjurusan',
                        font: {
                            size: 16
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = Math.round((value / total) * 100);
                                return `${label}: ${value} kelas (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });
    });
</script>
@endsection()