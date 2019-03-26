function showTab(n) 
{
	// This function will display the specified tab of the form...
	var x = document.getElementsByClassName("tab");
	x[n].style.display = "block";
	//... and fix the Previous/Next buttons:
	if (n == 0) 
	{
		document.getElementById("prevBtn").style.display = "none";
	} 
	else 
	{
		document.getElementById("prevBtn").style.display = "inline";
	}
	if (n == (x.length - 1)) 
	{
		document.getElementById("nextBtn").innerHTML = "Submit";
	} 
	else 
	{
		document.getElementById("nextBtn").innerHTML = "Next";
	}
	//... and run a function that will display the correct step indicator:
	fixStepIndicator(n)
}

function nextPrev(n) 
{
	// This function will figure out which tab to display
	var x = document.getElementsByClassName("tab");
	// Exit the function if any field in the current tab is invalid:
	if (n == 1 && !validateForm()) 
	{
		return false;
	}
	// Hide the current tab:
	x[currentTab].style.display = "none";
	// Increase or decrease the current tab by 1:
	currentTab = currentTab + n;
	// if you have reached the end of the form...
	if (currentTab >= x.length) 
	{
		document.getElementById("regForm").submit();
		return false;
	}
	showTab(currentTab);
}

function validateForm() 
{
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  document.getElementsByClassName("step")[currentTab].className += " finish";
  return valid; // return the valid status
}

function fixStepIndicator(n) 
{
	var i, x = document.getElementsByClassName("step");
	for (i = 0; i < x.length; i++) 
	{
		x[i].className = x[i].className.replace(" active", "");
	}
	x[n].className += " active";
}