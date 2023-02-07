<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{name}</title>
</head>

<body>
	<h1>{name}</h1>
	<p>{content}</p>
 
	<div class="col-sm-12">
	    {content_gallery}
		    <a href="images/{image}" data-fancybox="gallery"><img src="images/{image}" alt="{name}" title="{name}"></a>
      {/content_gallery}
	</div>

	<div class="col-sm-12 keywords">
      {keywords}
				<a title="{meta_keywords}" href="<?=base_url();?>/tag/{link}">{meta_keywords}</a>
      {/keywords}
	</div>
</body>
</html>
