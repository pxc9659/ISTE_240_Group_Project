var defaultMarginLeft="10%";

function openNavMobile(){
	let width = window.innerWidth;
	if(width <= 450){
		document.getElementById("navDiv").style.width="100%";
		document.body.style.marginLeft="0";
	}else if(width >450 && width < 1025){
		document.getElementById("navDiv").style.width="250px";
		document.body.style.marginLeft="250px";
	}
}

function closeNavMobile(){
	let width = window.innerWidth;
	if(width <= 450){
		document.getElementById("navDiv").style.width="0%";
		document.body.style.marginLeft="0%";
	}else if(width > 450 && width < 1025){
		document.getElementById("navDiv").style.width="0%";
		document.body.style.marginLeft=defaultMarginLeft;
	}
}
