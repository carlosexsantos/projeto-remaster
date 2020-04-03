<?php $v->layout("_theme"); ?>


<style type="text/css">
    .photo-container{
        position: fixed; width: 100%; height: 100%; left: 0; top:0;
    }
    .photo-container img {
        position: absolute;
        z-index: 0;
        bottom: 0;
    }
    .photo-container img.fillWidth {
        width: 100%;
    }
</style>

<body class="login-page bg-indigo">
    <div class="photo-container" class="fillWidth">
        <img src="<?= url("/themes/lib/media/images/thumb.jpg"); ?>" class="">
        <div style="position: absolute; width: 100%; height: 100%; left: 0; top:0;  background: rgba(0,0,0, 0.5);">
        </div>
    </div>
    <div class="login-box animated bounceInDown">
        <div class="card animated bounceInUp">
			<div class="body">
                <form id="formForgotPassword" method="POST">
					<div class="logo text-center">
                        <a><i class="material-icons" style="font-size: 100px;color: #2196F3; ">business</i></a>
                    </div>
                    <div class="msg">
                        Insira seu CPF para ser enviado um link de recuperação de senha no email cadastrado. Verifique também sua caixa de spam.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="cpf" placeholder="CPF" required="" autofocus="" aria-required="true" aria-invalid="true" autocomplete="off">
                        </div>
					</div>

                    <button class="btn btn-block btn-lg bg-blue waves-effect" type="submit">ENVIAR</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="<?= url(); ?>">Entrar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?= url("/themes/lib/plugins/jquery/jquery.min.js"); ?>"></script>
    <script src="<?= url("/themes/lib/plugins/bootstrap-notify/bootstrap-notify.js"); ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= url("/themes/lib/plugins/bootstrap/js/bootstrap.js"); ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= url("/themes/lib/plugins/node-waves/waves.js"); ?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= url("/themes/lib/plugins/jquery-validation/jquery.validate.js"); ?>"></script>

    <!-- InputMask -->
    <script src="<?= url("/themes/lib/plugins/jquery-inputmask/jquery.inputmask.bundle.js"); ?>"></script>

    <!-- Jquery Mask Js -->
    <script src="<?= url("/themes/lib/plugins/jquery-mask/jquery.mask.1.14.10.js"); ?>"></script>

    <!-- SweetAlert -->
    <script src="<?= url("/themes/lib/plugins/sweetalert/sweetalert2.min.j"); ?>s"></script>

    <!-- Select Plugin Js -->
    <script src="<?= url("/themes/lib/plugins/bootstrap-select/js/bootstrap-select.js"); ?>"></script>

    <!-- Custom Js -->
    <script src="<?= url("/themes/lib/js/admin.js"); ?>"></script>
    <!-- <script src="<?= url("/themes/lib/js/pages/ui/dialogs.js"); ?>"></script> -->
    <!-- <script src="<?= url("/themes/lib/js/pages/examples/sign-in.js"); ?>"></script> -->
    <script type="text/javascript">
        $.AdminBSB.input.activate();

        $('input[name=username]').mask('000.000.000-00');

        $("#formForgotPassword").submit(function(){

        	var cpf = $('input[name=cpf]').val() ;
        	if(cpf.length < 14){
        		errorNotify("Preencha o CPF corretamente");
        	}else{

            	swal({
            	    title: "Validando...",
            	    text: "Por favor aguarde",
            	    icon: "../../lib/media/images/spinner.gif",
            	    closeOnClickOutside: false,
            	    closeOnEsc: false,
            	    buttons: false
            	});
	
				$.ajax({
					type: "POST",
					url: "../app/control/forgotPass.php",
					data: $(this).serialize(),
					success: function(data){
            			if (data == "I") {
                            errorNotify("CPF inválido");
                            swal.close();
                        }else if(data == "N"){
                            errorNotify("CPF não cadastrado");
                            swal.close();
                        }else{
                            var html = '<div class="logo text-center"><a><i class="material-icons" style="font-size: 100px;color: #2196F3; ">business</i></a></div><div class="msg">Um link de recuperação de senha foi enviado para o email <b>'+data+'</b>. Verifique sua caixa de entrada e se não houver verifique também sua caixa de spam</div><div class="row m-t-20 m-b--5 align-center"><a href="../">Entrar</a></div>';
                            $('div.body').html(html);
                            swal.close();
                        }
            		}
            	})

        	}

            return false;
        });

        function errorNotify(m){
        	$.notify(
        		{ 
        			message: '<strong>Erro</strong> '+m
        		}, 
        		{ 
        			type: 'danger',
        			timer: 1000, 
        			delay: 5000,
        			placement:{
        				align: 'center'
        			}
        		}
        	);
        }

        $('input[name=cpf]').mask('000.000.000-00');

	</script>

</script>
<div id="result"></div>
</body>