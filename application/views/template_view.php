<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Блог</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<script src="/js/jquery-3.6.0.min.js" type="text/javascript"></script>
	<script src="/js/script.js" type="text/javascript"></script>
</head>
<body>
<div class="layout">
  <div class="sidebar">
	<h2>Меню</h2>
	<ul>
		<li><a href="/">Главная</a></li>
		<li><a href="/blog">Блог</a></li>
		<li><a href="/login">Для автора</a></li>
	</ul>
  </div>
  <div class="content">
	<?php include 'application/views/'.$content_view; ?>
  </div>
</div>
	
</body>
</html>