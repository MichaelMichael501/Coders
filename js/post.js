var image = document.getElementById("fileUpload").value;
const upload= document.getElementById("fileUpload");
upload.onclick=function()
{
	$("#value").val(image);
}