<div class="card-body col-md-7">
    <div id="chart1"></div>
</div>
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
                    name: 'Yakin',
                    y: {{count($arrayyakin)}},
                    sliced: true,
                    selected: true
                }, {
                    name: 'Mungkin',
                    y: {{count($arraymungkin)}}
                }, {
                    name: 'Tidak Yakin',
                    y: {{count($arraytidakyakin)}}
                },]
            }]
        });
    </script>


@endpush



