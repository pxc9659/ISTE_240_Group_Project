var mainMarginLeft;
var xSize="100%";

function closeNavMobile(){
	document.getElementById("navDiv").style.width="0";
	document.body.style.marginLeft=mainMarginLeft;
	document.body.style.marginLeft="0%";
}

function openNavMobile(){
	mainMarginLeft = document.body.style.marginLeft;
	document.getElementById("navDiv").style.width=xSize;
	document.body.style.marginLeft=xSize;
}
