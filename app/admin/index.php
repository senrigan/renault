<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../static/css/bootstrap/css/bootstrap.min.css">
  <link href="../../static/css/gsdk-base.css" rel="stylesheet" />
  <link rel="icon" type="image/png" href="../../static/images/admin/register/favicon.ico">
  <link rel="stylesheet" href="../../static/css/modal.css" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../../static/css/bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../../static/css/style_index.css" />




  <script src="../../static/javascript/jquery-1.11.3.min.js"></script>
  <script src="../../static/javascript/bootstrap.min.js"></script>
  <script src="../../static/javascript/staticvar.js"></script>
  <script src="../../static/javascript/admin/gestor_menu.js"></script>
  <script src="../../static/javascript/jquery.bootstrap.wizard.js" type="text/javascript"></script>
  <script src="../../static/javascript/jquery.validate.min.js"></script>
  <script src="../../static/javascript/wizard.js"></script>

<!--  librerias para el carrusel -->
  <link rel='stylesheet' id='style-css'  href='../../static/javascript/diapo/diapo.css' type='text/css' media='all'>
  <!-- <script type='text/javascript' src='../../static/javascript/diapo/scripts/jquery.min.js'></script> -->
  <script type='text/javascript' src='../../static/javascript/diapo/scripts/jquery.easing.1.3.js'></script>
  <script type='text/javascript' src='../../static/javascript/diapo/scripts/jquery.hoverIntent.minified.js'></script>
  <script type='text/javascript' src='../../static/javascript/diapo/scripts/diapo.js'></script>
  <script type='text/javascript' src='../../static/javascript/diapo/scripts/test.js'></script>
  <link rel="stylesheet" href="../../static/javascript/diapo/carrusel.css" />




  <script>
  $(function(){
  	$('.pix_diapo').diapo();
  });

  </script>



</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=".">RENAULT ADMIN</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#regusermodal" id="reguser"   >Registrar</a></li>
            <li><a href="#" id="moduser"   >Modificar</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="tec">Tecnicos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#regtecmodal"  id="regtec">Registrar</a></li>
            <li><a href="#"  id="modtec">Modificar</a></li>
          </ul>
        </li>
        <li><a href="view/tablero.php" target="_self"></span>Tablero</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="container" name="container" class="container">
  <section>

    <div style="overflow:hidden; width:85%; height=85%; margin: 100px auto; padding:0 20px;">
              <div class="pix_diapo">

                  <!-- <div data-thumb="../../static/javascript/diapo/images/thumbs/megamind1048.jpg" data-time="5000" >
                      <img src="../../static/javascript/diapo/images/slides/megamind1048.jpg">
                  </div>
                  <div data-thumb="../../static/javascript/diapo/images/thumbs/megamind_07.jpg" data-time="5000">
                      <img src="../../static/javascript/diapo/images/slides/megamind_07.jpg">

                  </div>
                  <div data-thumb="../../static/javascript/diapo/images/thumbs/wall-e.jpg" data-time="5000">
                      <img src="../../static/javascript/diapo/images/slides/wall-e.jpg">

                  </div>
                  <div data-thumb="../../static/javascript/diapo/images/thumbs/ratatouille2.jpg">
                      <img src="../../static/javascript/diapo/images/slides/ratatouille2.jpg">
                  </div> -->
                  <?php
                   $ruta="../../static/images/carrusel/slide/";
                   // abrir un directorio y listarlo recursivo
                   if (is_dir($ruta)) {
                      if ($dh = opendir($ruta)) {
                         while (($file = readdir($dh)) !== false) {
                            //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio
                            //mostraría tanto archivos como directorios
                            //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file);
                            if (is_dir($ruta . $file) && $file!="." && $file!=".."){

                            }else{
                              if(!is_dir($ruta . $file)){
                                echo "
                                <div data-thumb='../../static/images/carrusel/thum/$file' data-time='5000' >
                                    <img src='$ruta$file'>
                                </div>
                                ";
                              }


                            }
                         }
                      closedir($dh);
                      }
                   }else
                      echo "<br>No es ruta valida";


                   ?>

             </div><!-- #pix_diapo -->



      </div>


  </section>
</div>

  <div id="regusermodal" class="modalmask">
    <div class="modalbox movedown">
      <a id="closeUserReg" href="#close" title="Close" class="close closeUserReg">X</a>
      <div id="modalcontent">

                <!--      Wizard container        -->
                <div class="wizard-container movedown">
                    <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
                        <form  id="register_user" name="register_user">


                          <div class="wizard-header">
                              <h3>
                                 <b>Registro de Usuarios</b><br>

                              </h3>
                          </div>
                          <ul>
                                <li><a href="#about" data-toggle="tab">Datos de la Cuenta</a></li>

                            </ul>

                            <div class="tab-content">
                                <div class="" id="about">
                                  <div class="row">


                                      <div class="col-sm-12">
                                          <div class="form-group">
                                            <label>usuario <small>(requerido)</small></label>
                                            <input name="user" id="user" type="text" class="form-control" >
                                          </div>
                                          <div class="form-group">
                                            <label>contraseña <small>(requerido)</small></label>
                                            <input name="password" id="password" type="text" class="form-control" >
                                          </div>
                                          <div class="form-group">
                                            <label>tipo de cuenta <small>(requerido)</small></label>

                                            <select name="typecount" id="typecount" class="form-control">
                                              <option value="1">usuario normal</option>
                                              <option value="2">administrador</option>
                                            </select>
                                          </div>
                                      </div>

                                  </div>
                                </div>


                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' id="finish" value='Registrar' />

                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->

      </div>

    </div>
  </div>
    <!-- MODIFICAR USUARIO-->
    <div id="modusermodal" class="modalmask">
    <div class="modalbox movedown">
      <a id="closeUserModReg" href="#close" title="Close" class="close closeUserModReg">X</a>
      <div id="modalcontent">

                <!--      Wizard container        -->
                <div class="wizard-container movedown">
                    <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
                        <form  id="modregister_user" name="modregister_user">


                          <div class="wizard-header">
                              <h3>
                                 <b> Actualizar Usuario</b><br>

                              </h3>
                          </div>
                          <ul>
                                <li><a href="#about" data-toggle="tab">Datos de la Cuenta</a></li>

                            </ul>

                            <div >
                                <div class="tab-pane" id="about">
                                  <div class="row alignClass">


                                      <div class="col-sm-12">
                                          <div class="form-group">
                                            <input id="idmodtec" type="text" hidden="true">
                                            <label>usuario <small>(requerido)</small></label>
                                            <input name="moduserInput" id="moduserInput" type="text" class="form-control" >
                                          </div>
                                          <div class="form-group">
                                            <label>contraseña <small>(requerido)</small></label>
                                            <input name="modpassword" id="modpassword" type="text" class="form-control" >
                                          </div>
                                          <div class="form-group">
                                            <label>tipo de cuenta <small>(requerido)</small></label>

                                            <select name="modtypecount" id="modtypecount" class="form-control">
                                              <option value="1">usuario normal</option>
                                              <option value="2">administrador</option>
                                            </select>
                                          </div>
                                      </div>

                                  </div>
                                </div>


                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' id="finish" value='Modificar' />

                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->

      </div>

    </div>
  </div>

  <div id="regtecmodal" class="modalmask">
      <div class="modalbox movedown">
        <a id="closeTecReg" href="#close" title="Close" class="close closeTecReg">X</a>
        <div id="modalcontent">

                    <!--   Big container   -->
            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
                    <form id="register_tec" name="register_tec">


                      <div class="wizard-header">
                          <h3>
                             <b>Registro de Tecnicos</b><br>

                          </h3>
                      </div>
                      <ul>
                            <li><a href="#about" data-toggle="tab">Datos Personales</a></li>

                        </ul>

                        <div class="tab-content">
                            <div class="" id="about">
                              <div >

                                  <div >
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="../../static/images/admin/register/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input name="wizard-picture" type="file" id="wizard-picture">
                                          </div>
                                          <h6>Elegir Imagen</h6>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="form-group">
                                        <label>Nombre <small>(requerido)</small></label>
                                        <input id="firstname" name="firstname" type="text" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label>Apellido Paterno <small>(requerido)</small></label>
                                        <input id="lastnamepatern" name="lastnamepatern" type="text" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label>Apellido Materno <small>(requerido)</small></label>
                                        <input id="lastnamemother" name="lastnamemother" type="text" class="form-control" >
                                      </div>
                                  </div>

                              </div>
                            </div>


                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' id="finish" value='Registrar' />

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>

      </div>
  </div>


<div id="modtecmodal" class="modalmask">
    <div class="modalbox movedown">
      <a id="closeTecReg" href="#close" title="Close" class="close closeTecModReg">X</a>
      <div id="modalcontent">

                  <!--   Big container   -->
          <!--      Wizard container        -->
          <div class="wizard-container">

              <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
                  <form id="modregister_tec" name="modregister_tec">


                    <div class="wizard-header">
                        <h3>
                           <b>Datos de Tecnico</b><br>

                        </h3>
                    </div>
                    <ul>
                          <li><a href="#about" data-toggle="tab">Datos Personales</a></li>

                      </ul>

                      <div class="tab-content">
                          <div class="" id="about">
                            <div >

                                <div >
                                   <div class="picture-container">
                                        <div class="picture">
                                            <img src="../../static/images/admin/register/default-avatar.png" class="picture-src" id="modwizardPicturePreview" title=""/>
                                            <input name="modwizard-picture" type="file" id="modwizard-picture">
                                        </div>
                                        <h6>Elegir Imagen</h6>
                                    </div>
                                </div>
                                <div>
                                    <input id="idtec" type="text" hidden="true">
                                    <div class="form-group">
                                      <label>Nombre <small>(requerido)</small></label>
                                      <input id="modfirstname" name="modfirstname" type="text" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                      <label>Apellido Paterno <small>(requerido)</small></label>
                                      <input id="modlastnamepatern" name="modlastnamepatern" type="text" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                      <label>Apellido Materno <small>(requerido)</small></label>
                                      <input id="modlastnamemother" name="modlastnamemother" type="text" class="form-control" >
                                    </div>
                                </div>

                            </div>
                          </div>


                      </div>
                      <div class="wizard-footer">
                          <div class="pull-right">
                              <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                              <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' id="finish" value='Modificar' />

                          </div>

                          <div class="pull-left">
                              <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </div> <!-- wizard container -->
      </div>

    </div>



</div>
</body>
</html>
