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
                <form action="<?= $router->route("form.login") . "/"; ?>" id="formLogin" method="POST">
                    <div class="logo text-center">
                        <a><i class="material-icons" style="font-size: 100px;color: #2196F3; ">business</i></a>
                        <!-- <hr style="border: 1px solid #03A9F4; margin-bottom: 10px; margin-top: 0px; width: 50%;" /> -->
                        <!-- <small>CondApp</small> -->
                    </div>
                    <div class="msg">Entre para inicar sua sessão</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="CPF" autofocus="off" autocomplete="off" value="">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="ds_senha" placeholder="Senha"
                            value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="snLembrar" id="snLembrar" class="filled-in chk-col-blue">
                            <label for="snLembrar">&nbsp;Lembrar-me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="submit">ENTRAR</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="<?= url("/esqueceu-a-senha"); ?>">Esqueceu a senha?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="ajax_form"></div>

    <!-- Jquery Core Js -->
    <script src="<?= url("/themes/lib/plugins/jquery/jquery.min.js"); ?>"></script>

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
    <script src="<?= url("/themes/lib/plugins/sweetalert/sweetalert2.min.js"); ?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?= url("/themes/lib/plugins/bootstrap-select/js/bootstrap-select.js"); ?>"></script>

    <!-- Custom Js -->
    <!-- <script src="../lib/js/admin.js"></script> -->
    <script src="<?= url("/themes/lib/js/pages/ui/dialogs.js"); ?>"></script>
    <script src="<?= url("/themes/lib/js/pages/examples/sign-in.js"); ?>"></script>
    <script type="text/javascript">
        setTimeout(function(){$("#inputSelectEmpresa").removeClass('focused');},100);

        $("#formLogin").submit(function (e) {

            // swal({
            //     title: "Autenticando...",
            //     text: "Por favor aguarde",
            //     icon: "../lib/media/images/spinner.gif",
            //     closeOnClickOutside: false,
            //     closeOnEsc: false,
            //     buttons: false
            // });

            if ($('#snLembrar').is(':checked') == true) {
                var username = $('#formLogin input[name=username]').val();
                document.cookie = 'username='+username ;
            }else{
                document.cookie = 'username=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }

            e.preventDefault();

            var form = $(this);
            var form_ajax = $(".ajax_form");

            $.ajax({
                url: form.attr("action"),
                data: form.serialize(),
                type: "POST",
                dataType: "json",
                sucess: function (callback) {
                    console.log(callback);
                }

            })

            // $.ajax({
            //     type: "POST",
            //     url: "app/control/login.php",
            //     data: $(this).serialize(),
            //     success: function(data){
            //         $("#result").html(data);
            //     }
            // })
            // return false;
        });

        $('input[name=username]').mask('000.000.000-00');

    </script>
    <div id="result"></div>
</body>