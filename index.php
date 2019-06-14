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

        </div>
    </div>

    <h3 class="tituo_1">Situación epidemiológica</h3>
    <div class="row text-center">
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card">
                <div class="card-footer">

                </div>
                <div class="containers" id="Casos_Confirmados_de_Dengue_-_Por Sexo" >

                </div>
                <div class="card-footer">

                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom"
                                data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card">
                <div class="card-footer">

                </div>
<!--                <canvas id="myRadarChart2" width="400" height="400"></canvas>-->
                <div class="containers" id="Casos_Confirmados_de_Dengue_-_Por Edad">

                </div>
                <div class="card-footer">
                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row text-center">
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card">
                <div class="card-footer">

                </div>
                <div class="containers" id="Casos_Confirmados_de_Dengue_Departamentos_de_Mayor_Incidencia" >

                </div>
                <div class="card-footer">

                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom"
                                data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card">
                <div class="card-footer">

                </div>
                <!--                <canvas id="myRadarChart2" width="400" height="400"></canvas>-->
                <div class="containers" id="Casos_Confirmados_de_Dengue_-_Departamentos_de_Menor_Incidencia">

                </div>
                <div class="card-footer">
                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row text-center">
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card">
                <div class="card-footer">

                </div>
                <div class="containers" id="Casos_Sospechosos_de_Dengue_-_Departamentos_de_Mayor_Incidencia" >

                </div>
                <div class="card-footer">

                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom"
                                data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card">
                <div class="card-footer">

                </div>
                <!--                <canvas id="myRadarChart2" width="400" height="400"></canvas>-->
                <div class="containers" id="Casos_Sospechosos_de_Dengue_-_Departamentos_de_Menor_Incidencia">

                </div>

                <div class="card-footer">
                    <div>
                        <button type="button" class="btn" data-container="body" data-toggle="popover"
                                data-placement="bottom" data-content="Aqui informacion sobre los datos del grafico.">
                            <i class="fa fa-info-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Features -->
<!--    <div class="row text-center">-->
<!---->
<!--        <div class="col-lg-4 col-md-6 mb-4">-->
<!--            <div class="card">-->
<!--                <div class="card-footer">-->
<!--                                       <h6>Título del gráfico</h6>-->
<!--                </div>-->
<!--                                <canvas id="myLineChart" width="400" height="400"></canvas>-->
<!---->
<!---->
<!--                <div class="card-footer">-->
<!--                    <span class="fecha">Actualizado el</span>-->
<!--                    <div>-->
<!--                        <button type="button" class="btn" data-container="body" data-toggle="popover"-->
<!--                                data-placement="bottom"-->
<!--                                data-content="Este gráfico representa el número de casos confirmados de Dengue en el Paraguay desde el 2010 al 2013.">-->
<!--                            <i class="fa fa-info-circle"></i>-->
<!--                        </button>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-lg-4 col-md-6 mb-4">-->
<!--            <div class="card">-->
<!--                <div class="card-footer">-->
<!--                </div>-->
<!---->
<!--                <div id="Casos_Confirmados_de_Dengue_Departamentos_de_Mayor_Incidencia"-->
<!--                     style="min-width: 250px; height: 400px; margin: 0 auto"></div>-->
<!---->
<!--                <div class="card-footer">-->
<!--                    <span class="fecha">Actualizado el</span>-->
<!--                    <div>-->
<!--                        <button type="button" class="btn" data-container="body" data-toggle="popover"-->
<!--                                data-placement="bottom"-->
<!--                                data-content="Aqui informacion sobre los datos del grafico.">-->
<!--                            <i class="fa fa-info-circle"></i>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-lg-4 col-md-6 mb-4">-->
<!--            <div class="card">-->
<!--                <div class="card-footer">-->
<!--                </div>-->
<!--                <div id="Casos_Sospechosos_de_Dengue_-_Departamentos_de_Mayor_Incidencia"-->
<!--                     style="min-width: 250px; height: 400px; margin: 0 auto"></div>-->
<!---->
<!--                <div class="card-footer">-->
<!--                    <span class="fecha">Actualizado el</span>-->
<!--                    <div>-->
<!--                        <button type="button" class="btn" data-container="body" data-toggle="popover"-->
<!--                                data-placement="bottom"-->
<!--                                data-content="Aqui informacion sobre los datos del grafico.">-->
<!--                            <i class="fa fa-info-circle"></i>-->
<!--                        </button>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->




<?php
require_once('plots.php');
?>


<?php
require_once('footer.php');
?>