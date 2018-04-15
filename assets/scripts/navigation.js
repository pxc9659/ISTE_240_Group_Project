function closeNavMobile(){
	document.getElementById('navigation').style.width="100%";
	document.getElementsByTagName('main')[0].style.marginLeft="0%";
	document.body.style.backgroundColor="rgba(0,0,0,0.6)";
}

function openNavMobile(){
	document.getElementById('navigation').style.width="0";
	document.getElementsByTagName('main')[0].style.marginLeft="0";
	document.body.style.backgroundColor="#444247";
}
