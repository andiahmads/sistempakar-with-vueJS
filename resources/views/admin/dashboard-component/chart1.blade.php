




    <div id="chart1"></div>





@push('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.chart('chart1', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Total Hasil Diagnosa Tingakat Narstik User'
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: [{
                    name: 'Tinggi',
                    y: {{count($tinggi)}},
                    sliced: true,
                    selected: true
                }, {
                    name: 'Sedang',
                    y: {{count($sedang)}}
                }, {
                    name: 'Rendah',
                    y: {{count($rendah)}}
                },]
            }]
        });
    </script>
@endpush
