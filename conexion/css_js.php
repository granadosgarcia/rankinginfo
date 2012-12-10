

<link rel='stylesheet' href='/rankinginfo/css/estilo.css' type='text/css' charset='utf-8'>

<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/rankinginfo/js/fancybox/source/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="/rankinginfo/js/fancybox/source/jquery.fancybox.css?v=2.1.2" media="screen" />

<script type='text/javascript' language='javascript' src='/rankinginfo/js/jquery-1.8.2.min.js'></script>

<link rel="icon" href="/rankinginfo/img/favicon.ico" >

<script type="text/javascript">
		$(document).ready(function() {


			$('.fancybox').fancybox();

			$(".imagengrande").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});
		});
</script>