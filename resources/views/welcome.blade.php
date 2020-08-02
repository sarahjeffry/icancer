@extends('layouts.main')

@yield('styles')

<link rel="stylesheet" href="{{ asset('css\visualizations.css') }}">

@section('content')

    <div class="outer-card" style="clear: both;">

        <table class="visual">
            <thead>
                <td>
                    <h3>Demographic</h3>
                    <h5>Number of cancer occurences by year</h5>
                </td>
{{--                <td>--}}
{{--                    <h3>Correlation</h3>--}}
{{--                    <h5>Smoking patients suffer from lung cancer</h5>--}}
{{--                </td>--}}
                <td>
                    <h3>Trends</h3>
                    <h5>Rate of cancer deaths </h5>
                </td>
            </thead>
            <td>
                <div class="cards" >
                    <canvas id="demographic" width="70" height="60"></canvas>
                </div>
            </td>
{{--            <td>--}}
{{--                <div class="cards" >--}}
{{--                    <canvas id="correlation" width="70" height="60"></canvas>--}}
{{--                </div>--}}
{{--            </td>--}}
            <td>
                <div class="cards" >
                    <canvas id="trends" width="70" height="60"></canvas>
                </div>
            </td>
        </table>
    </div>

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

<script>

    var ctx = document.getElementById('demographic').getContext('2d');
    var demographic = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2017', '2018', '2019', '2020'],
            datasets: [{
                label: 'Breast',
                data: [12, 19, 6, 3],
                backgroundColor: [
                    '#FF8DCC',
                    '#FF8DCC',
                    '#FF8DCC',
                    '#FF8DCC'
                ],
                borderColor: [
                    '#FE6EBD',
                    '#FE6EBD',
                    '#FE6EBD',
                    '#FE6EBD',
                ],
                borderWidth: 1
            },
                {
                    label: 'Lung',
                    data: [2, 29, 25, 15],
                    backgroundColor: [
                        '#6C8DFC',
                        '#6C8DFC',
                        '#6C8DFC',
                        '#6C8DFC'
                    ],
                    borderColor: [
                        '#577CF8',
                        '#577CF8',
                        '#577CF8',
                        '#577CF8'
                    ],
                    borderWidth: 1
                },
                {
                    label: 'Pancreas',
                    data: [12, 19, 6, 3],
                    backgroundColor: [
                        '#F8735B',
                        '#F8735B',
                        '#F8735B',
                        '#F8735B'
                    ],
                    borderColor: [
                        '#ED4C2F',
                        '#ED4C2F',
                        '#ED4C2F',
                        '#ED4C2F'
                    ],
                    borderWidth: 1
                },
                {
                    label: 'Skin',
                    data: [2, 29, 25, 15],
                    backgroundColor: [
                        '#58BC74',
                        '#58BC74',
                        '#58BC74',
                        '#58BC74'
                    ],
                    borderColor: [
                        '#32AB54',
                        '#32AB54',
                        '#32AB54',
                        '#32AB54'

                    ],
                    borderWidth: 1
                }]
        },
        options: {
            tooltips: {
                mode: 'index',
            }
        }
    });



    var ctx = document.getElementById('trends').getContext('2d');
    var trends = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2017', '2018', '2019', '2020'],
            datasets: [
                {
                    label: 'Breast',
                    data: [22, 26, 25, 32],
                    backgroundColor: '#FF8DCC',
                    borderColor: '#E555A4',
                    fill: false,
                    borderWidth: 2
                },
                {
                    label: 'Lung',
                    data: [25, 39, 45, 43],
                    fill: false,
                    backgroundColor: '#6C8DFC',
                    borderColor: '#3B60DC',
                    borderWidth: 2,
                    lineTension:0.1
                },
                {
                    label: 'Pancreas',
                    data: [12, 29, 25, 15],
                    fill: false,
                    backgroundColor: '#FF693C',
                    borderColor: '#B13C19',
                    borderWidth: 2,
                    lineTension:0.1
                },
                {
                    label: 'Skin',
                    data: [10, 13, 10, 12],
                    fill: false,
                    backgroundColor: '#70BE86',
                    borderColor: '#44B264',
                    borderWidth: 2,
                    lineTension:0.1
                }]
        },
        options: {
            tooltips: {
                mode: 'index',
            }
        }
    });
</script>

@endsection
