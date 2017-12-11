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



var pr1 = $("#mp1").text(); var pr2 = $("#lg1").text(); var pr3 = $("#ser1").text(); var pr4 = $("#ext1").text();
var pr5 = $("#tch1").text(); var pr6 = $("#int1").text(); var pr7 = $("#mob1").text(); var pr8 = $("#eq1").text();
var sum = (parseFloat(pr1) + parseFloat(pr2) + parseFloat(pr3) + parseFloat(pr4) + parseFloat(pr5) + parseFloat(pr6) + parseFloat(pr7) + parseFloat(pr8) ) / 8 ;
$("#pr1").text(sum.toFixed(2));


var pr11 = $("#mp2").text(); var pr21 = $("#lg2").text(); var pr31 = $("#ser2").text(); var pr41 = $("#ext2").text();
var pr51 = $("#tch2").text(); var pr61 = $("#int2").text(); var pr71 = $("#mob2").text(); var pr81 = $("#eq2").text();
var sum2 = (parseFloat(pr11) + parseFloat(pr21) + parseFloat(pr31) + parseFloat(pr41) + 
  parseFloat(pr51) + parseFloat(pr61) + parseFloat(pr71) + parseFloat(pr81) ) / 8 ;
$("#pr2").text(sum2.toFixed(2));


var pr111 = $("#mp3").text(); var pr211 = $("#lg3").text(); var pr311 = $("#ser3").text(); var pr411 = $("#ext3").text();
var pr511 = $("#tch3").text(); var pr611 = $("#int3").text(); var pr711 = $("#mob3").text(); var pr811 = $("#eq3").text();
var sum22 = (parseFloat(pr111) + parseFloat(pr211) + parseFloat(pr311) + parseFloat(pr411) + 
  parseFloat(pr511) + parseFloat(pr611) + parseFloat(pr711) + parseFloat(pr811) ) / 8 ;
$("#pr3").text(sum22.toFixed(2));


var pr1112 = $("#mp4").text(); var pr2112 = $("#lg4").text(); var pr3112 = $("#ser4").text(); var pr4112 = $("#ext4").text();
var pr5112 = $("#tch4").text(); var pr6112 = $("#int4").text(); var pr7112 = $("#mob4").text(); var pr8112 = $("#eq4").text();
var sum222 = (parseFloat(pr1112) + parseFloat(pr2112) + parseFloat(pr3112) + parseFloat(pr4112) + 
  parseFloat(pr5112) + parseFloat(pr6112) + parseFloat(pr7112) + parseFloat(pr8112) ) / 8 ;
$("#pr4").text(sum222.toFixed(2));







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
                        name: 'Regular:' + g4,
                        y: g4
                    }, {
                        name: 'Bueno:' + g2,
                       y: g2
                    },{
                        name: 'Aceptable:' + g3,
                        y: g3
                    },{
                        name: 'Crítico:' + g5,
                       y: g5
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00','red']
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
                        name: 'Regular:'+ n4,
                        y: n4
                    }, {
                        name: 'Bueno:' + n2,
                        y: n2
                    },{
                        name: 'Aceptable:'+ n3,
                        y: n3
                    },{
                        name: 'Crítico:'+ n5,
                        y: n5
                    }]
				        }],
				         colors: ['#fbbd00', '#00ad4e','#fbfb00','red']
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
                        name: 'Regular:' + l4,
                        y: l4
                    }, {
                        name: 'Bueno:'  + l2,
                        y: l2
                    },{
                        name: 'Aceptable:' + l3,
                        y: l3
                    },{
                        name: 'Crítico:' + l5,
                        y: l5
                    }]
				        }],
				           colors: ['#fbbd00', '#00ad4e','#fbfb00','red']
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
                        name: 'Regular:' + c4,
                        y: c4 
                    }, {
                        name: 'Bueno:' + c2,
                        y: c2
                    },{
                        name: 'Aceptable:' + c3,
                        y: c3
                    },{
                        name: 'Crítico:' + c5,
                        y: c5
                    }]
				        }],
				           colors: ['#fbbd00', '#00ad4e','#fbfb00','red']
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
                    text: 'GLOBAL GLOBAL'
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
                        name: 'Cantidad:' + 42,
                        y: 42
                    }, {
                        name: 'Cantidad:' + 24,
                        y: 24
                    },{
                        name: 'Cantidad:' + 219,
                        y: 219
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
                        name: 'Cantidad:' + 8,
                        y: 8
                    }, {
                        name: 'Cantidad:' + 15,
                        y: 15
                    },{
                        name: 'Cantidad:' + 77,
                        y: 77
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
                        name: 'Cantidad:' + 24,
                        y: 24
                    }, {
                        name: 'Cantidad:' + 2,
                        y: 2
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
                        name: 'Cantidad:' + 10,
                        y: 10
                    }, {
                        name: 'Cantidad:' + 7,
                        y: 7
                    },{
                        name: 'Cantidad:' + 73,
                        y: 73
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });



$(function () {


            
            Highcharts.chart('ms11', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: 'COMPARATIVO GLOBAL'
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
                        name: 'Cantidad:' + 3,
                        y: 3
                    }, {
                        name: 'Cantidad:' + 29,
                        y: 29
                    },{
                        name: 'Cantidad:' + 251,
                        y: 251
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });

$(function () {


            
            Highcharts.chart('ms22', {
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
                        name: 'Cantidad:' + 1,
                        y: 1
                    }, {
                        name: 'Cantidad:' + 6,
                        y: 3
                    },{
                        name: 'Cantidad:' + 93,
                        y: 93
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });




$(function () {


            
            Highcharts.chart('ms33', {
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
                        name: 'Cantidad:' + 2,
                        y: 2
                    }, {
                        name: 'Cantidad:' + 7,
                        y: 7
                    },{
                        name: 'Cantidad:' + 84,
                        y: 84
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });



$(function () {


            
            Highcharts.chart('ms44', {
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
                        name: 'Cantidad:' + 0,
                        y: 0
                    }, {
                        name: 'Cantidad:' + 16,
                        y: 16
                    },{
                        name: 'Cantidad:' + 74,
                        y: 74
                    }]
                }],
                 colors: ['#fbbd00', '#00ad4e','#fbfb00']
            });
        });


$(function () {


  var fil1g= parseFloat($("#fil1g").text());var fil2g= parseFloat($("#fil2g").text());var fil3g= parseFloat($("#fil3g").text());var fil4g= parseFloat($("#fil4g").text());
  var fil5g= parseFloat($("#fil5g").text());var fil6g= parseFloat($("#fil6g").text());var fil7g= parseFloat($("#fil7g").text());var fil8g= parseFloat($("#fil8g").text());var fil9g= parseFloat($("#fil9g").text());var fil10g= parseFloat($("#fil10g").text());
            
            Highcharts.chart('gen', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: ''
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
                            format: '<b>{point.name}</b>:',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                series: [{
                    name: 'Componentes',
                    colorByPoint: true,
                    data: [{
                        name: 'Dispensador:' + fil1g,
                        y: fil1g
                    }, {
                        name: 'Proyector:' + fil2g,
                        y: fil2g
                    },{
                        name: 'Lactario:' + fil3g,
                        y: fil3g
                    },{
                        name: 'Friobar-Lactario:' + fil4g,
                        y: fil4g
                    },{
                        name: 'Kitchenet:' + fil5g,
                        y: fil5g
                    },{
                        name: 'Frio Bar:' + fil6g,
                        y: fil6g
                    },{
                        name: 'Microondas:' + fil7g,
                        y: fil7g
                    },{
                        name: 'Repostero:' + fil8g,
                        y: fil8g
                    },{
                        name: 'Mesa :' + fil9g,
                        y: fil9g
                    },{
                        name: 'Sin Dispensador:' + fil10g,
                        y: fil10g
                    }]
                }],
                 
            });
        });


$(function () {


 var filser1g= parseFloat($("#filser1g").text());var filser2g= parseFloat($("#filser2g").text());var filser3g= parseFloat($("#filser3g").text());
 var filser4g= parseFloat($("#filser4g").text());
  var filser5g= parseFloat($("#filser5g").text());var filser6g= parseFloat($("#filser6g").text());var filser7g= parseFloat($("#filser7g").text());
  var filser8g= parseFloat($("#filser8g").text());var filser9g= parseFloat($("#filser9g").text());var filser10g= parseFloat($("#filser10g").text());

            
            Highcharts.chart('gen2', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: ''
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
                            format: '<b>{point.name}</b>:',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                   series: [{
                    name: 'Componentes',
                    colorByPoint: true,
                    data: [{
                        name: 'SSHH varones:' + filser1g,
                        y: filser1g
                    }, {
                        name: 'SSHH mujeres :' + filser2g,
                        y: filser2g
                    },{
                        name: 'SSHH disc:' + filser3g,
                        y: filser3g
                    },{
                        name: 'SSHH mixto:' + filser4g,
                        y: filser4g
                    },{
                        name: 'Sum. varones:' + filser5g,
                        y: filser5g
                    },{
                        name: 'Sum. mujeres:' + filser6g,
                        y: filser6g
                    },{
                        name: 'Sum. disc:' + filser7g,
                        y: filser7g
                    },{
                        name: 'Sum. mixto:' + filser8g,
                        y: filser8g
                    },{
                        name: 'Sum. rack:' + filser9g,
                        y: filser9g
                    },{
                        name: 'Solo sshh mixto:' +  filser10g,
                        y:  filser10g
                    }]
                }],
                 
            });
        });





$(function () {


  var fil1= parseFloat($("#fil1").text());var fil2= parseFloat($("#fil2").text());var fil3= parseFloat($("#fil3").text());var fil4= parseFloat($("#fil4").text());
  var fil5= parseFloat($("#fil5").text());var fil6= parseFloat($("#fil6").text());var fil7= parseFloat($("#fil7").text());var fil8= parseFloat($("#fil8").text());var fil9= parseFloat($("#fil9").text());var fil10= parseFloat($("#fil10").text());
            
            Highcharts.chart('compa', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: ''
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
                            format: '<b>{point.name}</b>:',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                series: [{
                    name: 'Componentes',
                    colorByPoint: true,
                    data: [{
                        name: 'Dispensador:' + fil1,
                        y: fil1
                    }, {
                        name: 'Proyector:' + fil2,
                        y: fil2
                    },{
                        name: 'Lactario:' + fil3,
                        y: fil3
                    },{
                        name: 'Friobar-Lactario:' + fil4,
                        y: fil4
                    },{
                        name: 'Kitchenet:' + fil5,
                        y: fil5
                    },{
                        name: 'Frio Bar:' + fil6,
                        y: fil6
                    },{
                        name: 'Microondas:' + fil7,
                        y: fil7
                    },{
                        name: 'Repostero:' + fil8,
                        y: fil8
                    },{
                        name: 'Mesa :' + fil9,
                        y: fil9
                    },{
                        name: 'Sin Dispensador:' + fil10,
                        y: fil10
                    }]
                }],
                 
            });
        });

$(function () {


 var filser1= parseFloat($("#filser1").text());var filser2= parseFloat($("#filser2").text());var filser3= parseFloat($("#filser3").text());
 var filser4= parseFloat($("#filser4").text());
  var filser5= parseFloat($("#filser5").text());var filser6= parseFloat($("#filser6").text());var filser7= parseFloat($("#filser7").text());
  var filser8= parseFloat($("#filser8").text());var filser9= parseFloat($("#filser9").text());var filser10= parseFloat($("#filser10").text());

            
            Highcharts.chart('compa2', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: ''
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
                            format: '<b>{point.name}</b>:',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                   series: [{
                    name: 'Componentes',
                    colorByPoint: true,
                    data: [{
                        name: 'SSHH varones:' + filser1,
                        y: filser1
                    }, {
                        name: 'SSHH mujeres :' + filser2,
                        y: filser2
                    },{
                        name: 'SSHH disc:' + filser3,
                        y: filser3
                    },{
                        name: 'SSHH mixto:' + filser4,
                        y: filser4
                    },{
                        name: 'Sum. varones:' + filser5,
                        y: filser5
                    },{
                        name: 'Sum. mujeres:' + filser6,
                        y: filser6
                    },{
                        name: 'Sum. disc:' + filser7,
                        y: filser7
                    },{
                        name: 'Sum. mixto:' + filser8,
                        y: filser8
                    },{
                        name: 'Sum. rack:' + filser9,
                        y: filser9
                    },{
                        name: 'Solo sshh mixto:' +  filser10,
                        y:  filser10
                    }]
                }],
                 
            });
        });



$(function () {

   var fil1l= parseFloat($("#fil1l").text());var fil2l= parseFloat($("#fil2l").text());var fil3l= parseFloat($("#fil3l").text());var fil4l= parseFloat($("#fil4l").text());
  var fil5l= parseFloat($("#fil5l").text());var fil6l= parseFloat($("#fil6l").text());var fil7l= parseFloat($("#fil7l").text());var fil8l= parseFloat($("#fil8l").text());var fil9l= parseFloat($("#fil9l").text());var fil10l= parseFloat($("#fil10l").text());
            
            Highcharts.chart('compa3', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: ''
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
                            format: '<b>{point.name}</b>:',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                  series: [{
                    name: 'Componentes',
                    colorByPoint: true,
                    data: [{
                        name: 'Dispensador:' + fil1l,
                        y: fil1l
                    }, {
                        name: 'Proyector:' + fil2l,
                        y: fil2l
                    },{
                        name: 'Lactario:' + fil3l,
                        y: fil3l
                    },{
                        name: 'Friobar-Lactario:' + fil4l,
                        y: fil4l
                    },{
                        name: 'Kitchenet:' + fil5l,
                        y: fil5l
                    },{
                        name: 'Frio Bar:' + fil6l,
                        y: fil6l
                    },{
                        name: 'Microondas:' + fil7l,
                        y: fil7l
                    },{
                        name: 'Repostero:' + fil8l,
                        y: fil8l
                    },{
                        name: 'Mesa :' + fil9l,
                        y: fil9l
                    },{
                        name: 'Sin Dispensador:' + fil10l,
                        y: fil10l
                    }]
                }],
                 
            });
        });


$(function () {


var filserl1= parseFloat($("#filserl1").text());var filserl2= parseFloat($("#filserl2").text());var filserl3= parseFloat($("#filserl3").text());
var filserl4= parseFloat($("#filserl4").text());
var filserl5= parseFloat($("#filserl5").text());var filserl6= parseFloat($("#filserl6").text());var filserl7= parseFloat($("#filserl7").text());
var filserl8= parseFloat($("#filserl8").text());var filserl9= parseFloat($("#filserl9").text());var filserl10= parseFloat($("#filserl10").text());
            
            Highcharts.chart('compa4', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: ''
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
                            format: '<b>{point.name}</b>: ',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                series: [{
                    name: 'Componentes',
                    colorByPoint: true,
                    data: [{
                        name: 'SSHH varones:' + filserl1,
                        y: filserl1
                    }, {
                        name: 'SSHH mujeres :' + filserl2,
                        y: filserl2
                    },{
                        name: 'SSHH disc:' + filserl3,
                        y: filserl3
                    },{
                        name: 'SSHH mixto:' + filserl4,
                        y: filserl4
                    },{
                        name: 'Sum. varones:' + filserl5,
                        y: filserl5
                    },{
                        name: 'Sum. mujeres:' + filserl6,
                        y: filserl6
                    },{
                        name: 'Sum. disc:' + filserl7,
                        y: filserl7
                    },{
                        name: 'Sum. mixto:' + filserl8,
                        y: filserl8
                    },{
                        name: 'Sum. rack:' + filserl9,
                        y: filserl9
                    },{
                        name: 'Solo sshh mixto:' +  filserl10,
                        y:  filserl10
                    }]
                }],
                 
            });
        });




$(function () {

   var fil1c= parseFloat($("#fil1c").text());var fil2c= parseFloat($("#fil2c").text());var fil3c= parseFloat($("#fil3c").text());var fil4c= parseFloat($("#fil4c").text());
  var fil5c= parseFloat($("#fil5c").text());var fil6c= parseFloat($("#fil6c").text());var fil7c= parseFloat($("#fil7c").text());var fil8c= parseFloat($("#fil8c").text());var fil9c= parseFloat($("#fil9c").text());var fil10c= parseFloat($("#fil10c").text());
            
            Highcharts.chart('compa5', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: ''
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
                            format: '<b>{point.name}</b>:',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                  series: [{
                    name: 'Componentes',
                    colorByPoint: true,
                    data: [{
                        name: 'Dispensador:' + fil1c,
                        y: fil1c
                    }, {
                        name: 'Proyector:' + fil2c,
                        y: fil2c
                    },{
                        name: 'Lactario:' + fil3c,
                        y: fil3c
                    },{
                        name: 'Friobar-Lactario:' + fil4c,
                        y: fil4c
                    },{
                        name: 'Kitchenet:' + fil5c,
                        y: fil5c
                    },{
                        name: 'Frio Bar:' + fil6c,
                        y: fil6c
                    },{
                        name: 'Microondas:' + fil7c,
                        y: fil7c
                    },{
                        name: 'Repostero:' + fil8c,
                        y: fil8c
                    },{
                        name: 'Mesa :' + fil9c,
                        y: fil9c
                    },{
                        name: 'Sin Dispensador:' + fil10c,
                        y: fil10c
                    }]
                }],
                 
            });
        });



$(function () {


var filserce1= parseFloat($("#filserce1").text());var filserce2= parseFloat($("#filserce2").text());var filserce3= parseFloat($("#filserce3").text());
 var filserce4= parseFloat($("#filserce4").text());
  var filserce5= parseFloat($("#filserce5").text());var filserce6= parseFloat($("#filserce6").text());var filserce7= parseFloat($("#filserce7").text());
  var filserce8= parseFloat($("#filserce8").text());var filserce9= parseFloat($("#filserce9").text());var filserce10= parseFloat($("#filserce10").text());

            
            Highcharts.chart('compa6', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: 500,
                    type: 'pie'
                },
                title: {
                    text: ''
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
                            format: '<b>{point.name}</b>: ',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }

                    }
                },
                 
                series: [{
                    name: 'Componentes',
                    colorByPoint: true,
                     data: [{
                        name: 'SSHH varones:' + filserce1,
                        y: filserce1
                    }, {
                        name: 'SSHH mujeres :' + filserce2,
                        y: filserce2
                    },{
                        name: 'SSHH disc:' + filserce3,
                        y: filserce3
                    },{
                        name: 'SSHH mixto:' + filserce4,
                        y: filserce4
                    },{
                        name: 'Sum. varones:' + filserce5,
                        y: filserce5
                    },{
                        name: 'Sum. mujeres:' + filserce6,
                        y: filserce6
                    },{
                        name: 'Sum. disc:' + filserce7,
                        y: filserce7
                    },{
                        name: 'Sum. mixto:' + filserce8,
                        y: filserce8
                    },{
                        name: 'Sum. rack:' + filserce9,
                        y: filserce9
                    },{
                        name: 'Solo sshh mixto:' +  filserce10,
                        y:  filserce10
                    }]
                }],
                 
            });
        });


$(function () {

  var pui = $("#uh").val();
  var pj1 = parseFloat($("#v1").val()); var pj2 = parseFloat($("#v2").val()); var pj3 = parseFloat($("#v3").val()); var pj4 = parseFloat($("#v4").val());
  var pj5 = parseFloat($("#v5").val()); var pj6 = parseFloat($("#v6").val()); var pj7 = parseFloat($("#v7").val()); var pj8 = parseFloat($("#v8").val());
        
 
    Highcharts.chart('agenpun', {

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'AGENCIA ' + pui,
            x: 20
        },

        pane: {
            size: '90%'
        },

        xAxis: {
          categories: ['Documentacion Mantto.', 'Logistica ','Servicios Basicos','Inf. Externa', 'Estado Techo','Inf. Interna', 'Mobiliario ','Equipamiento'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 1,
            min: 0,
            max :5
        },
        
        plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
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
            name: 'Obtenido',
            data: [pj1,pj2,pj3,pj4,pj5,pj6,pj7,pj8],
            pointPlacement: 'on'
        }, {
        
            
            
            name: 'Optimo',
            data: [5.00 , 5.00,5.00,5.00, 5.00,5.00,5.00,5.00],
            pointPlacement: 'on'
        }],
         colors: ['#f5d678', '#ff37a6']

    });
});


		</script>