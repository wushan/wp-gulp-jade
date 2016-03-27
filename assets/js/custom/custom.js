/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
// console.log('CustomJS');
// $('.masonry-inner').masonry({
//   // options
//   itemSelector: 'masonry-item',
//   columnWidth: 200
// });
$(document).ready(function(){

	//HeadRoom
	var myElement = document.getElementById('header');
	// construct an instance of Headroom, passing the element
	var headroom  = new Headroom(myElement);
	// initialise
	headroom.init();


	//Masonry

	var elem = document.querySelector('.masonry-list');
	console.log(elem);
	if (elem) {
		var msnry = new Masonry( elem, {
		  // options
		  itemSelector: '.masonry-item',
		  columnWidth: '.masonry-sizer',
		  gutter: '.gutter-sizer',
		  percentPosition: true
		});
		imagesLoaded( elem ).on( 'progress', function() {
		  // layout Masonry after each image loads
		  msnry.layout();
		});
	} else {
		return
	}
});


//typeKit
(function(d) {
var config = {
  kitId: 'pcr2kyt',
  scriptTimeout: 3000,
  async: true
},
h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);