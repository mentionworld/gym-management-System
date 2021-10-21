function login()
{	
	var r1=document.getElementById("r1").value
	var r2=document.getElementById("r2").value
	var r3=document.getElementById("r3").value
	var r4=document.getElementById("r4").value
	var r5=document.getElementById("r5").value

	var XHRObj;
	if(window.XMLHttpRequest)
	{
		XHRObj=new XMLHttpRequest()
	}
	else
	{
		XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
	}
	XHObj.open("POST","user.php?v1="+r1+"&v2="+r2+"&v3="+r3+"&v4="+r4+"&v5="+r5,true)
	XHObj.onreadystatechange=function()
	{
		if(XHObj.readyState==4 && XHObj.status==200)
		{
			alert("USER cREate succcesfully")
		}
		else
		{
			alert("fill well and recreate user")
		}
	}
	XHRObj.send();
}