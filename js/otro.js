$(document).ready(function() {
//****************************** Empieza 9 *******************************
	var pre90 = $("[name='pre90']");
	pre90.hide();

	$('input[type=radio][name=pre9]').click(function() {
        if (this.value == 13) {
		 	pre90.val(null);
		 	pre90.show("fast");
		 	pre90.focus();
        }
        else {
		 	pre90.hide("fast");
		 	pre90.val("no");
        }
    });
//****************************** Empieza 9 *******************************

//****************************** Empieza 14 ******************************
	var otropre14_area0 = $("[name='pre14_area0']");
	otropre14_area0.hide();

	$('input[type=radio][name=pre14_area]').change(function() {
        if (this.value == 8) {
		 	otropre14_area0.val(null);
		 	otropre14_area0.show("fast");
		 	otropre14_area0.focus();
        }
        else {
		 	otropre14_area0.hide("fast");
		 	otropre14_area0.val("no");
        }
    });
//****************************** Empieza 14 ******************************

//****************************** Empieza 17 ******************************
	var pre170 = $("[name='pre170']");
	pre170.hide();

	$('input[type=radio][name=pre17]').change(function() {
        if (this.value == 6) {
		 	pre170.val(null);
		 	pre170.show("fast");
		 	pre170.focus();
        }
        else {
		 	pre170.hide("fast");
		 	pre170.val("no");
        }
    });
//****************************** Empieza 17 ******************************

//****************************** Empieza 25 ******************************
	// var pre250 = $("[name='pre25_0']");
	
	// pre250.hide();

	// $("input[name=pre25_1]:radio").change(function() {
	// 	if ($("#pre25_00").is(':checked')){
	// 		if (this.value == 11)
	// 			pre250.show("fast");
	// 		else
	// 			pre250.hide("fast");
	// 	}else {
	// 		pre250.hide("fast");
	// 	}
			
 //    });
	// $("input[name=pre25_2]:radio").change(function() {
	// 	if ($("#pre25_00").is(':checked')){
	// 		if (this.value == 11)
	// 			pre250.show("fast");
	// 		else
	// 			pre250.hide("fast");
	// 	}else {
	// 		pre250.hide("fast");
	// 	}
			
 //    });
//****************************** Empieza 25 ******************************
});
