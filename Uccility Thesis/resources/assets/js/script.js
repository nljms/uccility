document.ready(function() {
    
    var orange = 'rgba(2, 117, 216, 1)';
    var purple = 'rgba(252, 115, 73, 1)';
    var darkblue = 'rgba(40, 54, 94, 1)';


    var ctx = $('#line-chart');
    var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ],
            datasets: [
                {
                    label: 'S.Y. 2017-2018 1st Sem',
                    backgroundColor: 'rgba(52, 69, 119, 0.5)',
                    borderColor: 'rgba(52, 69, 119, 0.5)',
                    data: [118, 102, 108, 110, 122, 113, 105, 108, 116, 125, 123, 131]
                },
                {
                    label: 'S.Y. 2017-2018 2nd Sem',
                    backgroundColor: 'rgba(252, 115, 74, 0.5)',
                    borderColor: 'rgba(252, 115, 74, 0.5)',
                    data: [108, 112, 126, 119, 107, 110, 126, 118, 121, 127, 122, 112]
                }
            ]
        }
    });
    
    var ctx2 = $('#piechart-users');
    var pieChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: [
                'Students', 'Professors', 'Others'
            ],
            datasets: [
                {
                    backgroundColor: [orange, purple, darkblue],
                    data: [12023, 3812, 761]
                }
            ]
        }
    });

    var ctx3 = $('#piechart-distribute');
    var pieChart2 = new Chart(ctx3, {
        type: 'pie',
        data: {
            labels: [
                'Main', 'Congressional', 'Camarin'
            ],
            datasets: [
                {
                    backgroundColor: [orange, purple, darkblue],
                    data: [8112, 4112, 3121]
                }
            ]
        }
    });

    var ctx4 = $('#linechart-gwa');
    var lineChart = new Chart(ctx4, {
        type: 'line',
        data: {
            labels: [
                '1st Year', '2nd Year', '3rd Year', '4th Year'
            ],
            datasets: [
                {
                    label: 'GWA Over the Years',
                    backgroundColor: 'rgba(52, 69, 119, 0.5)',
                    data: [1.75, 1.50, 2.00, 1.25]
                }
            ]
        }
    });
});