function getOurImage(smallImage, medImage, largeImage) {
	res=window.innerWidth;
	console.log(smallImage);
	console.log(res);
	doc=document.getElementById('centerImage');
	if(res < 450) {
		doc.src=smallImage;
		console.log("small");
		// console.log(smallImage);
	}else if( (res>450) && (res<1025) ) {
		doc.src=medImage;
		console.log("med");
		// console.log(medImage);
	}else if( res>1025 ) {
		doc.src=largeImage;
		console.log("large");
		// console.log(largeImage);
	}
}
