<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="icon" type="image/png" href="../../../static/images/admin/register/favicon.ico">
    <link href="../../../static/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../../static/css/gsdk-base.css" rel="stylesheet" />
    

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('../../../static/images/admin/register/reno1.jpg')" >
  
       <div class="logo-container">
          <div class="logo">
              <img src="../../../static/images/admin/register/logo.png" height="70px" width="70px">
          </div>
          <div class="brand">
              Administrador
          </div>
      </div>
    
    
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                
                <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
                    <form  enctype="multipart/form-data" action="../controller/registrar_tecnico.php" method="POST" id="register_user" name="register_user">
         
                
                    	<div class="wizard-header">
                        	<h3>
                        	   <b>Registro de Tecnicos</b><br>
                        	
                        	</h3>
                    	</div>
                    	<ul>
                            <li><a href="#about" data-toggle="tab">Datos Personales</a></li>
                           
                        </ul>
                        
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                 
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="../../../static/images/admin/register/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input name="wizard-picture" type="file" id="wizard-picture">
                                          </div>
                                          <h6>Elegir Imagen</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Nombre <small>(required)</small></label>
                                        <input name="firstname" type="text" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label>Apellido Paterno <small>(required)</small></label>
                                        <input name="lastnamePatern" type="text" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label>Apellido Materno <small>(required)</small></label>
                                        <input name="lastnameMother" type="text" class="form-control" >
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
        </div><!-- end row -->
    </div> <!--  big container -->
    
    
  

</div>

</body>

    <script src="../../../static/javascript/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../../../static/javascript/bootstrap.min.js" type="text/javascript"></script>
		
	<!--   plugins 	 -->
	<script src="../../../static/javascript/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	
    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="../../../static/javascript/jquery.validate.min.js"></script>
	
    <!--  methods for manipulating the wizard and the validation -->
	<script src="../../../static/javascript/wizard.js"></script>

</html>