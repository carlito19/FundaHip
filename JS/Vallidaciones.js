
function required(){
	var empt = document.forms["form1"]["name"].value;
	if(empt =="")
	{
		alert("please input a Value");
		return false;
	}
}

function validarForm(Form){
	var Usuario = form.name;
	var Contrasena = form.Contrasena;
	
	if(isNotEmpty(Usuario)){
		if(isNotEmpty(Contrasena)){
			return true;
			{
		{
		return false;				
		}
	function isNotEmpty(field)	{
		
		var fieldData = field.value;
		
		if(fieldData.length == 0 || fieldData =="" || fieldData == fieldData){
			
		field.className ="fieldOk"; //Reset field back to default
		return true; //submit form
		}
	}
