
//******************************HIGHTCHATJS*************************************** */
 
document.addEventListener('DOMContentLoaded', function () {
    var myChart = Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: ''
        },
        xAxis: {
            categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul','Ago','Set','Out', 'Nov', 'Dez'],
            
        },
        yAxis: {
            title: {
                text: 'Quantidade Por Mês'
            },
            
        },
       
        series: [
        {
        name: 'Política',
        data: [19, 56, 34, 44, 24, 99,23,45,62,46,57,76],
        },
        {
        name: 'Economia',
        data: [3, 56, 34, 49, 25, 39,41,57,34,57,89,90 ],
          
        },
        {
        name: 'Esporte',
        data: [23,45,34,2,3,54,37,5,72,62,64,12],
        },
        {
        name: 'Policial',
        data: [5,14,25,25,67,54,43,98,65,43,48,43 ],
        },
        {
        name: 'Mundo',
        data: [14,69,53,12,34,46,24,46,43,23,12,34 ],
        },
        {
        name: 'Cultura',
        data: [12,34,32,15,12,32,54,21,23,42,53,13 ],
        }
    ], //END_SERIES
     plotOptions: {
          
        },
    });
});

//


///*********************************CHARTJS*********************************** */



var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    title: 'LINHA DO TEMPO',
    // The data for our dataset
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Ago','Set', 'Oct', 'Nov' ,'Dez'],
        datasets: [{
            label: 'Linha do tempo',
            backgroundColor: 'rgba(255, 255, 255, 0)',
            borderColor: '#302b63' ,
            data: [23, 19, 20, 21, 20, 24, 25, 17, 19, 18, 22, 21],
          
        }]
      
    },

    // Configuration options go here
    options: {
        backgroundColor: '#ffffff',
    }

    
});

//