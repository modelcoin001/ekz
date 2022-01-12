<h1>Персональный блог</h1>


<?php

	foreach($data as $row)
	{
		echo 
		'<div class="post">
			<div class="date">Дата публикации:' . date('d/m/Y H:i', $row["date"]) . '</div>
			<div class="title">' . $row['title'] . '</div>
			<div class="post_content">'.$row['content'].'</div>
		</div>';	
	}
	
?>
