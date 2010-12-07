function addFormField() {

        var id = document.getElementById("id").value;
	$("#divTxt").append("\
                             <p id='row" + id + "'>\n\
                             <label for='txt" + id + "'>Concepto " + id + " \n\
                             <input type='text' class='required email' size='10' name='txt[]' id='txt" + id + "'> \n\
                             <a href='#' onClick='removeFormField(\"#row" + id + "\"); return false;'>Quitar</a><p>");

	$('#row' + id).highlightFade({
		speed:1000
	});

	id = (id - 1) + 2;
	document.getElementById('id').value = id;
}

function removeFormField(id) {
	$(id).remove();
}