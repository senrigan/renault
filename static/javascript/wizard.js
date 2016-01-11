searchVisible = 0;
transparent = true;
var modtecImage=false;
var modtecImageFile;

$(document).ready(function(){
    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();
   
    $('.wizard-card').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',
         
         onInit : function(tab, navigation, index){
            
           //check number of tabs and fill the entire row
           var $total = navigation.find('li').length;
           $width = 100/$total;
           
           $display_width = $(document).width();
           
           if($display_width < 600 && $total > 3){
               $width = 50;
           }
           
           navigation.find('li').css('width',$width + '%');
           
        },
        onNext: function(tab, navigation, index){
            if(index == 1){
                return validateFirstStep();
            } else if(index == 2){
                return validateSecondStep();
            } else if(index == 3){
                return validateThirdStep();
            } //etc. 
              
        },
        onTabClick : function(tab, navigation, index){
            // Disable the posibility to click on tabs
            return false;
        }, 
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            
            var wizard = navigation.closest('.wizard-card');
            
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $(wizard).find('.btn-next').hide();
                $(wizard).find('.btn-finish').show();
            } else {
                $(wizard).find('.btn-next').show();
                $(wizard).find('.btn-finish').hide();
            }
        }

    });
    $(".btn-finish").click(function(){
        if(regtecactive){
            if(validateTec()){
                var name=$("#firstname").val();
                var patern=$("#lastnamePatern").val();
                var mother=$("#lastnameMother").val();
                var pict=$("#wizard-picture");
                $.post("controller/registrar_tecnico.php",{firstname:name,lastnamePatern:patern,lastnameMother:mother,'wizard-picture':pict},function(data){
                    if(data!=-1){
                        if(data==0){
                        alert("el tecnico ya esta registrador");
                        }else{
                            alert("Tecnico Registrado existosamente");    
                        }    
                    }else{
                        alert("Error al acceder ala base de datos");
                    }
                    
                    
                });

            
            }
        }
        if(reguseractive){
            alert("reguser"+reguseractive);
            if(validateUser()){//registrar cuenta
                var user=$("#user").val();
                var pass=$("#password").val();
                var type=$("#typecount").val();

                $.post("controller/registrar_cuenta.php",{user:user,password:pass,typecount:type},function(data){
                    if(data==0){
                        alert("El usuario ya existe")
                        $("#user").val("");
                        $("#password").val("");

                    }else{//registro exitoso

                        alert(data);
                        $(".closeUserReg")[0].click();

                    }
                });
            }
        }
        if(modtecactive){
            if(validateModtec()){
                var nombre=$("#modfirstname").val();
                var id=$("#idtec").val();
                
                var apaterno=$("#modlastnamepatern").val();
                var amaterno=$("#modlastnamemother").val();
                var imagenPreviw=$("#modwizardPicturePreview").val();
                /*var imagen=$("#modwizard-picture").val();
                var fileInput = $('#modwizard-picture')[0];
                if(imageFileCollection){
                    var formdata=new FormData();
                    formdata.append('image',imageFileCollection[0]);
                }*/
                if(modtecImage){
                    alert("entro a con imagen modificada");
                     $.post("controller/actualizar_tecnico.php",
                    {
                        idTecnico:id,
                        firstname:nombre,
                        lastnamePatern:apaterno,
                        lastnameMother:amaterno,
                        "wizard-picture":modtecImageFile,
                    }
                    ,function(data){
                        if(data==1){
                                alert("se modifico el tecnico existosamente");
                        }else{
                                alert("fallo al actualziar el tecnico");
                        }
                    });
                }else{
                     $.post("controller/actualizar_tecnico.php",
                    {
                        idTecnico:id,
                        firstname:nombre,
                        lastnamePatern:apaterno,
                        lastnameMother:amaterno,
                    }
                    ,function(data){
                        if(data==1){
                                alert("se modifico el tecnico existosamente");
                        }else{
                                alert("fallo al actualziar el tecnico");
                        }
                     });
                }
               
            }

        }
     
    });
  
    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });

     $('#modwizard-picture').change(function(){
        readURLMOD(this);
     });
    
    $('[data-toggle="wizard-radio"]').click(function(){
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked','true');
    });
    
    $('[data-toggle="wizard-checkbox"]').click(function(){
        if( $(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).find('[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).addClass('active');
            $(this).find('[type="checkbox"]').attr('checked','true');
        }
    });
    
    $height = $(document).height();
    $('.set-full-height').css('height',$height);
    
    
});

function validateTec(){
     $(".wizard-card form").validate({
        rules: {
            firstname: "required",
            lastnamePatern: "required",
            lastnameMother:"required",        
      },
        messages: {
            firstname: "Inserta tu nombre",
            lastnamePatern: "Inserta tu apellido Paterno",
            lastnameMother: "Inserta tu apellido materno"      
        }
    }); 
    
    if(!$(".wizard-card form").valid()){
        //form is invalid
        return false;
    }
    
    return true;
}

function validateModtec(){
      $(".wizard-card form").validate({
        rules: {
            modfirstname: "required",
            modlastnamePatern: "required",
            modlastnameMother:"required",        
      },
        messages: {
            modfirstname: "Inserta tu nombre",
            modlastnamePatern: "Inserta tu apellido Paterno",
            modlastnameMother: "Inserta tu apellido materno"      
        }
    }); 
    if(!$(".wizard-card form").valid()){
        //form is invalid
        return false;
    }
    
    return true;
}

function validateUser(){
    $(".wizard-card form").validate({
        rules: {
            user:"required",
            password:"required",
            typecount:"required",
        },
        messages: {
            user:"Insertar nombre de usuario",
            password:"Insertar una contraseña",
            typecount:"Insertar tipo de cuenta",
        }
    }); 
    
    if(!$(".wizard-card form").valid()){
        //form is invalid
        return false;
    }
    
    return true;
}
function validateFirstStep(){
    
    $(".wizard-card form").validate({
		rules: {
			firstname: "required",
			lastnamePatern: "required",
			lastnameMother:"required",
            user:"required",
            password:"required",
            typecount:"required",

			
/*  other possible input validations
			,username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
		
			topic: {
				required: "#newsletter:checked",
				minlength: 2
			},
			agree: "required"
*/			

		},
		messages: {
			firstname: "Inserta tu nombre",
			lastnamePatern: "Inserta tu apellido Paterno",
            lastnameMother: "Inserta tu apellido materno",
            user:"Insertar nombre de usuario",
            password:"Insertar una contraseña",
            typecount:"Insertar tipo de cuenta",
		

/*   other posible validation messages
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address",
			agree: "Please accept our policy",
			topic: "Please select at least 2 topics"
*/
				
		}
	}); 
	
	if(!$(".wizard-card form").valid()){
    	//form is invalid
    	return false;
	}
	
	return true;
}

function validateSecondStep(){
   
    //code here for second step
    $(".wizard-card form").validate({
		rules: {
			
		},
		messages: {
			
		}
	}); 
	
	if(!$(".wizard-card form").valid()){
    	console.log('invalid');
    	return false;
	}
	return true;
    
}

function validateThirdStep(){
    //code here for third step
    
    
}

 //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    

function readURLMOD(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#modwizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
        modtecImageFile=input.files[0];
        console.log(input.files[0]);
        modtecImage=true;
          // var files=e.target.files;
        /*var imageFileCollection=[];
        $.each(files,function(i,file){
            imageFileCollection.push(file);
        });*/
    }
}
    












