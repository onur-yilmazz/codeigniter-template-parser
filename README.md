# codeigniter-template-parser


The Template Parser Class can perform simple text substitution for pseudo-variables contained within your view files. It can parse simple variables or variable tag pairs.




<!DOCTYPE html>
<html>
<head>

</head>

<body>	

	<p>{name}</p>
	<p>{content}</p>

	
    {content_gallery}
	<a href="images/{image}" data-fancybox="gallery"><img src="images/{image}" alt="{name}" title="{name}"></a>
    {/content_gallery}

    <!--Div-->
    {keywords}
	<a title="{meta_keywords}" href="<?=base_url();?>/{link}">{meta_keywords}</a>
    {/keywords}

</body>
</html>
