<script>
  $(function(){

     var chart_refresh = function(){

       $.ajax({
        url : '/get_data',
        method : 'get',
        dataType : 'json',
        success : function(data){
            $('.bella').val(data.bella)
            $('.jessica').val(data.jessica)
            $('.nezuko').val(data.nezuko)

            var ctx = document.getElementById("myChart").getContext('2d');

            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ["Bella","Jessica","Nezuko"],
                datasets: [{

                  label: "# Votes",

                  data: [
                    $('.bella').val(),
                    $('.jessica').val(),
                    $('.nezuko').val()
                  ],

                  backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)'
                  ],

                  borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)'
                  ],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero:true
                    }
                  }]
                }
              }
            });

            var oilCanvas = document.getElementById("myChartDonut");
            var pieChart = new Chart(oilCanvas, {
              type: 'pie',
              data: {
                labels: [
                    "Jessica",
                    "Bella",
                    "Nezuko"
                ],
                datasets: [
                    {
                        data: [
                          $('.bella').val(),
                          $('.jessica').val(),
                          $('.nezuko').val()
                        ],
                        backgroundColor: [
                            "rgb(255, 99, 132)",
                            "rgb(54, 162, 235)",
                            "rgb(255, 206, 86)"
                        ]
                    }]
                }
            });

        }
       })
     }

    setInterval(chart_refresh, 5000);

  })
</script>