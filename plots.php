<?php
require("php/consulta.php");

?>

<script type="text/javascript">


    Highcharts.chart('<?php echo($arr2[1]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo($arr2[1]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo($arr2[1]["categorias"]) ?>,
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Número de Casos'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ' casos'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }

            }
        },
        series: <?php echo($arr2[1]["datos"]) ?>,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    // xAxis: {
                    //     labels: {
                    //         formatter: function () {
                    //             return this.value.charAt(0);
                    //         }
                    //     }
                    // },
                    // yAxis: {
                    //     labels: {
                    //         align: 'left',
                    //         x: 0,
                    //         y: -2
                    //     },
                    //     title: {
                    //         text: ''
                    //     }
                    // }
                }
            }]
        }

    });
</script>


<script type="text/javascript">
    Highcharts.chart('<?php echo($arr2[0]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo($arr2[0]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo($arr2[0]["categorias"]) ?>,
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Número de Casos'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ' casos'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }

            }
        },
        series: <?php echo($arr2[0]["datos"]) ?>,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    // xAxis: {
                    //     labels: {
                    //         formatter: function () {
                    //             return this.value.charAt(0);
                    //         }
                    //     }
                    // },
                    // yAxis: {
                    //     labels: {
                    //         align: 'left',
                    //         x: 0,
                    //         y: -2
                    //     },
                    //     title: {
                    //         text: ''
                    //     }
                    // }
                }
            }]
        }

    });
</script>
<script type="text/javascript">
    Highcharts.chart('<?php echo($arr2[2]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo($arr2[2]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo($arr2[2]["categorias"]) ?>,
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Número de Casos'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ' casos'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }

            }
        },
        series: <?php echo($arr2[2]["datos"]) ?>,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    // xAxis: {
                    //     labels: {
                    //         formatter: function () {
                    //             return this.value.charAt(0);
                    //         }
                    //     }
                    // },
                    // yAxis: {
                    //     labels: {
                    //         align: 'left',
                    //         x: 0,
                    //         y: -2
                    //     },
                    //     title: {
                    //         text: ''
                    //     }
                    // }
                }
            }]
        }

    });
</script>
<script type="text/javascript">
    Highcharts.chart('<?php echo($arr2[3]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo($arr2[3]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo($arr2[3]["categorias"]) ?>,
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Número de Casos'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ' casos'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }

            }
        },
        series: <?php echo($arr2[3]["datos"]) ?>,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    // xAxis: {
                    //     labels: {
                    //         formatter: function () {
                    //             return this.value.charAt(0);
                    //         }
                    //     }
                    // },
                    // yAxis: {
                    //     labels: {
                    //         align: 'left',
                    //         x: 0,
                    //         y: -2
                    //     },
                    //     title: {
                    //         text: ''
                    //     }
                    // }
                }
            }]
        }

    });
</script>
<script type="text/javascript">
    Highcharts.chart('<?php echo($arr2[4]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo($arr2[4]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo($arr2[4]["categorias"]) ?>,
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Número de Casos'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ' casos'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }

            }
        },
        series: <?php echo($arr2[4]["datos"]) ?>,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    // xAxis: {
                    //     labels: {
                    //         formatter: function () {
                    //             return this.value.charAt(0);
                    //         }
                    //     }
                    // },
                    // yAxis: {
                    //     labels: {
                    //         align: 'left',
                    //         x: 0,
                    //         y: -2
                    //     },
                    //     title: {
                    //         text: ''
                    //     }
                    // }
                }
            }]
        }

    });
</script>
<script type="text/javascript">
    Highcharts.chart('<?php echo($arr2[5]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo($arr2[5]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo($arr2[5]["categorias"]) ?>,
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Número de Casos'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ' casos'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }

            }
        },
        series: <?php echo($arr2[5]["datos"]) ?>,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    // xAxis: {
                    //     labels: {
                    //         formatter: function () {
                    //             return this.value.charAt(0);
                    //         }
                    //     }
                    // },
                    // yAxis: {
                    //     labels: {
                    //         align: 'left',
                    //         x: 0,
                    //         y: -2
                    //     },
                    //     title: {
                    //         text: ''
                    //     }
                    // }
                }
            }]
        }

    });
</script>
<script type="text/javascript">
    Highcharts.chart('<?php echo($arr2[6]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo($arr2[6]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo($arr2[6]["categorias"]) ?>,
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Número de Casos'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ' casos'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }

            }
        },
        series: <?php echo($arr2[6]["datos"]) ?>,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 700
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    // xAxis: {
                    //     labels: {
                    //         formatter: function () {
                    //             return this.value.charAt(0);
                    //         }
                    //     }
                    // },
                    // yAxis: {
                    //     labels: {
                    //         align: 'left',
                    //         x: 0,
                    //         y: -2
                    //     },
                    //     title: {
                    //         text: ''
                    //     }
                    // }
                }
            }]
        }

    });
</script>

<script type="text/javascript">
    Highcharts.chart('burbujas', {

        chart: {
            type: 'bubble',
            plotBorderWidth: 1,
            zoomType: 'xy'
        },

        legend: {
            enabled: false
        },

        title: {
            text: 'Relación entre Número de Casos y Densidad Poblacional'
        },

        subtitle: {
            text: 'Source: Verficar'
        },

        xAxis: {
            gridLineWidth: 1,
            title: {
                text: 'Códigos de departamento'
            },
            labels: {
                format: 'Dep. {value}'
            },
            plotLines: [{
                color: 'black',
                dashStyle: 'dot',
                width: 2,
                value: 65,
                label: {
                    rotation: 0,
                    y: 15,
                    style: {
                        fontStyle: 'italic'
                    },
                    text: ''
                },
                zIndex: 3
            }]
        },

        yAxis: {
            startOnTick: false,
            endOnTick: false,
            title: {
                text: 'Número de casos'
            },
            labels: {
                format: '{value} casos'
            },
            maxPadding: 0.2,
            plotLines: [{
                color: 'black',
                dashStyle: 'dot',
                width: 2,
                value: 50,
                label: {
                    align: 'right',
                    style: {
                        fontStyle: 'italic'
                    },
                    text: '',
                    x: -10
                },
                zIndex: 3
            }]
        },

        tooltip: {
            useHTML: true,
            headerFormat: '<table>',
            pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
                '<tr><th>Código de departamento:</th><td>{point.x}g</td></tr>' +
                '<tr><th>Densidad poblacional(km):</th><td>{point.y}</td></tr>' +
                '<tr><th>Número de casos:</th><td>{point.z}</td></tr>',
            footerFormat: '</table>',
            followPointer: true
        },

        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },

        series: [{
            'data': [{'x': 0, 'y': 4525.07, 'z': 5028, 'name': '0-AS', 'country': 'ASUNCION'},
                {'x': 1, 'y': 12.55, 'z': 1233, 'name': '1-CO', 'country': 'CONCEPCION'},
                {'x': 2, 'y': 19.71, 'z': 140, 'name': '2-SA', 'country': 'SAN PEDRO'},
                {'x': 3, 'y': 56.56, 'z': 305, 'name': '3-CO', 'country': 'CORDILLERA'},
                {'x': 4, 'y': 54.58, 'z': 48, 'name': '4-GU', 'country': 'GUAIRA'},
                {'x': 5, 'y': 45.16, 'z': 142, 'name': '5-CA', 'country': 'CAAGUAZU'},
                {'x': 6, 'y': 18.15, 'z': 4, 'name': '6-CA', 'country': 'CAAZAPA'},
                {'x': 7, 'y': 33.56, 'z': 43, 'name': '7-IT', 'country': 'ITAPUA'},
                {'x': 8, 'y': 12.21, 'z': 25, 'name': '8-MI', 'country': 'MISIONES'},
                {'x': 9, 'y': 28.54, 'z': 231, 'name': '9-PA', 'country': 'PARAGUARI'},
                {'x': 10, 'y': 49.49, 'z': 10, 'name': '10-AL', 'country': 'ALTO PARANA'},
                {'x': 11, 'y': 752.63, 'z': 17430, 'name': '11-CE', 'country': 'CENTRAL'},
                {'x': 12, 'y': 7.09, 'z': 13, 'name': '12-ÑE', 'country': 'ÑEEMBUCU'},
                {'x': 13, 'y': 11.71, 'z': 603, 'name': '13-AM', 'country': 'AMAMBAY'},
                {'x': 14, 'y': 13.56, 'z': 61, 'name': '14-CA', 'country': 'CANINDEYU'},
                {'x': 15, 'y': 1.51, 'z': 171, 'name': '15-PR', 'country': 'PRESIDENTE HAYES'},
                {'x': 16, 'y': 0.62, 'z': 7, 'name': '16-BO', 'country': 'BOQUERÓN'},
                {'x': 17, 'y': 0.19, 'z': 7, 'name': '17-AL', 'country': 'ALTO PARAGUAY'}]
        },
            {
                'data': [{'x': 0, 'y': 4517.33, 'z': 20578, 'name': '0-AS', 'country': 'ASUNCION'},
                    {'x': 1, 'y': 12.74, 'z': 804, 'name': '1-CO', 'country': 'CONCEPCION'},
                    {'x': 2, 'y': 19.96, 'z': 290, 'name': '2-SA', 'country': 'SAN PEDRO'},
                    {'x': 3, 'y': 57.32, 'z': 1163, 'name': '3-CO', 'country': 'CORDILLERA'},
                    {'x': 4, 'y': 55.12, 'z': 859, 'name': '4-GU', 'country': 'GUAIRA'},
                    {'x': 5, 'y': 45.63, 'z': 2057, 'name': '5-CA', 'country': 'CAAGUAZU'},
                    {'x': 6, 'y': 18.4, 'z': 62, 'name': '6-CA', 'country': 'CAAZAPA'},
                    {'x': 7, 'y': 34.0, 'z': 293, 'name': '7-IT', 'country': 'ITAPUA'},
                    {'x': 8, 'y': 12.34, 'z': 155, 'name': '8-MI', 'country': 'MISIONES'},
                    {'x': 9, 'y': 28.68, 'z': 1198, 'name': '9-PA', 'country': 'PARAGUARI'},
                    {'x': 10, 'y': 50.31, 'z': 263, 'name': '10-AL', 'country': 'ALTO PARANA'},
                    {'x': 11, 'y': 770.22, 'z': 90163, 'name': '11-CE', 'country': 'CENTRAL'},
                    {'x': 12, 'y': 7.14, 'z': 102, 'name': '12-ÑE', 'country': 'ÑEEMBUCU'},
                    {'x': 13, 'y': 11.91, 'z': 2774, 'name': '13-AM', 'country': 'AMAMBAY'},
                    {'x': 14, 'y': 13.88, 'z': 777, 'name': '14-CA', 'country': 'CANINDEYU'},
                    {'x': 15, 'y': 1.54, 'z': 1947, 'name': '15-PR', 'country': 'PRESIDENTE HAYES'},
                    {'x': 16, 'y': 0.63, 'z': 64, 'name': '16-BO', 'country': 'BOQUERÓN'},
                    {'x': 17, 'y': 0.19, 'z': 58, 'name': '17-AL', 'country': 'ALTO PARAGUAY'}]
            }]

    });
</script>
