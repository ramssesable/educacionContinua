//****************************** Disable options *******************************
$(document).ready(function() {
// ***************************** Inicia Pregunta 25 ****************************
	$flag25_1 = false;
	$flag25_2 = false;
	$flag25_3 = false;
	$("input[name=pre25_1]:radio").click(function() {
		if ($flag25_1)
			$("input:radio[value='" + $val1 + "']").removeAttr("disabled");
	    $val1 = $(this).val();
	    $("input[name=pre25_2]:radio[value='" + $val1 + "']").attr("disabled","disabled");
	    $("input[name=pre25_3]:radio[value='" + $val1 + "']").attr("disabled","disabled");
	    $flag25_1 = true;
	});
	$("input[name=pre25_2]:radio").click(function() {
		if ($flag25_2)
			$("input:radio[value='" + $val2 + "']").removeAttr("disabled");
	    $val2 = $(this).val();
	    $("input[name=pre25_1]:radio[value='" + $val2 + "']").attr("disabled","disabled");
	    $("input[name=pre25_3]:radio[value='" + $val2 + "']").attr("disabled","disabled");
	    $flag25_2 = true;
	});
	$("input[name=pre25_3]:radio").click(function() {
		if ($flag25_3)
			$("input:radio[value='" + $val3 + "']").removeAttr("disabled");
	    $val3 = $(this).val();
	    $("input[name=pre25_1]:radio[value='" + $val3 + "']").attr("disabled","disabled");
	    $("input[name=pre25_2]:radio[value='" + $val3 + "']").attr("disabled","disabled");
	    $flag25_3 = true;
	});
// ***************************** Termina Pregunta 25 ***************************
// ***************************** Inicia Pregunta 33 ****************************
	$flag33_1 = false;
	$flag33_2 = false;
	$flag33_3 = false;
	$flag33_4 = false;
	$flag33_5 = false;
	$("input[name=pre33_1]:radio").click(function() {
		if ($flag33_1)
			$("input:radio[value='" + $val1 + "']").removeAttr("disabled");
	    $val1 = $(this).val();
	    $("input[name=pre33_2]:radio[value='" + $val1 + "']").attr("disabled","disabled");
	    $("input[name=pre33_3]:radio[value='" + $val1 + "']").attr("disabled","disabled");
	    $("input[name=pre33_4]:radio[value='" + $val1 + "']").attr("disabled","disabled");
	    $("input[name=pre33_5]:radio[value='" + $val1 + "']").attr("disabled","disabled");
	    $flag33_1 = true;
	});
	$("input[name=pre33_2]:radio").click(function() {
		if ($flag33_2)
			$("input:radio[value='" + $val2 + "']").removeAttr("disabled");
	    $val2 = $(this).val();
	    $("input[name=pre33_1]:radio[value='" + $val2 + "']").attr("disabled","disabled");
	    $("input[name=pre33_3]:radio[value='" + $val2 + "']").attr("disabled","disabled");
	    $("input[name=pre33_4]:radio[value='" + $val2 + "']").attr("disabled","disabled");
	    $("input[name=pre33_5]:radio[value='" + $val2 + "']").attr("disabled","disabled");
	    $flag33_2 = true;
	});
	$("input[name=pre33_3]:radio").click(function() {
		if ($flag33_3)
			$("input:radio[value='" + $val3 + "']").removeAttr("disabled");
	    $val3 = $(this).val();
	    $("input[name=pre33_1]:radio[value='" + $val3 + "']").attr("disabled","disabled");
	    $("input[name=pre33_2]:radio[value='" + $val3 + "']").attr("disabled","disabled");
	    $("input[name=pre33_4]:radio[value='" + $val3 + "']").attr("disabled","disabled");
	    $("input[name=pre33_5]:radio[value='" + $val3 + "']").attr("disabled","disabled");
	    $flag33_3 = true;
	});
	$("input[name=pre33_4]:radio").click(function() {
		if ($flag33_4)
			$("input:radio[value='" + $val4 + "']").removeAttr("disabled");
	    $val4 = $(this).val();
	    $("input[name=pre33_1]:radio[value='" + $val4 + "']").attr("disabled","disabled");
	    $("input[name=pre33_2]:radio[value='" + $val4 + "']").attr("disabled","disabled");
	    $("input[name=pre33_3]:radio[value='" + $val4 + "']").attr("disabled","disabled");
	    $("input[name=pre33_5]:radio[value='" + $val4 + "']").attr("disabled","disabled");
	    $flag33_4 = true;
	});
	$("input[name=pre33_5]:radio").click(function() {
		if ($flag33_5)
			$("input:radio[value='" + $val5 + "']").removeAttr("disabled");
	    $val5 = $(this).val();
	    $("input[name=pre33_1]:radio[value='" + $val5 + "']").attr("disabled","disabled");
	    $("input[name=pre33_2]:radio[value='" + $val5 + "']").attr("disabled","disabled");
	    $("input[name=pre33_3]:radio[value='" + $val5 + "']").attr("disabled","disabled");
	    $("input[name=pre33_4]:radio[value='" + $val5 + "']").attr("disabled","disabled");
	    $flag33_5 = true;
	});
// ***************************** Termina Pregunta 33 ***************************

/* *****************************************************************************
   ***************************** Sección Checkbox ******************************
   ***************************************************************************** */

// ***************************** Inicia Pregunta 33 ****************************
	var contador = 0;
	$("[name=pre33_6]").click(function() {
		$val33 = $(this).val();
		if (!	$(this).attr('checked')) {
			$("input:radio[value='" + $val33 + "']").removeAttr("disabled");
			contador--;
		}else {
			$("input:radio[value='" + $val33 + "']").attr("disabled","disabled");
			contador++;
		}
		pre33(contador);
	});
// ***************************** Termina Pregunta 33 ***************************
});
// ||||||| Especial |||||||||
function pre33(desabilitados) {
	switch(desabilitados) {
		case 2:
			$("[name=pre33_5]").attr("required",true);
			for (var i = 1; i <= 7; i++) {
				$("#pre33_5"+i).val(i)
			}
			break;
		case 3:
			$("[name=pre33_5]").removeAttr("required").val("X");
			$("[name=pre33_4]").attr("required",true);
			for (var i = 1; i <= 7; i++) {
				$("#pre33_4"+i).val(i)
			}
			break;
		case 4:
			$("[name=pre33_4]").removeAttr("required").val("X");
			$("[name=pre33_3]").attr("required",true);
			for (var i = 1; i <= 7; i++) {
				$("#pre33_3"+i).val(i)
			}
			break;
		case 5:
			$("[name=pre33_3]").removeAttr("required").val("X");
			$("[name=pre33_2]").attr("required",true);
			for (var i = 1; i <= 7; i++) {
				$("#pre33_2"+i).val(i)
			}
			break;
		case 6:
			$("[name=pre33_2]").removeAttr("required").val("X");
			$("[name=pre33_1]").attr("required",true);
			for (var i = 1; i <= 7; i++) {
				$("#pre33_1"+i).val(i)
			}
			break;
		case 7:
			$("[name=pre33_1]").removeAttr("required").val("X");
			break;
	}
}
// ||||||| Especial |||||||||
//****************************** Disable options *******************************