var p = document.createElement("p"); 
p.className="error";
p.innerHTML="Please select size!";

function task(i)
{
	switch (i){
		case 1:
			var selectionCheck = document.getElementById("rabbitO");
			break;
		
		case 2:
			var selectionCheck = document.getElementById("pandaO");
			break;
		
		case 3:
			var selectionCheck = document.getElementById("pikachuO");
			break;
	}
	
	//no size selected	
	if (selectionCheck.selectedIndex==0) {
		
		
		var errorContainer = document.getElementById("shopContainer");
		errorContainer.prepend(p);
	}
	
	//small size selected
	else if (selectionCheck.selectedIndex==1)
	{
		p.remove();
		
	}
	
	//medium size selected
	else if (selectionCheck.selectedIndex==2)
	{
		p.remove();
		
	}
	
	//large size selected
	else if (selectionCheck.selectedIndex==3)
	{
		p.remove();
		
	}
}


function isOptionSelected() {
	var selectionCheck = document.getElementById("rabbitO");
	
	//no size selected	
	if (selectionCheck.selectedIndex==0) {
		
		
		var errorContainer = document.getElementById("shopContainer");
		errorContainer.prepend(p);
		return false;
	}
	
	//small size selected
	else if (selectionCheck.selectedIndex==1)
	{
		p.remove();
		return true;
		
	}
	
	//medium size selected
	else if (selectionCheck.selectedIndex==2)
	{
		p.remove();
		return true;
		
	}
	
	//large size selected
	else if (selectionCheck.selectedIndex==3)
	{
		p.remove();
		return true;
		
	}
}
