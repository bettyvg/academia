// Dashboard 1 Morris-chart

Morris.Area({
        element: 'extra-area-chart',
        pointSize: 0,
        fillOpacity: 0.99,
        pointStrokeColors:['#65b12d', '#933EC5 ', '#006DF0'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth:0,
        hideHover: 'auto',
        lineColors: ['#65b12d', '#933EC5 ', '#006DF0'],
        resize: true

    });
	
Morris.Area({
        element: 'extra-area-chart',
        data: [{
            period: '2010',
            ESC: 50,
            ITN: 80,
            EICP: 20,
            EAI: 50

        }, {
            period: '2011',
            ESC: 130,
            ITN: 100,
            EICP: 80,
            EAI: 60
        }, {
            period: '2012',
            ESC: 80,
            ITN: 60,
            EICP: 70,
            EAI: 80
        }, {
            period: '2013',
            ESC: 70,
            ITN: 200,
            EICP: 140,
            EAI: 60
        }, {
            period: '2014',
            ESC: 180,
            ITN: 150,
            EICP: 140,
            EAI: 60
        }, {
            period: '2015',
            ESC: 105,
            ITN: 100,
            EICP: 80,
            EAI: 60
        },
         {
            period: '2016',
            ESC: 250,
            ITN: 150,
            EICP: 200,
            EAI: 60
        }],
        xkey: 'period',
        ykeys: ['ESC', 'ITN', 'EICP', ],
        labels: ['ESC', 'ITN', 'EICP'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#006DF0', '#933EC5', '#65b12d'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 1,
        hideHover: 'auto',
        lineColors: ['#006DF0', '#933EC5', '#65b12d'],
        resize: true
        
    });