<?php
require("php/consulta.php");

?>

<script type="text/javascript">



    Highcharts.chart('<?php echo ($arr2[1]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo ($arr2[1]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo ($arr2[1]["categorias"]) ?>,
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
        series: <?php echo ($arr2[1]["datos"]) ?>,

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
    Highcharts.chart('<?php echo ($arr2[0]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo ($arr2[0]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo ($arr2[0]["categorias"]) ?>,
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
        series: <?php echo ($arr2[0]["datos"]) ?>,

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
    Highcharts.chart('<?php echo ($arr2[2]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo ($arr2[2]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo ($arr2[2]["categorias"]) ?>,
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
        series: <?php echo ($arr2[2]["datos"]) ?>,

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
    Highcharts.chart('<?php echo ($arr2[3]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo ($arr2[3]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo ($arr2[3]["categorias"]) ?>,
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
        series: <?php echo ($arr2[3]["datos"]) ?>,

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
    Highcharts.chart('<?php echo ($arr2[4]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo ($arr2[4]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo ($arr2[4]["categorias"]) ?>,
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
        series: <?php echo ($arr2[4]["datos"]) ?>,

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
    Highcharts.chart('<?php echo ($arr2[5]["chart_id"]) ?>', {
        chart: {
            type: 'line'

        },

        title: {
            text: '<?php echo ($arr2[5]["descripcion"]) ?>'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: <?php echo ($arr2[5]["categorias"]) ?>,
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
        series: <?php echo ($arr2[5]["datos"]) ?>,

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