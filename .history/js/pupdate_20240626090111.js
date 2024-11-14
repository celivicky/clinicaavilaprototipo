//En resumen, esta función se utiliza para habilitar o deshabilitar un botón en función del valor de un campo de input. Si el valor del campo de input es "ED", el botón se habilita, de lo contrario, se deshabilita.

//Es posible que esta función sea llamada cuando se produce un evento (como un cambio en el valor del campo de input) o cuando se carga la página.//
function display()
{
	if(document.getElementById('fieldsac').value=="ED")
	{
		document.getElementById('Button').disabled=false;
	}
	else
	{
		document.getElementById('Button').disabled = true;

	}

}
