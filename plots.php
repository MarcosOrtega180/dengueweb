<script type="text/javascript">
    Highcharts.chart('Casos_Confirmados_de_Dengue_-_Por Sexo', {
        chart: {
            type: 'line'

        },

        title: {
            text: 'Casos Confirmados de Dengue - Por Sexo'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: ['2010_1', '2010_2', '2010_3', '2010_4', '2010_5', '2010_6', '2010_7', '2010_8', '2010_9', '2010_10', '2010_11', '2010_12', '2011_1', '2011_2', '2011_3', '2011_4', '2011_5', '2011_6', '2011_7', '2011_8', '2011_9', '2011_10', '2011_11', '2011_12', '2012_1', '2012_2', '2012_3', '2012_4', '2012_5', '2012_6', '2012_7', '2012_8', '2012_9', '2012_10', '2012_11', '2012_12', '2013_1', '2013_2', '2013_3', '2013_4', '2013_5', '2013_6', '2013_7', '2013_8', '2013_9', '2013_10', '2013_11', '2013_12'],
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
        series: [{
            name: 'Masculino',
            data: [175, 493, 1611, 989, 272, 36, 9, 1, 2, 6, 6, 5, 261, 1231, 2656, 1634, 396, 68, 11, 10, 7, 11, 12, 43, null, null, null, null, null, null, null, null, null, null, null, null, 8049, 9218, 11806, 15394, 6590, 1640, 433, 70, 133, 431, 495, 575.0]
        }, {
            name: 'Femenino',
            data: [224, 695, 2504, 1336, 354, 46, 3, 2, 3, 6, 7, 5, 288, 1492, 3584, 2260, 499, 93, 4, 7, 15, 15, 12, 36, null, null, null, null, null, null, null, null, null, null, null, null, 10222, 11789, 15227, 19082, 8111, 1781, 464, 113, 145, 528, 639, 622.0]
        }, {
            name: 'No Registrado',
            data: [null, null, null, null, null, null, null, null, null, null, null, null, 1, 2, 2, 1, 1, null, null, null, null, null, null, null, 515, 1792, 6043, 7521, 4401, 1788, 403, 157, 156, 266, 838, 1621, 3, 2, 3, 1, 1, null, null, null, null, null, null, 40.0]
        }
        ],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    xAxis: {
                        labels: {
                            formatter: function () {
                                return this.value.charAt(0);
                            }
                        }
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -2
                        },
                        title: {
                            text: ''
                        }
                    }
                }
            }]
        }

    });
</script>


<script type="text/javascript">
    Highcharts.chart('Casos_Confirmados_de_Dengue_Departamentos_de_Mayor_Incidencia', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Casos Confirmados de Dengue - Departamentos de Mayor Incidencia'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: ['2010_1', '2010_2', '2010_3', '2010_4', '2010_5', '2010_6', '2010_7', '2010_8', '2010_9', '2010_10', '2010_11', '2010_12', '2011_1', '2011_2', '2011_3', '2011_4', '2011_5', '2011_6', '2011_7', '2011_8', '2011_9', '2011_10', '2011_11', '2011_12', '2012_1', '2012_2', '2012_3', '2012_4', '2012_5', '2012_6', '2012_7', '2012_8', '2012_9', '2012_10', '2012_11', '2012_12', '2013_1', '2013_2', '2013_3', '2013_4', '2013_5', '2013_6', '2013_7', '2013_8', '2013_9', '2013_10', '2013_11', '2013_12'],
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
        series: [{
            name: 'Central',
            data: [60, 114, 548, 937, 261, 48, 6, null, 1, 4, 11, 6, 382, 1648, 1687, 149, 25, 3, null, null, null, null, 1, 38, 307, 1184, 4162, 5430, 3104, 1306, 299, 91, 81, 139, 564, 763, 13271, 15552, 20152, 24596, 10374, 2600, 741, 122, 198, 746, 880, 931.0]
        }, {
            name: 'Asunción',
            data: [19, 49, 236, 377, 140, 16, 3, 1, 1, 2, 2, null, 49, 402, 2491, 1955, 413, 89, 7, 5, 1, 3, null, 1, 91, 408, 1132, 1087, 821, 335, 79, 48, 52, 107, 239, 629, 3154, 3054, 3221, 6470, 3217, 617, 111, 44, 64, 194, 239, 193.0]
        }, {
            name: 'Amambay',
            data: [143, 675, 2269, 426, 73, 4, null, null, 1, null, null, null, 5, 19, 15, 59, 56, 16, null, null, null, null, null, null, 2, 13, 133, 286, 112, 41, 8, null, 2, null, 5, 1, 97, 529, 1207, 634, 255, 40, 8, 1, 1, 1, 1, null]

        }, {
            name: 'Concepción',
            data: [69, 112, 437, 6, 1, null, 1, null, 2, 4, null, 3, 49, 185, 521, 379, 82, 22, 1, 4, 9, 8, 14, 20, 95, 98, 292, 400, 219, 64, 11, 11, 16, 9, 2, 16, 291, 123, 102, 137, 102, 31, 9, null, 1, null, null, 8.0]
        }, {
            name: 'Caaguazú',
            data: [2, 31, 49, 94, 26, 4, null, null, null, null, null, null, 9, 122, 187, 172, 21, 1, 1, null, null, null, null, null, null, 4, 37, 38, 25, 11, null, 2, 1, null, 4, 20, 106, 275, 574, 772, 260, 40, 13, 3, 5, 1, 4, 4.0]
        }, {
            name: 'Cordillera',
            data: [1, 1, 12, 20, 8, null, null, null, null, null, null, null, 12, 51, 205, 262, 58, 6, null, 5, 4, 4, 2, 13, 11, 45, 135, 73, 25, 3, 1, 1, null, 2, 2, 7, 194, 282, 402, 229, 28, 10, 2, 3, 1, null, null, 12.]
        }
        ],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    xAxis: {
                        labels: {
                            formatter: function () {
                                return this.value.charAt(0);
                            }
                        }
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -2
                        },
                        title: {
                            text: ''
                        }
                    }
                }
            }]
        }

    });
</script>

<script type="text/javascript">
    Highcharts.chart('Casos_Confirmados_de_Dengue_-_Departamentos_de_Menor_Incidencia', {
        chart: {
            //marginRight:120,
            type: 'line'
        },

        title: {
            text: 'Casos Confirmados de Dengue - Departamentos de Menor Incidencia'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: ['2010_1', '2010_2', '2010_3', '2010_4', '2010_5', '2010_6', '2010_7', '2010_8', '2010_9', '2010_10', '2010_11', '2010_12', '2011_1', '2011_2', '2011_3', '2011_4', '2011_5', '2011_6', '2011_7', '2011_8', '2011_9', '2011_10', '2011_11', '2011_12', '2012_1', '2012_2', '2012_3', '2012_4', '2012_5', '2012_6', '2012_7', '2012_8', '2012_9', '2012_10', '2012_11', '2012_12', '2013_1', '2013_2', '2013_3', '2013_4', '2013_5', '2013_6', '2013_7', '2013_8', '2013_9', '2013_10', '2013_11', '2013_12'],
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
        series: [{
            //residente Hayes, Paraguarí, San Pedro, Alto Paraná, Guairá, Canindeyú,
            //Itapúa/Misiones/Caazapá, Boquerón/Alto Paraguay
            name: ' Presidente Hayes',
            data: [null, null, 1, 2, null, null, null, 1, null, null, null, null, 8, 46, 193, 143, 46, 4, 3, 1, 1, 3, 1, null, null, 2, 4, 9, 2, null, null, 3, 3, 4, 6, 138, 641, 461, 376, 341, 68, 19, null, 1, 2, 1, null, 37.0]
        }, {
            name: ', Paraguarí',
            data: [2, 1, 7, 16, 1, null, null, 1, null, null, null, null, 3, 40, 176, 207, 65, 4, null, null, null, null, 1, 1, 4, 15, 55, 72, 44, 19, 2, 1, 1, 1, 3, 14, 126, 180, 249, 438, 170, 23, 8, 1, null, null, 1, 2.0]
        }, {
            name: 'San Pedro',
            data: [28, 76, 36, 54, null, 2, null, null, null, null, null, null, 6, 76, 157, 74, 14, 3, null, null, null, null, null, 2, null, 4, 37, 33, 18, 4, 2, null, null, 1, 12, 29, 41, 6, null, 4, 6, 2, null, null, null, null, null, 31.0]

        }, {
            name: 'Alto Paraná',
            data: [58, 113, 478, 278, 77, 6, 1, null, null, 2, null, null, 14, 56, 228, 60, 37, 4, null, null, 3, null, null, null, 1, null, 2, 4, 1, null, null, null, null, null, null, 2, 36, 53, 72, 59, 9, 2, 2, 3, null, 13, 9, 5.0]
        }, {
            name: 'Guairá',
            data: [null, 2, 11, 64, 12, null, null, null, null, null, null, null, null, 45, 182, 188, 22, 3, null, null, null, null, null, null, 3, 11, 11, 12, 10, null, null, null, null, null, null, 1, 78, 217, 235, 256, 65, 7, null, null, 1, null, null, null]
        }, {
            name: 'Canindeyú',
            data: [null, 10, 13, 30, 14, null, null, null, null, null, null, null, 9, 12, 126, 161, 35, 5, 2, null, 1, 5, 5, 3, 1, null, 21, 27, 8, 4, null, null, null, null, null, null, 53, 93, 247, 309, 53, 19, 2, 1, null, null, null, null]
        }, {
            name: 'Itapúa',
            data: [1, 2, 11, 5, 3, null, 1, null, null, null, null, null, 2, 4, 27, 46, 5, null, 1, null, 1, null, null, null, null, 2, 9, 21, 6, 1, null, null, null, 3, null, 1, 65, 46, 74, 79, 25, 2, 1, null, null, 1, null, null]
        }, {
            name: 'Misiones',
            data: [null, null, 7, 9, 6, null, null, null, null, null, null, null, null, 6, 31, 20, 11, null, null, 2, null, null, null, 1, null, 4, 7, 11, 3, null, null, null, null, null, null, null, 26, 52, 32, 24, 19, null, null, null, null, 2, null, null]
        }, {
            name: 'Caazapá',
            data: [null, null, null, 5, 1, 1, null, null, null, null, null, null, null, 7, 14, 9, 4, 1, null, null, 2, 2, null, null, null, null, 1, 1, 1, null, null, null, null, null, 1, null, 14, 10, 16, 17, 3, null, null, 1, null, null, null, 1.0]
        }, {
            name: 'Boquerón',
            data: [null, null, null, 1, 1, null, null, null, null, null, null, 1, 2, 4, 1, 2, null, null, null, null, null, null, null, null, null, null, null, 6, 1, null, null, null, null, null, null, null, 9, 10, 14, 25, 6, null, null, null, null, null, null, null]
        }, {
            name: 'Alto Paraguay',
            data: [16, 2, null, 1, null, null, null, null, null, null, null, null, null, null, 1, 3, null, null, null, null, null, null, null, null, null, null, 1, 6, null, null, null, null, null, null, null, null, 8, 2, 5, 26, 12, 5, null, null, null, null, null, null]
        }
        ],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    xAxis: {
                        labels: {
                            formatter: function () {
                                return this.value.charAt(0);
                            }
                        }
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -2
                        },
                        title: {
                            text: ''
                        }
                    }
                }
            }]
        }

    });
</script>

<script type="text/javascript">
    Highcharts.chart('Casos_Sospechosos_de_Dengue_-_Departamentos_de_Mayor_Incidencia', {
        chart: {

            type: 'line'
        },
        title: {
            text: 'Casos Sospechosos de Dengue - Departamentos de Mayor Incidencia'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: ['2010_1', '2010_2', '2010_3', '2010_4', '2010_5', '2010_6', '2010_7', '2010_8', '2010_9', '2010_10', '2010_11', '2010_12', '2011_1', '2011_2', '2011_3', '2011_4', '2011_5', '2011_6', '2011_7', '2011_8', '2011_9', '2011_10', '2011_11', '2011_12', '2012_1', '2012_2', '2012_3', '2012_4', '2012_5', '2012_6', '2012_7', '2012_8', '2012_9', '2012_10', '2012_11', '2012_12', '2013_1', '2013_2', '2013_3', '2013_4', '2013_5', '2013_6', '2013_7', '2013_8', '2013_9', '2013_10', '2013_11', '2013_12'],
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
        series: [{
            name: 'Central',
            data: [8, 37, 352, 559, 243, 54, 14, 15, 15, 18, 47, 27, 4, 10, 67, 176, 40, 14, 4, 1, 2, 1, 2, 8, 1, 1, 4, 2, 1, 1, 130, 167, 471, 1765, 409, 905, 288, 378, 308, 84, 132, 108, 227, 611, 877, 905.0]
        }, {
            name: 'Asunción',
            data: [13, 20, 179, 461, 256, 44, 11, 8, 15, 11, 20, 11, 28, 225, 940, 1138, 347, 71, 9, 18, 22, 44, 40, 40, null, null, null, null, null, null, null, null, null, null, 66, 372, 365, 252, 276, 122, 167, 56, 115, 272, 338, 313.0]
        }, {
            name: 'Amambay',
            data: [3, 185, 291, 73, 114, 18, 6, 5, 5, 11, 5, 11, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 2, null, null, null, null, null, null, null]

        }, {
            name: 'Concepción',
            data: [6, 18, 472, 713, 376, 20, 2, null, null, 1, 1, 5, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 1, 3, null]

        }, {
            name: 'Caaguazú',
            data: [1, 9, 31, 38, 12, 4, 5, null, null, 3, 7, 15, null, null, null, null, null, null, null, null, null, null, null, 1, null, null, null, null, null, null, null, null, null, null, 2, null, null, 3, null, null, null, null, null, null, 10, 16.0]

        }, {
            name: 'Cordillera',
            data: [null, 1, 11, 17, 6, null, null, null, null, 1, null, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 26, 13, 42, 430, 300, 55, 14, 7, 8, 59, 101, 53.0]

        }
        ],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    xAxis: {
                        labels: {
                            formatter: function () {
                                return this.value.charAt(0);
                            }
                        }
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -2
                        },
                        title: {
                            text: ''
                        }
                    }
                }
            }]
        }

    });
</script>

<script type="text/javascript">
    Highcharts.chart('Casos_Sospechosos_de_Dengue_-_Departamentos_de_Menor_Incidencia', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Casos Sospechosos de Dengue - Departamentos de Menor Incidencia'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: ['2010_1', '2010_2', '2010_3', '2010_4', '2010_5', '2010_6', '2010_7', '2010_8', '2010_9', '2010_10', '2010_11', '2010_12', '2011_1', '2011_2', '2011_3', '2011_4', '2011_5', '2011_6', '2011_7', '2011_8', '2011_9', '2011_10', '2011_11', '2011_12', '2012_1', '2012_2', '2012_3', '2012_4', '2012_5', '2012_6', '2012_7', '2012_8', '2012_9', '2012_10', '2012_11', '2012_12', '2013_1', '2013_2', '2013_3', '2013_4', '2013_5', '2013_6', '2013_7', '2013_8', '2013_9', '2013_10', '2013_11', '2013_12'],
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
                    return this.value / 1000;
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
        series: [{
            name: 'Presidente Hayes',
            data: [null, 3, 9, 12, 4, 2, null, 3, 1, 8, 1, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 1, null, null, 1, null, null, 3, 7, 21.0]
        }, {
            name: 'Paraguarí',
            data: [null, 1, 7, 24, 7, 1, null, 1, null, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 1, 1, 4, 1, 10.0]
        }, {
            name: 'San Pedro',
            data: [null, 2, 7, 12, 11, 2, null, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 1, 2, 4, null, 8, 2, 92, 18, 48, 22, 14, 3, null, null, null, 2, 2, 13.0]
        }, {
            name: 'Alto Paraná',
            data: [null, 1, 28, 9, 6, 6, 6, 7, 1, 3, 4, 6, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]
        }, {
            name: 'Guairá',
            data: [null, null, 15, 12, 8, 1, 1, 1, null, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 3, null, null, null, null, null, null, null, null]
        }, {
            name: 'Canindeyú',
            data: [null, 3, 55, 23, 13, null, null, 3, 1, null, null, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 3, 12, 7.0]
        }, {
            name: 'Itapúa',
            data: [1, 10, 49, 49, 16, 1, 2, null, null, 4, 1, 2, null, null, null, null, null, null, null, null, null, null, 1, 2, null, null, null, null, null, null, null, null, null, null, null, null, null, 1, null, null, 1, 1, 6, 12, 23, 25.0]
        }, {
            name: 'Misiones',
            data: [1, null, 6, 12, 5, null, null, null, null, 6, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 1, null, null, null, null, null, null, null, null, null, null, null]
        }, {
            name: 'Caazapá',
            data: [null, 1, 6, 5, 1, 4, null, null, null, null, 2, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 3, null, 1.0]
        }, {
            name: 'Boquerón',
            data: [null, null, null, null, null, 4, null, null, null, null, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 1.0]
        }, {
            name: 'Alto Paraguay',
            data: [null, 8, null, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]
        },
        ],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    xAxis: {
                        labels: {
                            formatter: function () {
                                return this.value.charAt(0);
                            }
                        }
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -2
                        },
                        title: {
                            text: ''
                        }
                    }
                }
            }]
        }

    });
</script>
<script type="text/javascript">
    Highcharts.chart('Casos_Confirmados_de_Dengue_-_Por Edad', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Casos Confirmados de Dengue - Por Edad'
        },
        subtitle: {
            text: 'Source: verificar'
        },
        xAxis: {
            categories: ['2010_1', '2010_2', '2010_3', '2010_4', '2010_5', '2010_6', '2010_7', '2010_8', '2010_9', '2010_10', '2010_11', '2010_12', '2011_1', '2011_2', '2011_3', '2011_4', '2011_5', '2011_6', '2011_7', '2011_8', '2011_9', '2011_10', '2011_11', '2011_12', '2012_1', '2012_2', '2012_3', '2012_4', '2012_5', '2012_6', '2012_7', '2012_8', '2012_9', '2012_10', '2012_11', '2012_12', '2013_1', '2013_2', '2013_3', '2013_4', '2013_5', '2013_6', '2013_7', '2013_8', '2013_9', '2013_10', '2013_11', '2013_12'],
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
                    return this.value / 1000;
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
        series: [
            {
                name: 'i0_edad',
                data: [1.0, 4.0, 19.0, 6.0, 2.0, null, null, null, null, null, null, null, 1.0, 17.0, 20.0, 10.0, 4.0, null, null, null, null, null, null, 4.0, null, null, null, null, null, null, null, null, null, null, null, null, 349.0, 448.0, 498.0, 432.0, 192.0, 84.0, 44.0, 13.0, 11.0, 44.0, 35.0, 33.0]
            }, {
                name: 'i1_edad',
                data: [6.0, 19.0, 95.0, 53.0, 20.0, 4.0, null, null, null, null, null, null, 18.0, 87.0, 170.0, 83.0, 15.0, 5.0, null, null, null, null, 1.0, 3.0, 230.0, 819.0, 2628.0, 3445.0, 2077.0, 830.0, 183.0, 68.0, 78.0, 116.0, 388.0, 778.0, 1114.0, 1250.0, 1608.0, 1860.0, 756.0, 333.0, 105.0, 18.0, 51.0, 98.0, 121.0, 107.0]
            }, {
                name: 'i2_edad',
                data: [60.0, 140.0, 689.0, 345.0, 95.0, 14.0, 4.0, 1.0, 2.0, 2.0, 3.0, 1.0, 81.0, 518.0, 1072.0, 516.0, 132.0, 23.0, 4.0, 1.0, 3.0, 3.0, 4.0, 11.0, 285.0, 973.0, 3415.0, 4076.0, 2324.0, 958.0, 220.0, 89.0, 78.0, 150.0, 450.0, 843.0, 3323.0, 3588.0, 5017.0, 6650.0, 2374.0, 559.0, 178.0, 22.0, 61.0, 222.0, 221.0, 240.0]
            }, {
                name: 'i3_edad',
                data: [54.0, 156.0, 617.0, 305.0, 61.0, 7.0, 1.0, null, null, null, 3.0, 1.0, 61.0, 389.0, 908.0, 583.0, 118.0, 20.0, 4.0, 2.0, 5.0, 4.0, 3.0, 9.0, null, null, null, null, null, null, null, null, null, null, null, null, 2395.0, 2839.0, 3510.0, 4158.0, 1838.0, 465.0, 113.0, 22.0, 31.0, 123.0, 165.0, 130.0]
            }, {
                name: 'i4_edad',
                data: [150.0, 466.0, 1567.0, 893.0, 260.0, 30.0, 2.0, null, null, 4.0, 3.0, 6.0, 214.0, 975.0, 2248.0, 1549.0, 335.0, 70.0, 7.0, 8.0, 9.0, 12.0, 9.0, 26.0, null, null, null, null, null, null, null, null, null, null, null, null, 6216.0, 7081.0, 8622.0, 11528.0, 5213.0, 1141.0, 292.0, 60.0, 71.0, 285.0, 380.0, 425.0]
            }, {
                name: 'i5_edad',
                data: [51.0, 175.0, 507.0, 298.0, 76.0, 10.0, 3.0, 1.0, 1.0, 3.0, 2.0, null, 60.0, 287.0, 673.0, 432.0, 122.0, 21.0, null, 2.0, 4.0, 4.0, 5.0, 9.0, null, null, null, null, null, null, null, null, null, null, null, null, 1774.0, 2161.0, 2830.0, 3497.0, 1630.0, 323.0, 60.0, 18.0, 15.0, 73.0, 76.0, 107.0]
            }, {
                name: 'i6_edad',
                data: [36.0, 104.0, 305.0, 218.0, 57.0, 7.0, null, 1.0, 1.0, null, 1.0, 1.0, 68.0, 239.0, 586.0, 366.0, 93.0, 7.0, null, 2.0, null, 2.0, 1.0, 10.0, null, null, null, null, null, null, null, null, null, null, null, null, 1470.0, 1766.0, 2347.0, 3052.0, 1355.0, 260.0, 53.0, 10.0, 17.0, 51.0, 62.0, 110.0]
            }, {
                name: 'i7_edad',
                data: [39.0, 117.0, 291.0, 191.0, 50.0, 7.0, 2.0, null, 1.0, 3.0, 1.0, 1.0, 42.0, 201.0, 505.0, 330.0, 72.0, 13.0, null, 2.0, null, 1.0, 1.0, 7.0, null, null, null, null, null, null, null, null, null, null, null, null, 1450.0, 1706.0, 2372.0, 2967.0, 1210.0, 226.0, 52.0, 19.0, 20.0, 62.0, 73.0, 83.0]
            }, {
                name: 'SD',
                data: [2.0, 7.0, 25.0, 16.0, 5.0, 3.0, null, null, null, null, null, null, 5.0, 12.0, 60.0, 26.0, 5.0, 2.0, null, null, 1.0, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 183.0, 170.0, 232.0, 333.0, 134.0, 30.0, null, 1.0, 1.0, 1.0, 1.0, 2.0]
            }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 400
                },
                // Make the labels less space demanding on mobile
                chartOptions: {
                    xAxis: {
                        labels: {
                            formatter: function () {
                                return this.value.charAt(0);
                            }
                        }
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -2
                        },
                        title: {
                            text: ''
                        }
                    }
                }
            }]
        }

    });
</script>
