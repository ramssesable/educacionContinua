$(document).ready(function() {
//****************************** Empieza 9 *******************************
	var pre90 = $("[name='pre90']");
	pre90.hide();

	$('input[type=radio][name=pre9]').change(function() {
        if (this.value == 13) {
		 	pre90.val(null);
		 	pre90.show("fast");
		 	pre90.focus();
        }
        else {
		 	pre90.hide("fast");
		 	pre90.val("null");
        }
    });
//****************************** Empieza 9 *******************************

//****************************** Empieza 14 ******************************
	var pre14_area0 = $("[name='pre14_area0']");
	pre14_area0.hide();

	$('input[type=radio][name=pre14_area]').change(function() {
        if (this.value == 8) {
		 	pre14_area0.val(null);
		 	pre14_area0.show("fast");
		 	pre14_area0.focus();
        }
        else {
		 	pre14_area0.hide("fast");
		 	pre14_area0.val("no");
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
	var pre250 = $("[name='pre25_0']");
	pre250.hide();

	$("#pre25_00").on('click',function() {
		pre250.slideToggle();
		/*if (this.value == 11) {
			pre250.val(null);
			pre250.show("fast");
			pre250.focus();
		}
		else {
			pre250.hide("fast");
			pre250.val("no");
		}*/
    });
//****************************** Empieza 25 ******************************
});
