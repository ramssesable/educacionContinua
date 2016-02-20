
$(document).ready(function() {

	// *************** Inicia 6 *******************
	var pre6si 	= $("#pre6si").hide();
	var pre6no 	= $("#pre6no").hide();
	var pre7 	= $("#pre7");
	var pre8 	= $("#pre8");

	var pre9 	= $("[name=pre9]");
	var pre90 	= $("[name=pre90]");
	var pre10 	= $("[name=pre10]");
	var pre11 	= $("[name=pre11]");

	$('input[type=radio][name=pre6]').change(function() {
        if (this.value == 1) {
		 	pre7.attr("required",true);
		 	pre8.attr("required",true);
		 	pre90.hide().val("no");
		 	pre6si.show("fast");
		 	pre6no.hide("fast");
		 	pre9.attr("checked",false).removeAttr("required");
		 	pre10.attr("checked",false).removeAttr("required");
		 	pre11.attr("checked",false).removeAttr("required");
        }
        else {
		 	pre6si.hide("fast");
		 	pre6no.show("fast");
		 	pre90.val(null);
		 	pre9.attr("required",true);
		 	pre10.attr("required",true);
		 	pre11.attr("required",true);
		 	pre7.removeAttr("required");
		 	pre8.removeAttr("required");
        }
    });
	// **************** Fin 6 *********************

	// *************** Inicia 14 *******************
	var pre14si = $("#pre14si").hide();
	var pre14_area = $("[name=pre14_area]");
	var pre14_area0 = $("#pre14_area0");
	var pre14_inst= $("#pre14_inst");

	$('input[type=radio][name=pre14]').change(function() {
        if (this.value == 1) {
		 	pre14_area0.hide().val(null);
		 	pre14si.show("fast");
		 	pre14_area.attr("required",true);
		 	pre14_inst.val(null);
        }
        else {
		 	pre14si.hide("fast");
		 	pre14_area.attr("checked",false).removeAttr("required");
		 	pre14_area0.val("no");
		 	pre14_inst.val("no");
        }
    });
	// **************** Fin 14 *********************

	// *************** Inicia 34 *******************
	var pre34si = $("#pre34si").hide();
	var pre34_cual = $("[name=pre34_cual]");


	$('input[type=radio][name=pre34]').change(function() {
        if (this.value == 'Si') {
        	pre34si.show("fast")
		 	pre34_cual.val(null).attr("required",true).focus();
        }
        else {
        	pre34si.hide("fast")
		 	pre34_cual.removeAttr("required").val("no");
        }
    });
	// **************** Fin 34 *********************

	// *************** Inicia 35 *******************
	var pre35si = $("#pre35si").hide();
	var pre36 	= $("[name=pre36]");

	$('input[type=radio][name=pre35]').change(function() {
        	console.log(this.value);
        if (this.value == "Si") {
        	console.log("entro");
		 	pre35si.show("fast");
		 	pre36.attr("required",true);
        }
        else {
		 	pre35si.hide("fast");
		 	pre36.attr("checked",false).removeAttr("required");
        }
    });
	// **************** Fin 35 *********************
});
