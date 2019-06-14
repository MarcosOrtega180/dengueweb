<?php
require_once('header.php');
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <div class="card borde_1">
            <div class="card-footer">
                <h4>
                    <button type="button" class="btn" data-container="body" data-toggle="popover"
                            data-placement="bottom"
                            data-content="Ranking de importancia de cada departamento en cuanto a número de casos notificados.">
                        <i class="fa fa-info-circle"></i>
                    </button>
                    Cantidad de Casos por Departamento
                </h4>
            </div>
            <canvas id="myChart2" width="400" height="150"></canvas>
            <div class="card-footer">
                <span class="fecha">Actualizado el <?= date("d/M/Y") ?></span>
            </div>
        </div>

        <h3 class="tituo_1">Título de la Sección</h3>

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-footer">
                        <!--                    <h6>Título del gráfico</h6>-->
                    </div>
                    <!--                <canvas id="myLineChart" width="400" height="400"></canvas>-->
                    <div id="container" style="max-width: 100%;min-width: 270px; height: 400px; margin: 0 auto"></div>
                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>
                    <div class="card-footer">
                        <span class="fecha">Actualizado el <?= date("d/M/Y") ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-footer">
                        <h6>Título del gráfico
                            <button type="button" class="btn" data-container="body" data-toggle="popover"
                                    data-placement="bottom"
                                    data-content="Aqui informacion sobre los datos del grafico.">
                                <i class="fa fa-info-circle"></i>
                            </button>
                        </h6>
                    </div>
                    <canvas id="myPieChart" width="400" height="400"></canvas>
                    <div class="card-footer">
                        <span class="fecha">Actualizado el <?= date("d/M/Y") ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-footer">
                        <h6>
                            <button type="button" class="btn" data-container="body" data-toggle="popover"
                                    data-placement="bottom"
                                    data-content="Aqui informacion sobre los datos del grafico.">
                                <i class="fa fa-info-circle"></i>
                            </button>
                            Título del gráfico
                        </h6>
                    </div>
                    <canvas id="myRadarChart" width="400" height="400"></canvas>
                    <div class="card-footer">
                        <span class="fecha">Actualizado el <?= date("d/M/Y") ?></span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->


        <h3 class="tituo_1">Título de la Sección</h3>

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-lg-6 col-md-6 mb-6">
                <div class="card">
                    <div class="card-footer">
                        <!--                    <h6>Título del gráfico</h6>-->
                    </div>
                    <!--          <canvas id="myPieChart2" width="400" height="400"></canvas>          -->
                    <div id="container" style="max-width: 100%;min-width: 350px; height: 400px; margin: 0 auto"></div>
                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>
                    <div class="card-footer">
                        <span class="fecha">Actualizado el <?= date("d/M/Y") ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-6">
                <div class="card">
                    <div class="card-footer">
                        <h6>Título del gráfico</h6>
                    </div>
                    <canvas id="myRadarChart2" width="400" height="400"></canvas>
                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>
                    <div class="card-footer">
                        <span class="fecha">Actualizado el <?= date("d/M/Y") ?></span>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->

    </div>
    <!-- /.container -->
    <script type="text/javascript">
        Highcharts.chart('container', {
            chart: {
                type: 'area'
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
                        return this.value / 1000;
                    }
                }
            },
            tooltip: {
                split: true,
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
                name: 'Sin Datos',
                data: [null, null, null, null, null, null, null, null, null, null, null, null, 1, 2, 2, 1, 1, null, null, null, null, null, null, null, 515, 1792, 6043, 7521, 4401, 1788, 403, 157, 156, 266, 838, 1621, 3, 2, 3, 1, 1, null, null, null, null, null, null, 40.0]

            }
            ],
        });
    </script>

<?php
require_once('footer.php');
?>