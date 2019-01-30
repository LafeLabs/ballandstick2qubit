<!doctype html>
<html  lang="en">
<head>
<meta charset="utf-8"> 
<title>Site Builder</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script>
	MathJax.Hub.Config({
		tex2jax: {
		inlineMath: [['$','$'], ['\\(','\\)']],
		processEscapes: true,
		processClass: "mathjax",
        ignoreClass: "no-mathjax"
		}
	});//			MathJax.Hub.Typeset();//tell Mathjax to update the math
</script>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
-->
<!--Stop Google:-->
<META NAME="robots" CONTENT="noindex,nofollow">
</head>
<body>
<a href = "siteeditor.php" style = "font-family:helvetica;position:absolute;right:0px;top:0px;z-index:10;">EDIT</a>
<?php

    echo file_get_contents("html/index.txt");

?>
</body>
</html>