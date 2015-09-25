<!-- FORMULARIO: Información Personal -->
<div class="form_content animation-fadeInQuick">
    <div class="table_form_container">
        <header class="caption_info">
            <div class="ico_content">
                <i class="fa fa-bookmark fa-3x fa-lg fa-fw text-primary change_fa"></i>
            </div>
            <div class="title_content">
                <h1 class="info_form">Información Personal</h1>
            </div>
        </header>
    </div>
    <section class="body_form_info">
        <div class="form_inline_content" id="container_inf_personal">
            <form id="survey-personal">
                <!-- Nombre, Apellido Paterno, Apellido Materno -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Nombre
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canNombre'
                                        name='can_name'
                                        class='form-control perInput valida_campo'
                                        placeholder='. . .'
                                        data-entorno='ap_nombre'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Apellido Paterno
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canApellidoPaterno'
                                        name='can_sur_pat'
                                        class='form-control perInput valida_campo'
                                        placeholder='. . .'
                                        data-entorno='ap_paterno'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Apellido Materno
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canApellidoMaterno'
                                        name='can_sur_mat'
                                        class='form-control perInput valida_campo'
                                        placeholder='. . .'
                                        data-entorno='ap_materno'>
                                </div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END Nombre, Apellido Paterno, Apellido Materno -->
                <div class="space-out"></div>
                <!-- Fecha de Nacimiento, Lugar de Nacimiento -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Fecha Nacimiento
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        class='form-control perInput validaFecha'
                                        id='canNacimiento'
                                        name='can_birthday'
                                        placeholder='AAAA-MM-D'
                                        data-date-format='YYYY-MM-DDD'
                                        data-entorno='birth_day'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Lugar de Nacimiento
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canCityBorn'
                                        name='can_birthplace'
                                        class='form-control perInput valida_campo'
                                        placeholder='Ciudad de Nacimiento'
                                        data-entorno='city_born'>
                                </div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END Fecha de Nacimiento, Lugar de Nacimiento -->
                <div class="space-out"></div>
                <!-- Sexo, ¿Tienes Hijos? -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Sexo
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-6">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canSex valida_radio'
                                                id='canSexH'
                                                name='can_gender'
                                                value='Hombre'
                                                data-entorno='sex'>
                                            <label for="canSexH" style="width: 100%;">
                                                <span></span>
                                                <div>Hombre</div>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canSex valida_radio'
                                                id='canSexM'
                                                name='can_gender'
                                                value='Mujer'
                                                data-entorno='sex'>
                                            <label for="canSexM" style="width: 100%;">
                                                <span></span>
                                                <div>Mujer</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Tienes Hijos?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-6">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canChi valida_radio'
                                                id='canChiS'
                                                name='can_children'
                                                value='Si'
                                                data-entorno='chi'>
                                            <label for="canChiS" style="width: 100%;">
                                                <span></span>
                                                <div>Sí</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canChi valida_radio'
                                                id='canChiN'
                                                name='can_children'
                                                value='No'
                                                data-entorno='chi'>
                                            <label for="canChiN" style="width: 100%;">
                                                <span></span>
                                                <div>No</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END Sexo, ¿Tienes Hijos? -->
                <div class="space-out"></div>
                <!-- Estado Civil -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Estado Civil
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-3">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canCivil valida_radio'
                                                id='canCivilS'
                                                name='can_m_status'
                                                value='Soltero(a)'
                                                data-entorno='civil'>
                                            <label for="canCivilS" style="width: 100%;">
                                                <span></span>
                                                <div>Soltero(a)</div>
                                        </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canCivil valida_radio'
                                                id='canCivilC'
                                                name='can_m_status'
                                                value='Casado(a)'
                                                data-entorno='civil'>
                                            <label for="canCivilC" style="width: 100%;">
                                                <span></span>
                                                <div>Casado(a)</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canCivil valida_radio'
                                                id='canCivilD'
                                                name='can_m_status'
                                                value='Divorciado(a)'
                                                data-entorno='civil'>
                                            <label for="canCivilD" style="width: 100%;">
                                                <span></span>
                                                <div>Divorciado(a)</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canCivil valida_radio'
                                                id='canCivilV'
                                                name='can_m_status'
                                                value='Viudo(a)'
                                                data-entorno='civil'>
                                            <label for="canCivilV" style="width: 100%;">
                                                <span></span>
                                                <div>Viudo(a)</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END Estado Civil -->
                <div class="space-out"></div>
                <!-- CURP, RFC, N°. Seguro Social -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                CURP
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canCurp'
                                        name='can_curp'
                                        class='form-control perInput valida_campo'
                                        placeholder='. . .'
                                        data-entorno='curp'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                RFC
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canRFC'
                                        name='can_rfc'
                                        class='form-control perInput'
                                        placeholder='. . .'
                                        data-entorno='rfc' disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                N°. Seguro Social
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canSS'
                                        name='can_assurance'
                                        class='form-control perInput valida_campo'
                                        placeholder='Ingresa solo 11 Digitos'
                                        data-entorno='ss'
                                        maxlength='11'>
                                </div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END CURP, RFC, N°. Seguro Social -->
                <div class="space-out"></div>
                <!-- Telefono, Calle y Numero, Codigo Postal -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Telefono
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canPhone'
                                        name='can_phone'
                                        class='form-control perInput valida_campo'
                                        placeholder='. . .'
                                        data-entorno='phone'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Calle y Número
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canStreet'
                                        name='adr_name'
                                        class='form-control perInput valida_campo'
                                        placeholder='. . .'
                                        data-entorno='street'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Código Postal
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='number'
                                        id='canZC'
                                        name='adr_cp'
                                        class='form-control perInput valida_campo'
                                        placeholder='. . .'
                                        data-entorno='zc'>
                                </div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END Telefono, Calle y Numero, Codigo Postal -->
                <div class="space-out"></div>
                <!-- Estado, Municipio, Colonia -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Estado
                            </div>
                            <!-- Select Estado -->
                            <div class="form-group">
                                <div>
                                    <div id='div-can-state'></div>
                                    <input type='text'
                                        id='canColony'
                                        name='adr_suburb'
                                        class='form-control perInput'
                                        placeholder='Colonia'
                                        data-entorno='colony'>
                                </div>
                            </div>
                            <!-- END Select Estado -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Municipio
                            </div>
                            <!-- Select Municipio -->
                            <div class="form-group">
                                <div>
                                    <div id='div-can-city'></div>
                                    <input type='text'
                                        id='canColony'
                                        name='adr_suburb'
                                        class='form-control perInput'
                                        placeholder='Colonia'
                                        data-entorno='colony'>
                                </div>
                            </div>
                            <!-- END Select Municipio -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Colonia
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canColony'
                                        name='adr_suburb'
                                        class='form-control perInput valida_campo'
                                        placeholder='Colonia'
                                        data-entorno='colony'>
                                </div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END Estado, Municipio, Colonia -->
                <div class="space-out"></div>
                <!-- Peso kg, Altura cm -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Peso kg
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canWeight'
                                        name='can_weight'
                                        class='form-control perInput valida_campo'
                                        placeholder='Peso kg'
                                        data-entorno='weight'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Altura cm
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type='text'
                                        id='canHeight'
                                        name='can_height'
                                        class='form-control perInput valida_campo'
                                        placeholder='Altura cm'
                                        data-entorno='height'>
                                </div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END Peso kg, Altura cm -->
                <div class="space-out"></div>
                <!-- ¿Cómo consideras tu estado de salud actual? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Cómo consideras tu estado de salud actual?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canHealth valida_radio'
                                                id='canHealthB'
                                                name='hlt_current'
                                                value='Bueno'
                                                data-entorno='health'>
                                            <label for="canHealthB" style="width: 100%;">
                                                <span></span>
                                                <div>Bueno</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canHealth valida_radio'
                                                id='canHealthM'
                                                name='hlt_current'
                                                value='Regular'
                                                data-entorno='health'>
                                            <label for="canHealthM" style="width: 100%;">
                                                <span></span>
                                                <div>Regular</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canHealth valida_radio'
                                                id='canHealthR'
                                                name='hlt_current'
                                                value='Malo'
                                                data-entorno='health'>
                                            <label for="canHealthR" style="width: 100%;">
                                                <span></span>
                                                <div>Malo</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ¿Cómo consideras tu estado de salud actual? -->
                <div class="space-out"></div>
                <!-- ¿Con qué frecuencia fumas? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Con qué frecuencia fumas?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canSmoke valida_radio'
                                                id='canSmokeN'
                                                name='hlt_f_smoke'
                                                value='Nunca'
                                                data-entorno='smoke'>
                                            <label for="canSmokeN" style="width: 100%;">
                                                <span></span>
                                                <div>Nunca</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canSmoke valida_radio'
                                                id='canSmokeCN'
                                                name='hlt_f_smoke'
                                                value='Uno o dos al mes'
                                                data-entorno='smoke'>
                                            <label for="canSmokeCN" style="width: 100%;">
                                                <span></span>
                                                <div>Uno o dos al mes</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canSmoke valida_radio'
                                                id='canSmokeAV'
                                                name='hlt_f_smoke'
                                                value='Los fines de semana'
                                                data-entorno='smoke'>
                                            <label for="canSmokeAV" style="width: 100%;">
                                                <span></span>
                                                <div>Los fines de semana</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canSmoke valida_radio'
                                                id='canSmokeM'
                                                name='hlt_f_smoke'
                                                value='Uno al día'
                                                data-entorno='smoke'>
                                            <label for="canSmokeM" style="width: 100%;">
                                                <span></span>
                                                <div>Uno al día</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canSmoke valida_radio'
                                                id='canSmokeS'
                                                name='hlt_f_smoke'
                                                value='Todos los días más de dos cigarrillos'
                                                data-entorno='smoke'>
                                            <label for="canSmokeS" style="width: 100%;">
                                                <span></span>
                                                <div>Todos los días más de dos cigarrillos</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-2"></div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ¿Con qué frecuencia fumas? -->
                <div class="space-out"></div>
                <!-- ¿Con qué frecuencia consumes alcohol? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Con qué frecuencia consumes alcohol?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canDrink valida_radio'
                                                id='canDrinkN'
                                                name='hlt_f_drink'
                                                value='Nunca'
                                                data-entorno='drink'>
                                            <label for="canDrinkN" style="width: 100%;">
                                                <span></span>
                                                <div>Nunca</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canDrink valida_radio'
                                                id='canDrinkCN'
                                                name='hlt_f_drink'
                                                value='Sólo en ocasiones especiales<'
                                                data-entorno='drink'>
                                            <label for="canDrinkCN" style="width: 100%;">
                                                <span></span>
                                                <div>Sólo en ocasiones especiales</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canDrink valida_radio'
                                                id='canDrinkAV'
                                                name='hlt_f_drink'
                                                value='Todos los fines de semana para relajarme'
                                                data-entorno='drink'>
                                            <label for="canDrinkAV" style="width: 100%;">
                                                <span></span>
                                                <div>Todos los fines de semana para relajarme</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canDrink valida_radio'
                                                id='canDrinkM'
                                                name='hlt_f_drink'
                                                value='2 veces por semana'
                                                data-entorno='drink'>
                                            <label for="canDrinkM" style="width: 100%;">
                                                <span></span>
                                                <div>2 veces por semana</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canDrink valida_radio'
                                                id='canDrinkS'
                                                name='hlt_f_drink'
                                                value='Todos los días un poco'
                                                data-entorno='drink'>
                                            <label for="canDrinkS" style="width: 100%;">
                                                <span></span>
                                                <div>Todos los días un poco</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-2"></div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ¿Con qué frecuencia consumes alcohol? -->
                <div class="space-out"></div>
                <!-- ¿Con qué frecuencia te ejercitas? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Con qué frecuencia te ejercitas?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canExcercise valida_radio'
                                                id='ccanExcerciseN'
                                                name='hlt_f_exercise'
                                                value='Nunca'
                                                data-entorno='exercise'>
                                            <label for="ccanExcerciseN" style="width: 100%;">
                                                <span></span>
                                                <div>Nunca</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canExcercise valida_radio'
                                                id='ccanExcerciseCN'
                                                name='hlt_f_exercise'
                                                value='Casi Nunca'
                                                data-entorno='exercise'>
                                           <label for="ccanExcerciseCN" style="width: 100%;">
                                                <span></span>
                                                <div>Casi Nunca</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canExcercise valida_radio'
                                                id='ccanExcerciseAV'
                                                name='hlt_f_exercise'
                                                value='Algunas Veces'
                                                data-entorno='exercise'>
                                            <label for="ccanExcerciseAV" style="width: 100%;">
                                                <span></span>
                                                <div>Algunas Veces</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canExcercise valida_radio'
                                                id='ccanExcerciseM'
                                                name='hlt_f_exercise'
                                                value='La mayor parte del tiempo'
                                                data-entorno='exercise'>
                                            <label for="ccanExcerciseM" style="width: 100%;">
                                                <span></span>
                                                <div>La mayor parte del tiempo</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='perRadio canExcercise valida_radio'
                                                id='ccanExcerciseS'
                                                name='hlt_f_exercise'
                                                value='Siempre'
                                                data-entorno='exercise'>
                                            <label for="ccanExcerciseS" style="width: 100%;">
                                                <span></span>
                                                <div>Siempre</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-2"></div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ¿Con qué frecuencia te ejercitas? -->
            </form>
            <!-- Button goPersonal -->
            <div class="block full" style="background: none;">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3">
                            <button class='btn btn-success' id='goPersonal'>
                                Siguiente&nbsp;&nbsp;<i class="fa fa-arrow-right fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- END Button goPersonal -->
        </div>
    </section>
</div>
<!-- FORMULARIO: END Información Personal -->
<div class="clearfix"></div>
<!-- FORMULARIO: Formación Académica -->
<div class="form_content animation-fadeInQuick">
    <div class="table_form_container">
        <header class="caption_info">
            <div class="ico_content">
                <i class="fa fa-mortar-board fa-3x fa-lg fa-fw text-primary change_fa"></i>
            </div>
            <div class="title_content">
                <h1 class="info_form">Formación Académica</h1>
            </div>
        </header>
    </div>
    <section class="body_form_info">
        <div class="form_inline_content" id="container_for_academica">
            <form id="survey-academic">
                <!-- Situación académica -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Situación académica
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canGrade valida_radio'
                                                id='canGradeSE'
                                                name='aca_grade'
                                                value='Sin escolaridad'
                                                data-entorno='grade'>
                                            <label for="canGradeSE" style="width: 100%;">
                                                <span></span>
                                                <div>Sin escolaridad</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canGrade valida_radio'
                                                id='canGradePri'
                                                name='aca_grade'
                                                value='Primaria'
                                                data-entorno='grade'>
                                            <label for="canGradePri" style="width: 100%;">
                                                <span></span>
                                                <div>Primaria</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canGrade valida_radio'
                                                id='canGradeSec'
                                                name='aca_grade'
                                                value='Secundaria'
                                                data-entorno='grade'>
                                            <label for="canGradeSec" style="width: 100%;">
                                                <span></span>
                                                <div>Secundaria</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canGrade valida_radio'
                                                id='canGradePre'
                                                name='aca_grade'
                                                value='Preparatoria'
                                                data-entorno='grade'>
                                            <label for="canGradePre" style="width: 100%;">
                                                <span></span>
                                                <div>Preparatoria</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canGrade valida_radio'
                                                id='canGradeUTr'
                                                name='aca_grade'
                                                value='Universidad trunca'
                                                data-entorno='grade'>
                                            <label for="canGradeUTr" style="width: 100%;">
                                                <span></span>
                                                <div>Universidad trunca</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canGrade valida_radio'
                                                id='canGradeUTe'
                                                name='aca_grade'
                                                value='Universidad terminada'
                                                data-entorno='grade'>
                                            <label for="canGradeUTe" style="width: 100%;">
                                                <span></span>
                                                <div>Universidad terminada</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Situación académica -->
                <div class="space-out"></div>
                <!-- ¿Hablas otro idioma además del español? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Hablas otro idioma además del español?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canLge valida_radio'
                                                id='canLgeS'
                                                name='aca_o_language'
                                                value='Si'
                                                data-language = '1'
                                                data-entorno='language'>
                                            <label for="canLgeS" style="width: 100%;">
                                                <span></span>
                                                <div>Sí</div>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canLge valida_radio'
                                                id='canLgeN'
                                                name='aca_o_language'
                                                value='No'
                                                data-language = '0'
                                                data-entorno='language'>
                                            <label for="canLgeN" style="width: 100%;">
                                                <span></span>
                                                <div>No</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-2"></div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ¿Hablas otro idioma además del español? -->
                <div class="space-out"></div>
                <!-- Div Oculto Academic -->
                <div class="divCanLgeInfo" style="display:none;">
                <!-- ¿Cual idioma? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Cual idioma?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <input class='form-control acaInput valida_campo'
                                            id='canLgeName'
                                            name='lge_name'
                                            placeholder='Idioma'>
                                    </div>
                                    <div class="col-md-3"></div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ¿Cual idioma? -->
                <!-- Nivel de dominio -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Nivel de dominio
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canLgeLevel valida_radio'
                                                id='canLgeLevelB'
                                                name='lge_level'
                                                value='Basico'
                                                data-entorno='language_level'>
                                            <label for="canLgeLevelB" style="width: 100%;">
                                                <span></span>
                                                <div>Básico</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canLgeLevel valida_radio'
                                                id='canLgeLevelI'
                                                name='lge_level'
                                                value='Intermedio'
                                                data-entorno='language_level'>
                                            <label for="canLgeLevelI" style="width: 100%;">
                                                <span></span>
                                                <div>Intermedio</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='acaRadio canLgeLevel valida_radio'
                                                id='canLgeLevelA'
                                                name='lge_level'
                                                value='Avanzado'
                                                data-entorno='language_level'>
                                            <label for="canLgeLevelA" style="width: 100%;">
                                                <span></span>
                                                <div>Avanzado</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Nivel de dominio -->
                </div>
                <!-- END Div Oculto Academic -->
                <div class="space-out"></div>
            </form>
            <!-- Button goAcademic -->
            <div class="block full" style="background: none;">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3">
                            <button class='btn btn-success' id='goAcademic'>
                                Siguiente&nbsp;&nbsp;<i class="fa fa-arrow-right fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- END Button goAcademic -->
        </div>
    </section>
</div>
<!-- FORMULARIO: END Formación Académica -->
<div class="clearfix"></div>
<!-- FORMULARIO: Experiencia LAboral -->
<div class="form_content animation-fadeInQuick">
    <div class="table_form_container">
        <header class="caption_info">
            <div class="ico_content">
                <i class="fa fa-suitcase fa-3x fa-lg fa-fw text-primary change_fa"></i>
            </div>
            <div class="title_content">
                <h1 class="info_form">Experiencia Laboral</h1>
            </div>
        </header>
    </div>
    <section class="body_form_info">
        <div class="form_inline_content" id="container_exp_laboral">
            <form id="survey-professional">
                <!-- ¿Has trabajado antes? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Has trabajado antes?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-6">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                               class='proRadio canExpPre valida_radio'
                                               id='canExpPreS'
                                               name='exp_previous'
                                               value='Si'
                                               data-entorno='work'>
                                            <label for="canExpPreS" style="width: 100%;">
                                                <span></span>
                                                <div>Sí</div>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='proRadio canExpPre valida_radio'
                                                id='canExpPreN'
                                                name='exp_previous'
                                                value='No'
                                                data-entorno='work'>
                                            <label for="canExpPreN" style="width: 100%;">
                                                <span></span>
                                                <div>No</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div>
                </div>
                <!-- END ¿Has trabajado antes? -->
                <div class="space-out"></div>
                <!-- Div Oculto exp-pre -->
                <!--<div class="exp-pre" style="display: none;">-->
                <div class="exp-pre">
                    <!-- Empresas y referencias -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-title" style="text-align: left; padding: 5px;">
                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                    Ingresa los lugares en los que has trabajado
                                </div>
                                <div class="form-group">
                                    <div>
                                        <!-- Exp Lab - Empresa n° 1 -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                        Empresa<span class="label label-danger" style="margin-left: 20px; float: right;"><i class="fa fa-asterisk"></i><div class="clearfix"></div></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control proInput wplElement valida_radio'
                                                                    id='canWplJob_no_1'
                                                                    name='wpl_job_no_1'
                                                                    data-entorno='work_add_puesto'
                                                                    placeholder='Puesto'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control proInput wplElement valida_radio'
                                                                    id='canWplCompany_no_1'
                                                                    name='wpl_company_no_1'
                                                                    data-entorno='work_add_empresa'
                                                                    placeholder='Nombre Empresa'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <select class='form-control proSelect wplElement valida_select'
                                                                    id='canWplStatus_no_1'
                                                                    name='wpl_status_no_1'
                                                                    data-entorno='work_add_status'>
                                                                        <option value=''>Estatus</option>
                                                                        <option value='Actual'>Actual</option>
                                                                        <option value='Terminación por despido'>Terminación por despido</option>
                                                                        <option value='Terminación por renuncia'>Terminación por renuncia</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <!-- Deshabilita se selecciona Actual -->
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control proInput wplElement valida_disabled_campo valida_campo'
                                                                    id='canWplBeginning_no_1'
                                                                    name='wpl_beginning_no_1'
                                                                    data-entorno='work_add_inicio'
                                                                    placeholder='Año Inicio' disabled>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control proInput wplElement valida_disabled_campo valida__campo'
                                                                    id='canWplEnding_no_1'
                                                                    name='wpl_ending_no_1'
                                                                    data-entorno='work_add_fin'
                                                                    placeholder='Año Finalización' disabled>
                                                            </div>
                                                            <!-- Deshabilita se selecciona Actual -->
                                                            <div class="col-md-2"></div><div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="clearfix"></div>
                                        </div>
                                        <!-- END Exp Lab - Empresa n° 1 -->
                                        <div class="space-out"></div>
                                        <!-- Exp Lab - Referencia Empresa n° 1 -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                        Referencia<span class="label label-danger" style="margin-left: 20px; float: right;"><i class="fa fa-asterisk"></i><div class="clearfix"></div></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control refInput valida_campo'
                                                                    id='refProName1'
                                                                    name='ref_pro_name_1'
                                                                    data-entorno='work_add_Nombre'
                                                                    placeholder='Nombre'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control refInput valida_campo'
                                                                    id='refProPhone1'
                                                                    name='ref_pro_phone_1'
                                                                    data-entorno='work_add_empresa'
                                                                    placeholder='Teléfono'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control refInput valida_campo'
                                                                    id='refProRelation1'
                                                                    name='ref_pro_relation_1'
                                                                    data-entorno='work_add_empresa'
                                                                    placeholder='Relación'>
                                                            </div><div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="clearfix"></div>
                                        </div>
                                        <!-- END Exp Lab - Referencia Empresa n° 1 -->
                                        <div class="space-out"></div>
                                        <!-- Exp Lab - Empresa n° 2 -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                        Empresa
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control proInput wplElement valida_campo'
                                                                    id='canWplJob_no_2'
                                                                    name='wpl_job_no_2'
                                                                    data-entorno='work_add_puesto'
                                                                    placeholder='Puesto'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control proInput wplElement valida_campo'
                                                                    id='canWplCompany_no_2'
                                                                    name='wpl_company_no_2'
                                                                    data-entorno='work_add_empresa'
                                                                    placeholder='Nombre Empresa'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <select class='form-control proSelect wplElement valida_select'
                                                                    id='canWplStatus_no_2'
                                                                    name='wpl_status_no_2'
                                                                    data-entorno='work_add_status'>
                                                                <option value=''>Estatus</option>
                                                                <option value='Actual'>Actual</option>
                                                                <option value='Terminación por despido'>Terminación por despido</option>
                                                                <option value='Terminación por renuncia'>Terminación por renuncia</option>
                                                              </select>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control proInput wplElement valida_campo'
                                                                    id='canWplBeginning_no_2'
                                                                    name='wpl_beginning_no_2'
                                                                    data-entorno='work_add_inicio'
                                                                    placeholder='Año Inicio'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control proInput wplElement valida_campo'
                                                                    id='canWplEnding_no_2'
                                                                    name='wpl_ending_no_2'
                                                                    data-entorno='work_add_fin'
                                                                    placeholder='Año Finalización'>
                                                            </div>
                                                            <div class="col-md-2"></div><div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="clearfix"></div>
                                        </div>
                                        <!-- END Exp Lab - Empresa n° 2 -->
                                        <div class="space-out"></div>
                                        <!-- Exp Lab - Referencia Empresa n° 2 -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                        Referencia
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control refInput valida_campo'
                                                                    id='refProName2'
                                                                    name='ref_pro_name_2'
                                                                    data-entorno='work_add_Nombre'
                                                                    placeholder='Nombre'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control refInput valida_campo'
                                                                    id='refProPhone2'
                                                                    name='ref_pro_phone_2'
                                                                    data-entorno='work_add_empresa'
                                                                    placeholder='Teléfono'>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type='text'
                                                                    class='form-control refInput valida_campo'
                                                                    id='refProRelation2'
                                                                    name='ref_pro_relation_2'
                                                                    data-entorno='work_add_empresa'
                                                                    placeholder='Relación'>
                                                            </div><div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="clearfix"></div>
                                        </div>
                                        <!-- END Exp Lab - Referencia Empresa n° 2 -->
                                    </div>
                                </div>
                            </div>
                        </div><div class="clearfix"></div>
                    </div>
                    <!-- END Empresas y referencias -->
                    <div class="space-out"></div>
                    <!-- ¿Has trabajado en algún restaurante u hotel? -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-title" style="text-align: left; padding: 5px;">
                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                    ¿Has trabajado en algún restaurante u hotel?
                                </div>
                                <div class="form-group">
                                    <div>
                                        <div class="col-md-6">
                                            <label class='radio-inline'>
                                                <input type='radio'
                                                    class='proRadio canExpPreRes valida_radio'
                                                    id='canExpPreResS'
                                                    name='exp_previous_res'
                                                    value='Si'
                                                    data-entorno='work_sushi'>
                                                <label for="canExpPreResS" style="width: 100%;">
                                                    <span></span>
                                                    <div>Sí</div>
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class='radio-inline'>
                                                <input type='radio'
                                                    class='proRadio canExpPreRes valida_radio'
                                                    id='canExpPreResN'
                                                    name='exp_previous_res'
                                                    value='No'
                                                    data-entorno='work_sushi'>
                                                <label for="canExpPreResN" style="width: 100%;">
                                                    <span></span>
                                                    <div>No</div>
                                                </label>
                                                <span class="clearfix"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><div class="clearfix"></div>
                    </div>
                    <!-- END ¿Has trabajado en algún restaurante u hotel? -->
                    <div class="space-out"></div>
                </div>
                <!-- END Div Oculto exp-pre -->
                <!-- Div Oculto exp-pre-res -->
                <!--<div class="exp-pre-res" style="display: none;">-->
                <div class="exp-pre-res">
                    <!-- ¿Has trabajado en algún restaurante japonés? -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-title" style="text-align: left; padding: 5px;">
                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                    ¿Has trabajado en algún restaurante japonés?
                                </div>
                                <div class="form-group">
                                    <div>
                                        <div class="col-md-6">
                                            <label class='radio-inline'>
                                                <input type='radio'
                                                    class='proRadio canExpPreJap valida_radio'
                                                    id='canExpPreJapS'
                                                    name='exp_previous_jap'
                                                    value='Si'
                                                    data-entorno='work_sushi'>
                                                <label for="canExpPreJapS" style="width: 100%;">
                                                    <span></span>
                                                    <div>Sí</div>
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class='radio-inline'>
                                                <input type='radio'
                                                    class='proRadio canExpPreJap valida_radio'
                                                    id='canExpPreJapN'
                                                    name='exp_previous_jap'
                                                    value='No'
                                                    data-entorno='work_sushi'>
                                                <label for="canExpPreJapN" style="width: 100%;">
                                                    <span></span>
                                                    <div>No</div>
                                                </label>
                                                <span class="clearfix"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><div class="clearfix"></div>
                    </div>
                    <!-- END ¿Has trabajado en algún restaurante japonés? -->
                    <div class="space-out"></div>
                </div>
                <!-- END Div Oculto exp-pre-res -->
                <!-- Div Oculto exp-pre-jap -->
                <!--<div class="exp-pre-jap" style="display: none;">-->
                <div class="exp-pre-jap">
                    <!-- ¿En qué áreas -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-title" style="text-align: left; padding: 5px;">
                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                    ¿En qué áreas
                                </div>
                                <div class="form-group">
                                    <div>
                                        <div class="col-md-4">
                                            <label class="checkbox-inline">
                                                <input type='checkbox'
                                                    class='proCheck canExpAreas valida_checkbox'
                                                    id='canExpAreasBS'
                                                    name='exp_areas'
                                                    value='Preparacion'
                                                    data-entorno='work_sushi_areas'>
                                                <label for="canExpAreasBS" style="width: 100%;">
                                                    <span></span>
                                                    <div>Barra de Sushi</div>
                                                </label>
                                                <span class="clearfix"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="checkbox-inline">
                                                <input type='checkbox'
                                                    class='proCheck canExpAreas valida_checkbox'
                                                    id='canExpAreasCC'
                                                    name='exp_areas'
                                                    value='Preparacion'
                                                    data-entorno='work_sushi_areas'>
                                                <label for="canExpAreasCC" style="width: 100%;">
                                                    <span></span>
                                                    <div>Cocina caliente</div>
                                                </label>
                                                <span class="clearfix"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="checkbox-inline">
                                                <input type='checkbox'
                                                    class='proCheck canExpAreas'
                                                    id='canExpAreasSER'
                                                    name='exp_areas'
                                                    value='Servicio'
                                                    data-entorno='work_sushi_areas'>
                                                <label for="canExpAreasSER" style="width: 100%;">
                                                    <span></span>
                                                    <div>Servicio</div>
                                                </label>
                                                <span class="clearfix"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><div class="clearfix"></div>
                    </div>
                    <!-- END ¿En qué áreas -->
                    <div class="space-out"></div>
                    <!-- Ingresa tu experiencia en las áreas seleccionadas -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-title" style="text-align: left; padding: 5px;">
                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                    Ingresa tu experiencia en las áreas seleccionadas
                                </div>
                                <div class="form-group">
                                    <div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <textarea class='form-control valida_campo'
                                                id='canExpAreasExperiencia'
                                                name='exp_areas_experience'
                                                rows='3'
                                                style='resize:none;'
                                                placeholder="Experiencia"></textarea>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div><div class="clearfix"></div>
                                </div>
                            </div>
                        </div><div class="clearfix"></div>
                    </div>
                    <!-- END Ingresa tu experiencia en las áreas seleccionadas -->
                    <div class="space-out"></div>
                    <!-- Selecciona los procesos ó tareas que conoces -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <div class="block-title" style="text-align: left; padding: 5px;">
                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                    Selecciona los procesos ó tareas que conoces
                                </div>
                                <div class="form-group">
                                    <div>
                                        <div class="col-md-6">
                                            <label class="checkbox-inline">
                                                <input type='checkbox'
                                                    class='proCheck canExpTasks valida_checkbox'
                                                    id='canExpTasksPEPS'
                                                    name='exp_tasks'
                                                    value='Metodo PEPS'
                                                    data-entorno='work_sushi_taskPeps'>
                                                <label for="canExpTasksPEPS" style="width: 100%;">
                                                    <span></span>
                                                    <div>Método PEPS</div>
                                                </label>
                                                <span class="clearfix"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="checkbox-inline">
                                                <input type='checkbox'
                                                    class='proCheck canExpTasks valida_checkbox'
                                                    id='canExpTasksMHA'
                                                    name='exp_tasks'
                                                    value='Manejo Higienico de Alimentos'
                                                    data-entorno='work_sushi_taskHa'>
                                                <label for="canExpTasksMHA" style="width: 100%;">
                                                    <span></span>
                                                    <div>Manejo Higiénico de Alimentos</div>
                                                </label>
                                                <span class="clearfix"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><div class="clearfix"></div>
                    </div>
                    <!-- END Selecciona los procesos ó tareas que conoces -->
                </div>
                <!-- END Div Oculto exp-pre-jap -->
            </form>
            <!-- Button goProfessional -->
            <div class="block full" style="background: none;">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3">
                            <button class='btn btn-success' id='goProfessional'>
                                Siguiente&nbsp;&nbsp;<i class="fa fa-arrow-right fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- END Button goProfessional -->
        </div>
    </section>
</div>
<!-- FORMULARIO: END Experiencia LAboral -->
<div class="clearfix"></div>
<!-- FORMULARIO: Referencias Personales -->
<div class="form_content animation-fadeInQuick">
    <div class="table_form_container">
        <header class="caption_info">
            <div class="ico_content">
                <i class="fa fa-suitcase fa-3x fa-lg fa-fw text-primary change_fa"></i>
            </div>
            <div class="title_content">
                <h1 class="info_form">Referencias Personales</h1>
            </div>
        </header>
    </div>
    <section class="body_form_info">
        <div class="form_inline_content" id="container_ref_personales">
            <form id="survey-references">
                <!--  Referencia n° 1 -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Referencia n° 1<span class="label label-danger" style="margin-left: 20px; float: right;"><i class="fa fa-asterisk"></i><div class="clearfix"></div></span>
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <input type='text'
                                            class='form-control refInput valida_campo'
                                            id='refPerName1'
                                            name='ref_per_name_1'
                                            data-entorno='work_add_Nombre'
                                            placeholder='Nombre'>
                                    </div>
                                    <div class="col-md-4">
                                        <input type='text'
                                            class='form-control refInput valida_campo'
                                            id='refPerPhone1'
                                            name='ref_per_phone_1'
                                            data-entorno='work_add_empresa'
                                            placeholder='Telefono'>
                                    </div>
                                    <div class="col-md-4">
                                        <input type='text'
                                            class='form-control refInput valida_campo'
                                            id='refPerRelation1'
                                            name='ref_per_relation_1'
                                            data-entorno='work_add_empresa'
                                            placeholder='Relación'>
                                    </div><div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- END Referencia n° 1 -->
                <div class="space-out"></div>
                <!--  Referencia n° 2 -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Referencia n° 2
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <input type='text'
                                            class='form-control refInput valida_campo'
                                            id='refPerName2'
                                            name='ref_per_name_2'
                                            data-entorno='work_add_Nombre'
                                            placeholder='Nombre'>
                                    </div>
                                    <div class="col-md-4">
                                        <input type='text'
                                            class='form-control refInput valida_campo'
                                            id='refPerPhone2'
                                            name='ref_per_phone_2'
                                            data-entorno='work_add_empresa'
                                            placeholder='Telefono'>
                                    </div>
                                    <div class="col-md-4">
                                        <input type='text'
                                            class='form-control refInput valida_campo'
                                            id='refPerRelation2'
                                            name='ref_per_relation_2'
                                            data-entorno='work_add_empresa'
                                            placeholder='Relación'>
                                    </div><div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- END Referencia n° 2 -->
            </form>
            <!-- Button goReferences -->
            <div class="block full" style="background: none;">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3">
                            <button class='btn btn-success' id='goReferences'>
                                Siguiente&nbsp;&nbsp;<i class="fa fa-arrow-right fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- END Button goReferences -->
        </div>
    </section>
</div>
<!-- FORMULARIO: END Referencias Personales -->
<div class="clearfix"></div>
<!-- FORMULARIO: Información Adiconal -->
<div class="form_content animation-fadeInQuick">
    <div class="table_form_container">
        <header class="caption_info">
            <div class="ico_content">
                <i class="fa fa-info-circle fa-3x fa-lg fa-fw text-primary change_fa"></i>
            </div>
            <div class="title_content">
                <h1 class="info_form">Preferencias</h1>
            </div>
        </header>
    </div>
    <section class="body_form_info">
        <div class="form_inline_content" id="container_inf_preferencias">
            <form id="survey-preferences">
                <!-- Disponibilidad de Horario -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                Disponibilidad de Horario
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <label class="checkbox-inline">
                                            <input type='checkbox'
                                                class='preCheck preAvailability preAvailabilityTC valida_checkbox'
                                                id='preAvailabilityTCC'
                                                name='pre_availability'
                                                value='Turno completo a cualquier hora'
                                                data-entorno='work_sushi_taskBarraSushi'>
                                            <label for="preAvailabilityTCC" style="width: 100%;">
                                                <span></span>
                                                <div>Turno completo a cualquier hora</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="checkbox-inline">
                                            <input type='checkbox'
                                                class='preCheck preAvailability preAvailabilityTC valida_checkbox'
                                                id='preAvailabilityTCM'
                                                name='pre_availability'
                                                value='Turno completo matutino'
                                                data-entorno='work_sushi_taskBarraCono'>
                                            <label for="preAvailabilityTCM" style="width: 100%;">
                                                <span></span>
                                                <div>Turno completo matutino</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="checkbox-inline">
                                            <input type='checkbox'
                                                class='preCheck preAvailability preAvailabilityTC valida_checkbox'
                                                id='preAvailabilityTCV'
                                                name='pre_availability'
                                                value='Turno completo vespertino'
                                                data-entorno='work_sushi_taskBarraNigiris'>
                                            <label for="preAvailabilityTCV" style="width: 100%;">
                                                <span></span>
                                                <div>Turno completo vespertino</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="checkbox-inline">
                                            <input type='checkbox'
                                                class='preCheck preAvailability preAvailabilityTC valida_checkbox'
                                                id='preAvailabilityMTM'
                                                name='pre_availability'
                                                value='Medio turno matutino'
                                                data-entorno='work_sushi_taskBarraSashimi'>
                                            <label for="preAvailabilityMTM" style="width: 100%;">
                                                <span></span>
                                                <div>Medio turno matutimo</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="checkbox-inline">
                                            <input type='checkbox'
                                                class='preCheck preAvailability preAvailabilityTC valida_checkbox'
                                                id='preAvailabilityMTV'
                                                name='pre_availability'
                                                value='Medio turno vespertino'
                                                data-entorno='work_sushi_taskBarraOtro'>
                                            <label for="preAvailabilityMTV" style="width: 100%;">
                                                <span></span>
                                                <div>Medio turno vespertino</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="checkbox-inline">
                                            <input type='checkbox'
                                                class='preCheck preAvailability preAvailability valida_checkbox'
                                                id='preAvailabilityFS'
                                                name='pre_availability'
                                                value='Medio turno vespertino'
                                                data-entorno='work_sushi_taskBarraOtro'>
                                            <label for="preAvailabilityFS" style="width: 100%;">
                                                <span></span>
                                                <div>Fines de semana</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- END Disponibilidad de Horario -->
                <div class="space-out"></div>
                <!-- ¿Cuentas con Licencia vigente de motociclista? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Cuentas con Licencia vigente de motociclista?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-6">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='preRadio prePermission valida_radio'
                                                id='prePermissionS'
                                                name='pre_permission'
                                                value='Si'
                                                data-entorno='work'>
                                            <label for="prePermissionS" style="width: 100%;">
                                                <span></span>
                                                <div>Sí</div>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='preRadio prePermission'
                                                id='prePermissionN'
                                                name='pre_permission'
                                                value='No'
                                                data-entorno='work'>
                                            <label for="prePermissionN" style="width: 100%;">
                                                <span></span>
                                                <div>No</div>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- END ¿Cuentas con Licencia vigente de motociclista? -->
                <div class="space-out"></div>
                <!-- ¿Con cuál de los siguientes dibujos te identificas? -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-title" style="text-align: left; padding: 5px;">
                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                ¿Con cuál de los siguientes dibujos te identificas?
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='preRadio prePicture valida_radio'
                                                id='prePicture1'
                                                name='pre_picture'
                                                value='Dibujo 1'
                                                data-entorno='work'>
                                            <label for="prePicture1" style="width: 100%;">
                                                <span></span>
                                                <br><br>
                                                <div class="text-center"><i class="gi gi-temple_buddhist" style="font-size: 4em; padding-left: 1em;"></i></div>
                                                <br>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='preRadio prePicture valida_radio'
                                                id='prePicture2'
                                                name='pre_picture'
                                                value='Dibujo 2'
                                                data-entorno='work'>
                                            <label for="prePicture2" style="width: 100%;">
                                                <span></span>
                                                <br><br>
                                                <div class="text-center"><i class="gi gi-bicycle" style="font-size: 4em; padding-left: 1em;"></i></div>
                                                <br>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class='radio-inline'>
                                            <input type='radio'
                                                class='preRadio prePicture valida_radio'
                                                id='prePicture3'
                                                name='pre_picture'
                                                value='Dibujo 3'
                                                data-entorno='work'>
                                            <label for="prePicture3" style="width: 100%;">
                                                <span></span>
                                                <br><br>
                                                <div class="text-center"><i class="gi gi-shop" style="font-size: 4em; padding-left: 1em;"></i></div>
                                                <br>
                                            </label>
                                            <span class="clearfix"></span>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- END ¿Con cuál de los siguientes dibujos te identificas? -->
            </form>
            <!-- Button goPreferences -->
            <div class="block full" style="background: none;">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3"></div>
                        <div class="col-xs-6 col-lg-3">
                            <button class='btn btn-success' id='goReferences'>
                                Finalizar&nbsp;&nbsp;<i class="fa fa-ban fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- END Button goPreferences -->
        </div>
    </section>
</div>
<!-- FORMULARIO: Información Adiconal -->