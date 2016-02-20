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
});
//****************************** Disable options *******************************