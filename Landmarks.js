

//created by Akash Maddala

window.addEventListener("load", start, false);

var checkedArray = [];

function start(){
	document.getElementById("buyButton").addEventListener( "click", buyLand, false);
}

function buyLand(){
	
	for(let i=1; i<9; i++){
		var checkedOrNot = document.getElementById("myCheckbox").checked;
		
		if(checkedOrNot){
			
			checkedArray.push("M"+i);
		
		}
	}
	for(let i=0; i<checkedArray.length; i++){
		document.getElementById("result").innerHTML = "You Bought "+checkedArray[i];
	}
	
}