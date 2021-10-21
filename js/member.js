function myoga()
		{
			var my=document.getElementById("myoga").value;
			alert("hello")

			var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","../membershipdata.php?r1="+myoga,true);
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
						alert(""+XHRObj.responseText);
					}
			
			};
			XHRObj.send(); 
		}	

function yyoga()
		{
			var yy=document.getElementById("yyoga").value;

			var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","../membershipdata.php?r2="+yyoga,true);
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
						alert(""+XHRObj.responseText);
					}
			
			};
			XHRObj.send(); 
		}	
		function mcross()
		{
			var mcross=document.getElementById("mcross").value;

			var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","../membershipdata.php?r3="+mcross,true);
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
						alert(""+XHRObj.responseText);
					}
			
			};
			XHRObj.send(); 
		}	

	function ycross()
		{
			var ycross=document.getElementById("ycross").value;

			var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","../membershipdata.php?r4="+ycross,true);
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
						alert(""+XHRObj.responseText);
					}
			
			};
			XHRObj.send(); 
		}	

function mweight()
		{
			var mweight=document.getElementById("mweight").value;

			var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","../membershipdata.php?r5="+mweight,true);
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
						alert(""+XHRObj.responseText);
					}
			
			};
			XHRObj.send(); 
		}	

function yweight()
		{
			var yweight=document.getElementById("yweight").value;

			var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","../membershipdata.php?r6="+yweight,true);
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
						alert(""+XHRObj.responseText);
					}
			
			};
			XHRObj.send(); 
		}	
function mcardio()
		{
			var mcardio=document.getElementById("mcardio").value;

			var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","../membershipdata.php?r7="+mcardio,true);
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
						alert(""+XHRObj.responseText);
					}
			
			};
			XHRObj.send(); 
		}	

function ycardio()
		{
			var ycardio=document.getElementById("ycardio").value;

			var XHRObj;
		if(window.XMLHttpRequest)
		{
				XHRObj=new XMLHttpRequest()
		}
		else
		{
			XHRObj=new ActiveXObject("Microsoft.XMLHTTP")
		}
			XHRObj.open("POST","../membershipdata.php?r8="+ycardio,true);
			XHRObj.onreadystatechange=function()
			{
				if(XHRObj.readyState==4 && XHRObj.status==200)
					{
							
						alert(""+XHRObj.responseText);
					}
			
			};
			XHRObj.send(); 
		}	