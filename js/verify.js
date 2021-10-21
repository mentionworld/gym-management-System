	function verify()
		{
			var name=document.getElementById("name").value;
			var pass=document.getElementById("pass").value;
			if(name=="" && pass="")
			{
				alert("User Name should not be empty");
				
			}
			else
			{
			
					var XHObj;
				if(window.XMLHttpRequest)
					{
						XHObj = new XMLHttpRequest();
					}
				else
					{
						XHObj=new ActiveXObject("Mcrosoft.XMLHTTP");
					}
						XHObj.open("POST","home.php?v1="+n1+"&v2="+n2,true);
		
						XHObj.send();
			}
		}
	