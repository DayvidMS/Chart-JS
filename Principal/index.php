<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart JS</title>
</head>
<body>

    <!-- Start Canvas -> Desenhar elementos graficos usando JS -->
    <canvas id="line-chart" width="auto" height="auto"></canvas>

    <!-- Include Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <script>
       /* Variavel CTX , que representa o contexto */
       var ctx = document.getElementById('line-chart').getContext('2d');

      //o Framework trabalha com 3 tipos de elementos que são:
      //Type(Tipo de dado), Data(Dados,Json,objects) e options

    //instanciar a ctx
      var chartGraph = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ["Jan","Fev","Mar","Abr","Mai","Jun","jul"],
              datesets: [{
                    label: "TAXA DE CLIQUES - 2017",
                    backgroundColor: 'rgb(0,99,132)',
                    borderColor: 'rga(0,99,132)',
                    data: [0,10,55,2,20,30,45],
              }],
          },
      }); 
    </script>

</body>
</html>