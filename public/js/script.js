const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
const precos = [100, 150, 80, 200, 120, 250, 189, 160];
const dinheiroGuardado = [1000, 1500, 1800, 2500, 3200, 4000, 600, 20.000];


const ctx = document.getElementById('barChart').getContext('2d');
const ctxLine = document.getElementById('lineChart').getContext('2d');


const barChart = new Chart(ctx, {
    type: 'bar',
    data: {

        labels: meses,
        datasets: [{
            label: 'Preço (R$)',
            data: precos,
            backgroundColor: 'rgb(151, 246, 117)',
            borderColor: 'rgb(151, 246, 118)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Preço (R$)'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Mês'
                }
            }
        }
    }
});

const lineChart = new Chart(ctxLine, {
    type: 'line',
    data: {
        labels: meses,
        datasets: [{
            label: 'Evolução do Dinheiro Guardado',
            data: dinheiroGuardado,
            fill: false,
            backgroundColor: 'rgb(151, 246, 117)',
            borderColor: 'rgb(151, 246, 117)',
            tension: 0.4
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Dinheiro Guardado (R$)'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Mês'
                }
            }
        }
    }
});