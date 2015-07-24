/* ------------------------------------------------------------------------------------------------------------------- */
// domEl

// Formación Académica
// Radios grado escolar
	'div_valida_grade' => 'div#valida-grade',
	'input_val_radioGrade' => 'input.valida_radioGrade',
// Radios idioma
	'div_valida_lang' => 'div#valida-lange',
	'input_val_radioLange' => 'input.valida_radioLange',
// Radios nivel
	'div_valida_level' => 'div#valida-level',
	'input_val_radioLevel' => 'input.valida_radioLevel',

// Experiencia Laboral
// Radios experiencia anterior
	'div_valida_exp_ant' => 'div#valida-exp_ant',
	'input_val_radioExpAnt' => 'input.valida_radioExpAnt',
// Radios restaurante u hotel
	'div_valida_exp_rest_ant' => 'div#valida-exp-rest-ant',
	'input_val_radioExpRest_ant' => 'input.valida_radioExpRest_ant',
// Radios restaurante japones
	'div_valida_exp_rest_ant_jap' => 'div#valida-exp-rest-ant-jap',
	'input_val_radioExpRest_ant_jap' => 'input.valida_radioExpRest_antJap',
// Radios Areas
	'div_valida_exp_rest_ant_jap' => 'div#valida-exp-rest-ant-jap',
	'input_val_radioExpRest_ant_jap' => 'input.valida_radioExpRest_antJap',
// CheckBox Areas
	'div_valida_exp_areas' => 'div#valida-exp-areas',
	'input_val_checkboxExpAreas' => 'input.valida_checkboxExpAreas',

// Preferencias
// CheckBox Disponibilidad
	'div_valida_available' => 'div#valida-available',
	'input_val_checkboxAvailable' => 'input.valida_checkboxAvailable',
// Radios Licencia Vigente
	'div_valida_pre_permission' => 'div#valida-pre-permission',
	'input_val_radioPre_permission' => 'input.valida_radioPre_permission',
// Radios Pictures
	'div_valida_pictures' => 'div#valida-pictures',
	'input_val_radioPictures' => 'input.valida_radioPictures',

/* ------------------------------------------------------------------------------------------------------------------- */
// Metodos

// Formación Académica
// Radios grado escolar
	clickRadio_valGrade : function (event) {
	    validaCampo.clickValida_radio(domEl.div_valida_grade, domEl.radio_can_grade);
	},
// Radios idioma
	clickRadio_valLange : function (event) {
	    validaCampo.clickValida_radio(domEl.div_valida_lang, domEl.radio_can_lge);
	},
// Radios nivel
	clickRadio_valLevel : function (event) {
	    validaCampo.clickValida_radio(domEl.div_valida_level, domEl.radio_can_lge_level);
	},

// Experiencia Laboral
// Radios experiencia anterior
	clickRadio_valExpAnt : function (event) {
	    validaCampo.clickValida_radio(domEl.div_valida_exp_ant, domEl.radio_can_exp_pre);
	},
// Radios experiencia restaurante anterior
	clickRadio_valExpRestAnt : function (event) {
	    validaCampo.clickValida_radio(domEl.div_valida_exp_rest_ant, domEl.radio_can_exp_pre_res);
	},
// Radios restaurante japones
	clickRadio_valExpRestJapAnt : function (event) {
	    validaCampo.clickValida_radio(domEl.div_valida_exp_rest_ant_jap, domEl.radio_can_exp_pre_jap);
	},
// CheckBox Areas
	clickCheckBox_valExpAreas : function (event) {
	    validaCampo.clickValida_radio(domEl.div_valida_exp_areas, domEl.check_can_exp_areas);
	},

// Preferencias
// CheckBox Disponibilidad
	clickCheckBox_valAvailable : function (event) {
		validaCampo.clickValida_radio(domEl.div_valida_available, domEl.check_pre_available_tc);
	},
// Radios Licencia Vigente
	clickRadio_valPermission : function (event) {
		validaCampo.clickValida_radio(domEl.div_valida_pre_permission, domEl.radio_pre_permission);
	},
// Radios Pictures
	clickRadio_valPPictures : function (event) {
		validaCampo.clickValida_radio(domEl.div_valida_pictures, domEl.radio_pre_picture);
	},

/* ------------------------------------------------------------------------------------------------------------------- */
// main

// Formación Académica
// Radios grado escolar
	$(domEl.core_interactive).on('click', domEl.input_val_radioGrade, surveyPerMethod.clickRadio_valGrade);
// Radios idioma
	$(domEl.core_interactive).on('click', domEl.input_val_radioLange, surveyPerMethod.clickRadio_valLange);
// Radios nivel
	$(domEl.core_interactive).on('click', domEl.input_val_radioLevel, surveyPerMethod.clickRadio_valLevel);

// Experiencia Laboral
// Radios experiencia anterior
	$(domEl.core_interactive).on('click', domEl.input_val_radioExpAnt, surveyPerMethod.clickRadio_valExpAnt);
// Radios experiencia restaurante anterior
	$(domEl.core_interactive).on('click', domEl.input_val_radioExpRest_ant_jap, surveyPerMethod.clickCheckBox_valExpAreas);
// CheckBox Areas
	$(domEl.core_interactive).on('click', domEl.input_val_checkboxExpAreas, surveyPerMethod.clickCheckBox_valExpAreas);

// Preferencias
// CheckBox Disponibilidad
	$(domEl.core_interactive).on('click', domEl.input_val_checkboxAvailable, surveyPerMethod.clickCheckBox_valAvailable);
// Radios Licencia Vigente
	$(domEl.core_interactive).on('click', domEl.input_val_radioPre_permission, surveyPerMethod.clickRadio_valPermission);
// Radios Pictures
	$(domEl.core_interactive).on('click', domEl.input_val_radioPictures, surveyPerMethod.clickRadio_valPPictures);


/* ------------------------------------------------------------------------------------------------------------------- */



	clickValida_checkBox : function (divCHBX, checkBox) {
        if ($(checkBox).is(':checked')) {
            $(divCHBX).after("<span class='label label-success animation-slideLeft ok'><i class='fa fa-check'></i></span>");
            console.log('pone ok');
        } else {
            $(divCHBX).after("<span class='label label-danger animation-slideLeft error'><i class='fa fa-times'></i></span>");
            console.log('pone div');
        }
    },
