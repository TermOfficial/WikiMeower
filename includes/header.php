<header><a href="/"><img src="/includes/wikimeower_logo.png" alt="WikiMeower logo"></a><h5><?php
  $top = array(
		# Random header text
		'Did you know that Meower currently contains over 9,400 blocks?', 'Fun fact: Meower was once named ScratchConnect!',
		'The Meower collab has been active since July 2019!',
	);
	$rnd = array_rand($top);
  echo $top[$rnd];
?></h5></header>