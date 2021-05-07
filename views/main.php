<div class="container-fluid">
    <div class="row main-content-row">
        <div class="col-s-12 d-flex flex-column justify-content-center">


            <form class="form2call d-flex align-self-center flex-column" action="<?php echo $_SERVER['PHP_SELF'] ?>"
                method="post">
                <img src="assets/img/call.png" class="rounded mx-auto d-block img-click-2-call" alt="Click2Call">
                <div class="mt-2 info-text text-white text-lead text-center">
                    <p>Coloque su número de celular y nombre (ej:104333333). lo llamaremos en los próximos dos minutos
                    </p>
                </div>
                <div class="focus-field-form">
                    <div class="focus-scroller">
                        <div class="input-container mt-4 d-flex justify-content-center align-items-center">
                            <i class="far fa-user m-3" style="font-size:30px;color:white;"></i>
                            <input class="ss-item-required name-input-field form-control w-100" placeholder="Nombre" type="text" size="30" maxlength="12" name="txtname" required>
                        </div>

                        <div class="input-container mt-4 d-flex justify-content-center align-items-center">
                            <i class="far fa-phone-square-alt m-3" style="font-size:30px;color:white;"></i>
                            <input class="ss-item-required number-input-field form-control w-100" placeholder="Número" type="text" size="30" maxlength="7" name="txtphonenumber" required>
                        </div>
                    </div>
                </div>


                <div class="d-flex button-container justify-content-center">
                    <input class="mt-4 btn btn-success call-me-button required" type="submit" value="Llamarme">
                </div>

            </form>
        </div>
    </div>
</div>