//load event listener
//created  by Akash Maddala
window.addEventListener("load",start, false);
//global variables
var userInput;
var userScore = 0;
var computerScore = 0;
var computerArray=["rock", "paper","scissor"];
var tryCount = 10;


//start function
function start(){
	document.getElementById("rockButton").addEventListener("click",function(){
		userInput="rock";
		var random;
		random=Math.floor(Math.random()*3);
		var computerResult = computerArray[random];
		getResults(userInput, computerResult);
	}, false);
		document.getElementById("paperButton").addEventListener("click",function(){
			userInput="paper";
			var random;
		random=Math.floor(Math.random()*3);
		var computerResult = computerArray[random];
			getResults(userInput, computerResult);
	}, false);
		document.getElementById("scissorButton").addEventListener("click",function(){
			userInput="scissor";
			var random;
		random=Math.floor(Math.random()*3);
		var computerResult = computerArray[random];
			getResults(userInput, computerResult);
	}, false);
}


//function to get the results
function getResults(userInput, computerResult){
	//var userScore = document.getElementById("playersScore").value;
	//var computerScore = document.getElementById("computerScore").value;
	
		if(tryCount!=0){
			tryCount -=1;
		
			if(userInput == computerResult){
				document.getElementById("winningResult").innerHTML = "Its a tie, You have "+tryCount +" more moves left!";
				document.getElementById("playersScore").innerHTML =   userScore;
				document.getElementById("computerScore").innerHTML =  computerScore;
				
			}
			else if(userInput==="rock" && computerResult=="paper"){
					
						document.getElementById("winningResult").innerHTML = "computer won, You have "+tryCount +" more moves left!";
						//document.getElementById("playersScore").innerHTML = userScore;
						computerScore+=1;
						document.getElementById("computerScore").innerHTML = computerScore;
				
			}
			else if(userInput==="paper" && computerResult==="rock"){
						userScore+=1;
						document.getElementById("winningResult").innerHTML = "you won, You have "+tryCount +" more moves left!";
						document.getElementById("playersScore").innerHTML =  userScore;
						//document.getElementById("computerScore").innerHTML = computerScore;
			}
			else if(userInput==="paper" && computerResult==="scissor"){
						document.getElementById("winningResult").innerHTML = "computer won, You have "+tryCount +" more moves left!";
						computerScore+=1;
						//document.getElementById("playersScore").innerHTML =  userScore;
						document.getElementById("computerScore").innerHTML =  computerScore;
			
			}
			else if(userInput==="scissor" && computerResult==="paper"){
						document.getElementById("winningResult").innerHTML = "you won, You have "+tryCount +" more moves left!";
						userScore+=1;
						document.getElementById("playersScore").innerHTML =  userScore;
						//document.getElementById("computerScore").innerHTML =  computerScore;
				
			}
			else if(userInput==="rock" && computerResult==="scissor"){
					
						document.getElementById("winningResult").innerHTML = "you won, You have "+tryCount +" more moves left!";
						userScore+=1;
						document.getElementById("playersScore").innerHTML = userScore;
						//document.getElementById("computerScore").innerHTML =  computerScore;
				
			}
			else if(userInput==="scissor" && computerResult==="rock"){
					
						document.getElementById("winningResult").innerHTML = "computer won, You have "+tryCount +" more moves left!";
						computerScore+=1;
						//document.getElementById("playersScore").innerHTML =  userScore;
						document.getElementById("computerScore").innerHTML = computerScore;
			
			}
			
	}else{
		
		//use of AJAX to make an asynchronous request when the user has run out of moves (as indicated by tryCount becoming 0).
		document.getElementById("winningResult").innerHTML = "Out of moves&amp; Out of Luck. Oops!! Refresh page ";
		if(userScore>computerScore){
			document.getElementById("winResult").innerHTML = "<h3>Congrats!!!!!! You Won the game</h3>";
			
		}else if(userScore == computerScore){
			document.getElementById("winResult").innerHTML = "<h3>Its a tie</h3>";
		}else{
			document.getElementById("winResult").innerHTML = "<h3>OOPS!!! computer won the game</h3>";
		}
		document.getElementById("rockButton").disabled = true;
		document.getElementById("paperButton").disabled = true;
		document.getElementById("scissorButton").disabled = true;
		
	}//end if
}