<?php
require RUTA_APP . '/vistas/inc/head.php';
require RUTA_APP . '/vistas/inc/header.php';
?>
<main id="formulario">
    <form action="" method="POST">
        <div class="container mt-4">
            <div class="row border">
                <div class="col-3 border">
                    <img src="img/logo.png" class="img-fluid" alt="Responsive image font-weight-bold">
                </div>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-12 border-bottom text-center align-center">
                            <b>Sistema de Gestión de Calidad</b>
                        </div>
                        <div class="col-12 border-bottom text-center align-center">
                            <b>CLINICA UNIVERSITARIA MEDICINA INTEGRAL SAS</b>
                        </div>
                        <div class="col-12 text-center align-cente">
                            <b>MACROPROCESO: GESTIÓN CLÍNICA</b>
                        </div>
                    </div>
                </div>
                <div class="col-3 border">
                    <div class="row">
                        <div class="col-12 border-bottom display-12">
                            CÓDIGO: GCL-ENF-F042
                        </div>
                        <div class="col-12 border-bottom">
                            VERSIÓN: 01
                        </div>
                        <div class="col-12">
                            VIGENCIA: 25-08-2021
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12 border text-center align-center py-2">
                    <b>REVISIÓN DIARIA DE CARRO DE PARO</b>
                </div>
            </div>
        </div>
        <div class="container mt-3">

            <div class="row">
                <div class="col-3">
                    <label for="selec"><b>Piso No:</b></label>
                    <select class="form-select" aria-label="Default select example" name="select" required>
                        <option value="" selected>Seleccione el piso</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">6</option>
                        <option value="1">7</option>
                        <option value="2">8</option>
                        <option value="3">9</option>
                        <option value="3">10</option>
                        <option value="3">11</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="usuario"><b>Usuario Actual:</b></label>
                    <input type="text" class="form-control" name="usuario" id="usuario" value="juangarcia@gmail.com" readonly>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <form action="POST">
                <div class="row">
                    <div class="col-12 border  text-center align-center bg-primary py-1">
                        <h6><b>REGISTRO DE CONTROL DE EQUIPOS DE APOYO</b></h6>
                    </div>
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-12">
                                <table id="tblContactos" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="col-6 border align-cente text-center">Descripción</th>
                                            <th class="col-1 border align-cente text-center ">Si</th>
                                            <th class="col-1 border align-cente text-center">No</th>
                                            <th class="col-1 border align-cente text-center">N/A</th>
                                            <th class="col-3 border align-cente text-center">Observaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Sistema de cierre de seguridad íntegro operativo
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si" required>
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no" required>
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na" required>
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Monitor de signos vitales completo en buen estado
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_2" id="inlineRadio1" value="si">
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_2" id="inlineRadio2" value="no">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_2" id="inlineRadio2" value="na">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p2" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Laringoscopio, limpio, completo y en buen estado
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_3" id="inlineRadio1" value="si">
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_3" id="inlineRadio2" value="no">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_3" id="inlineRadio2" value="na">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Guía auxiliar para intubación endotraqueal
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_4" id="inlineRadio1" value="si">
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_4" id="inlineRadio2" value="no">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_4" id="inlineRadio2" value="na">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Ambú pediátrico en buen estado y completo
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_5" id="inlineRadio1" value="si">
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_5" id="inlineRadio2" value="no">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_5" id="inlineRadio2" value="na">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Ambú adultos en buen estado y completo
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Bala de Oxigeno completa y funcional
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Equipo de succión completo
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td class="col-6 border align-cente text-center">
                                                Carpeta de carro de paro completa y actualizada
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                    <label class="form-check-label" for="inlineRadio1"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline align-center">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-1 border align-cente text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                    <label class="form-check-label" for="inlineRadio2"></label>
                                                </div>
                                            </td>
                                            <td class="col-3 border align-cente text-center">
                                                <div>
                                                    <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <br>
        <div class="container bt-5">
            <div class="row">
                <div class="col-12 border text-center align-center bg-primary py-1">
                    <h6><b>DESFRIBILADOR</b></h6>
                </div>
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-12">
                            <table id="tblContactos" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="col-6 border align-cente text-center">Descripción</th>
                                        <th class="col-1 border align-cente text-center ">Si</th>
                                        <th class="col-1 border align-cente text-center">No</th>
                                        <th class="col-1 border align-cente text-center">N/A</th>
                                        <th class="col-3 border align-cente text-center">Observaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Equipo completo, sin daños externos
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Organizado, limpio y puesto en carro de paro
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Laringoscopio, limpio, completo y en buen estado
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Guía auxiliar para intubación endotraqueal
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Ambú pediátrico en buen estado y completo
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Ambú adultos en buen estado y completo
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Bala de Oxigeno completa y funcional
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Equipo de succión completo
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Carpeta de carro de paro completa y actualizada
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Sistema de cierre de seguridad íntegro operativo
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Monitor de signos vitales completo en buen estado
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Laringoscopio, limpio, completo y en buen estado
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Guía auxiliar para intubación endotraqueal
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Ambú pediátrico en buen estado y completo
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Ambú adultos en buen estado y completo
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Bala de Oxigeno completa y funcional
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Equipo de succión completo
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <td class="col-6 border align-cente text-center">
                                            Carpeta de carro de paro completa y actualizada
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si">
                                                <label class="form-check-label" for="inlineRadio1"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline align-center">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na">
                                                <label class="form-check-label" for="inlineRadio2"></label>
                                            </div>
                                        </td>
                                        <td class="col-3 border align-cente text-center">
                                            <div>
                                                <input type="text" class="form-control" id="" name="obs_p1" placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 col-3 mx-auto mt-4">
            <button class="btn btn-primary btn-lg" type="submit"><b>Enviar Datos</b></button>
        </div>

    </form>
</main>
<?php
require RUTA_APP . '/vistas/inc/footer.php';
?>