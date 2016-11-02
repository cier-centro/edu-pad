<!--Enlaces de todas las páginas-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="http://52.37.84.217/edu-pad/css/condensed-fix.css">
<link rel="stylesheet" href="http://52.37.84.217/edu-pad/css/common-elements.css">
<link rel="stylesheet" href="http://52.37.84.217/edu-pad/css/PADBaseStyle.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!--Scripts de todas las páginas-->
<script>
	jQuery(function () {
	    if (isUrlEndsWithPAD("/pad")) {
					$( ".pad-panel .main-menu .menu li a" ).first().addClass("active");
			}
			else {
					$( ".pad-panel .main-menu .menu li a" ).first().removeClass("active");
			}
	});
	function isUrlEndsWithPAD(finalWord) {
			return window.location.href.endsWith(finalWord);
	}
</script>

<!--Script para agregar comentarios Pilos digitales / Script para agregar comentarios Profes digitales-->
<div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//colombia-aprende-para-aprender-digital.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//colombia-aprende-para-aprender-digital.disqus.com/count.js" async></script>
