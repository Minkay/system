  <!-- jQuery -->
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-more.js"></script>
  <script src="js/exporting.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="js/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="js/gauge.js"></script>
    <script src="js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="js/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="js/skycons.js"></script>
    <!-- Flot -->
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.time.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/jquery.flot.orderBars.js"></script>
    <script src="js/jquery.flot.spline.min.js"></script>
    <script src="js/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="js/date.js"></script>
    <!-- JQVMap -->
    <script src="js/jquery.vmap.js"></script>
    <script src="js/jquery.vmap.world.js"></script>
    <script src="js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <script type="text/javascript">

      


        $(function () {


            var  g1 = parseFloat($("#g1").text()); var  g2 = parseFloat($("#g2").text()); var  g3 = parseFloat($("#g3").text());
             var  g4 = parseFloat($("#g4").text()); var  g5 = parseFloat($("#g5").text());  
            
            Highcharts.chart('cont', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                  
                    
                },
                title: {
                    text: 'GLOBAL AGENCIAS'
                },
			pane: {
			    size: '100%'
			},
			
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 legend: {
                       align: 'right',
                        verticalAlign: 'top',
                        y: 70,
                        layout: 'vertical'
                  },
                series: [{
                    name: 'Agencias',
                    colorByPoint: true,
                    data: [{
                        name: 'Cantidad:' + g4,
                        y: g4
                    }, {
                        name: 'Cantidad:' + g2,
                        y: g2
                    },{
                        name: 'Cantidad:' + g3,
                        y: g3
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });




		//NORTE ORIENTE
				$(function () {


				     var  n1 = parseFloat($("#n1").text()); var  n2 = parseFloat($("#n2").text()); var  n3 = parseFloat($("#n3").text());
             var  n4 = parseFloat($("#n4").text()); var  n5 = parseFloat($("#n5").text());  

				    Highcharts.chart('container', {
				        chart: {
				            plotBackgroundColor: null,
				            plotBorderWidth: null,
				            plotShadow: false,
				            type: 'pie'
				        },
				        title: {
				            text: 'REPORTE NORTE ORIENTE'
				        },
				        pane: {
					            size: '100%'
					        },

				        tooltip: {
				            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				        },
				        plotOptions: {
				            pie: {
				                allowPointSelect: true,
				                cursor: 'pointer',
				                dataLabels: {
				                    enabled: true,
				                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
				                    style: {
				                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
				                    }
				                }

				            }
				        },
				        series: [{
				            name: 'Agencias',
				            colorByPoint: true,
				            data: [{
                        name: 'Cantidad:'+ n4,
                        y: n4
                    }, {
                        name: 'Cantidad:' + n2,
                        y: n2
                    },{
                        name: 'Cantidad:'+ n3,
                        y: n3
                    }]
				        }],
				         colors: ['#fbbd00', '#00ad4e','#fbfb00']
				    });
				});


				//FIN NORTE ORIENTE
				
				//LIMA
				$(function () {

				     var  l1 = parseFloat($("#l1").text()); var  l2 = parseFloat($("#l2").text()); var  l3 = parseFloat($("#l3").text());
             var  l4 = parseFloat($("#l4").text()); var  l5 = parseFloat($("#l5").text());

				    Highcharts.chart('container2', {
				        chart: {
				            plotBackgroundColor: null,
				            plotBorderWidth: null,
				            plotShadow: false,
				            type: 'pie'				           				           
				           
				        },
				        title: {
				            text: 'REPORTE LIMA'
				        },
				        pane: {
					            size: '100%'
					        },

				        tooltip: {
				            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				        },
				       
				        plotOptions: {
				            pie: {
				                allowPointSelect: true,
				                cursor: 'pointer',
				                dataLabels: {
				                    enabled: true,
				                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
				                    style: {
				                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
				                    }
				                }

				            }
				        },
				        series: [{
				            name: 'Agencias',
				            colorByPoint: true,
				             data: [{
                        name: 'Cantidad:' + l4,
                        y: l4
                    }, {
                        name: 'Cantidad:'  + l2,
                        y: l2
                    },{
                        name: 'Cantidad:' + l3,
                        y: l3
                    }]
				        }],
				           colors: ['#fbbd00', '#00ad4e','#fbfb00']
				    });
				});


				//FIN LIMA
				
				// CENTRO SUR
				$(function () {


           var  c1 = parseFloat($("#c1").text()); var  c2 = parseFloat($("#c2").text()); var  c3 = parseFloat($("#c3").text());
             var  c4 = parseFloat($("#c4").text()); var  c5 = parseFloat($("#c5").text());
				     

				    Highcharts.chart('container3', {
				        chart: {
				            plotBackgroundColor: null,
				            plotBorderWidth: null,
				            plotShadow: false,
				            type: 'pie'				           				           
				            
				        },
				        title: {
				            text: 'REPORTE CENTRO SUR'
				        },
				         pane: {
					            size: '100%'
					        },

				        tooltip: {
				            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				        },
				        plotOptions: {
				            pie: {
				                allowPointSelect: true,
				                cursor: 'pointer',
				                dataLabels: {
				                    enabled: true,
				                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
				                    style: {
				                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
				                    }
				                }

				            }
				        },
				        series: [{
				            name: 'Agencias',
				            colorByPoint: true,
				            data: [{
                        name: 'Cantidad:' + c4,
                        y: c4 
                    }, {
                        name: 'Cantidad:' + c2,
                        y: c2
                    },{
                        name: 'Cantidad:' + c3,
                        y: c3
                    }]
				        }],
				           colors: ['#fbbd00', '#00ad4e','#fbfb00']
				    });
				});


				//FIN CENTRO SUR
				
				$(function () {
				
	var  mp4 = parseFloat($("#mp4").text());var  lg4= parseFloat($("#lg4").text());var  ser4= parseFloat($("#ser4").text());var  ext4= parseFloat($("#ext4").text());
	var  tch4= parseFloat($("#tch4").text());var  int4= parseFloat($("#int4").text());var  mob4= parseFloat($("#mob4").text());var  eq4= parseFloat($("#eq4").text());
	
    Highcharts.chart('general', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: '',
            x: -80
        },

        pane: {
            size: '90%'
        },

        xAxis: {
          categories: ['Doc. Mantenimiento Per.', 'Logistica ','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max :5
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br><br>'
        },

       

        series: [{
            name: 'Optimo',
            data: [5.00 , 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }, {
        
            name: 'Obtenido',
            data: [mp4, lg4,ser4,ext4,tch4,int4,mob4,eq4],
            pointPlacement: 'on'
        }],
         colors: ['#fbbd00', '#ff37a6']

    });
});
				
				
				
//////////////////////////

$(function () {

        var  mp1 = parseFloat($("#mp1").text());var  lg1= parseFloat($("#lg1").text());var  ser1= parseFloat($("#ser1").text());var  ext1= parseFloat($("#ext1").text());
	var  tch1= parseFloat($("#tch1").text());var  int1= parseFloat($("#int1").text());var  mob1= parseFloat($("#mob1").text());var  eq1= parseFloat($("#eq1").text());

    Highcharts.chart('cabecera', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: '',
            x: -80
        },

        pane: {
            size: '80%'
        },

        xAxis: {
          categories: ['Doc. Mantenimiento Per.', 'Logistica ','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max :5
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br><br>'
        },

       

        series: [{
            name: 'Optimo',
            data: [5.00, 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }, {
            name: 'Obtenido',
            data: [mp1, lg1,ser1,ext1,tch1,int1,mob1,eq1],
            pointPlacement: 'on'
        }],
         colors: ['#fbbd00', '#ff37a6']

    });
});


$(function () {
var  mp2 = parseFloat($("#mp2").text());var  lg2= parseFloat($("#lg2").text());var  ser2= parseFloat($("#ser2").text());var  ext2= parseFloat($("#ext2").text());
	var  tch2= parseFloat($("#tch2").text());var  int2= parseFloat($("#int2").text());var  mob2= parseFloat($("#mob2").text());var  eq2= parseFloat($("#eq2").text());

    Highcharts.chart('cabecerados', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: '',
            x: -80
        },

        pane: {
            size: '80%'
        },

        xAxis: {
            categories: ['Servicios', 'Equipamiento', 'Logistica', 'Inf. Interna ',
                    'Inf. Externa', 'Estado Techo','Mantenimiento','Mobiliario'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

         xAxis: {
          categories: ['Doc. Mantenimiento Per.', 'Logistica','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max :5
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br><br>'
        },

       

        series: [{
            name: 'Optimo',
            data: [5.00, 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }, {
            name: 'Obtenido',
            data: [mp2, lg2,ser2,ext2,tch2,int2,mob2,eq2],
            pointPlacement: 'on'
        }],
         colors: ['#fbbd00', '#ff37a6']

    });
});


$(function () {
var  mp3 = parseFloat($("#mp3").text());var  lg3= parseFloat($("#lg3").text());var  ser3= parseFloat($("#ser3").text());var  ext3= parseFloat($("#ext3").text());
	var  tch3= parseFloat($("#tch3").text());var  int3= parseFloat($("#int3").text());var  mob3= parseFloat($("#mob3").text());var  eq3= parseFloat($("#eq3").text());

    Highcharts.chart('cabeceratres', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: '',
            x: -80
        },

        pane: {
            size: '80%'
        },

          xAxis: {
            categories: ['', '', '', '',
                    '', '','',''],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        xAxis: {
          categories: ['Doc. Mantenimiento Per.', 'Logistica','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max :5
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br><br>'
        },

       

        series: [{
            name: 'Optimo',
            data: [5.00, 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }, {
            name: 'Obtenido',
           data: [mp3, lg3,ser3,ext3,tch3,int3,mob3,eq3],
            pointPlacement: 'on'
        }],
         colors: ['#fbbd00', '#ff37a6']

    });
});



$(function () {
        
 
    Highcharts.chart('pagina1', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'COMPARATIVO GLOBAL',
            x: -80
        },

        pane: {
            size: '90%'
        },

        xAxis: {
          categories: ['Mantenimiento Per.', 'Logistica ','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max :5
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br><br>'
        },
	legend: {
            align: 'left',
            verticalAlign: 'top',
            y: 70,
            layout: 'vertical'
        },
       

        series: [{
            name: 'Optimo',
            data: [5.00 , 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }, {
        
            name: '2da Ronda',
            data: [3.7, 4.0,3.9,3.7,3.8,3.8,3.9,3.8],
            pointPlacement: 'on'
        },{
        
            name: '3era Ronda',
            data: [4.3, 4.0,3.8,3.8,4.0,3.9,3.9,3.9],
            pointPlacement: 'on'
        }],
         colors: ['#fbbd00', '#ff37a6', 'green']

    });
});


$(function () {
        
 
    Highcharts.chart('page2', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'COMPARATIVO NORTE ORIENTE',
            x: -80
        },

        pane: {
            size: '90%'
        },

        xAxis: {
          categories: ['Mantenimiento Per.', 'Logistica ','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max :5
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br><br>'
        },
  legend: {
            align: 'left',
            verticalAlign: 'top',
            y: 70,
            layout: 'vertical'
        },
       

        series: [{
            name: 'Optimo',
            data: [5.00 , 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }, {
        
            name: '2da Ronda',
            data: [3.7, 4.0,3.9,3.7,3.8,3.8,3.9,3.8],
            pointPlacement: 'on'
        },{
        
            name: '3era Ronda',
            data: [4.1, 4.0,3.8,3.9,3.9,3.9,3.9,3.9],
            pointPlacement: 'on'
        }],
         colors: ['#fbbd00', '#ff37a6', 'green']

    });
});


$(function () {
        
 
    Highcharts.chart('page3', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'COMPARATIVO LIMA',
            x: -80
        },

        pane: {
            size: '90%'
        },

        xAxis: {
          categories: ['Mantenimiento Per.', 'Logistica ','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max :5
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br><br>'
        },
  legend: {
            align: 'left',
            verticalAlign: 'top',
            y: 70,
            layout: 'vertical'
        },
       

        series: [{
            name: 'Optimo',
            data: [5.00 , 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }, {
        
            name: '2da Ronda',
            data: [3.7, 4.0,3.9,3.7,3.8,3.8,3.9,3.8],
            pointPlacement: 'on'
        },{
        
            name: '3era Ronda',
            data: [4.1, 4.0,3.8,3.9,3.9,3.9,3.9,3.9],
            pointPlacement: 'on'
        }],
         colors: ['#fbbd00', '#ff37a6', 'green']

    });
});


$(function () {
        
 
    Highcharts.chart('page4', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'COMPARATIVO CENTRO SUR',
            x: -80
        },

        pane: {
            size: '90%'
        },

        xAxis: {
          categories: ['Mantenimiento Per.', 'Logistica ','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
            max :5
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br><br>'
        },
  legend: {
            align: 'left',
            verticalAlign: 'top',
            y: 70,
            layout: 'vertical'
        },
       

        series: [{
            name: 'Optimo',
            data: [5.00 , 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }, {
        
            name: '2da Ronda',
            data: [3.7, 4.0,3.9,3.7,3.8,3.8,3.9,3.8],
            pointPlacement: 'on'
        },{
        
            name: '3era Ronda',
            data: [4.1, 4.0,3.8,3.9,3.9,3.9,3.9,3.9],
            pointPlacement: 'on'
        }],
         colors: ['#fbbd00', '#ff37a6', 'green']

    });
});


        $(function () {


            
            Highcharts.chart('ms1', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                    
                },
                title: {
                    text: 'GLOBAL AGENCIAS'
                },
      pane: {
          size: '100%'
      },
      
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                
                series: [{
                    name: 'Agencias',
                    colorByPoint: true,
                    data: [{
                        name: 'Cantidad:' + 26,
                        y: 26
                    }, {
                        name: 'Cantidad:' + 36,
                        y: 36
                    },{
                        name: 'Cantidad:' + 69,
                        y: 69
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });


$(function () {


            
            Highcharts.chart('ms2', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: 'COMPARATIVO NORTE ORIENTE'
                },
      pane: {
          size: '100%'
      },
      
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
               
                series: [{
                    name: 'Agencias',
                    colorByPoint: true,
                    data: [{
                        name: 'Cantidad:' + 26,
                        y: 26
                    }, {
                        name: 'Cantidad:' + 36,
                        y: 36
                    },{
                        name: 'Cantidad:' + 69,
                        y: 69
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });

$(function () {


            
            Highcharts.chart('ms3', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: 'COMPARATIVO LIMA'
                },
      pane: {
          size: '100%'
      },
      
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                series: [{
                    name: 'Agencias',
                    colorByPoint: true,
                    data: [{
                        name: 'Cantidad:' + 26,
                        y: 26
                    }, {
                        name: 'Cantidad:' + 36,
                        y: 36
                    },{
                        name: 'Cantidad:' + 69,
                        y: 69
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });

$(function () {


            
            Highcharts.chart('ms4', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: 'COMPARATIVO CENTRO SUR'
                },
      pane: {
          size: '100%'
      },
      
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                series: [{
                    name: 'Agencias',
                    colorByPoint: true,
                    data: [{
                        name: 'Cantidad:' + 26,
                        y: 26
                    }, {
                        name: 'Cantidad:' + 36,
                        y: 36
                    },{
                        name: 'Cantidad:' + 69,
                        y: 69
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });



		</script>