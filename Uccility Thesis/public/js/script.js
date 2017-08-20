$(document).ready(function() {
    var ctx = $('#line-chart');
    var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Jan', 'Feb', 'Mar', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ],
            datasets: [
                {
                    label: 'Some Stuff Here',
                    backgroundColor: 'rgba(52, 69, 119, 0.5)',
                    borderColor: 'rgba(52, 69, 119, 0.5)',
                    hoverBackgroundColor: 'rgba(235,28,42, 1)',
                    hoverBorderColor: 'rgba(235,28,42, 1)',
                    data: [118, 102, 108, 110, 122, 113, 105, 108, 116, 125, 123, 131]
                },
                {
                    label: 'Some Other Stuff Here',
                    backgroundColor: 'rgba(252, 115, 74, 0.5)',
                    borderColor: 'rgba(252, 115, 74, 0.5)',
                    data: [108, 112, 126, 119, 107, 110, 126, 118, 121, 127, 122, 112]
                }
            ]
        }
    });
});