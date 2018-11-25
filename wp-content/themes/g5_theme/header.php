<?php
	$args = [
		'post_type' => 'animal',
		'posts_per_page' => -1,
	];

	// Get animal list
	$the_query = new WP_Query($args);
	if($the_query->have_posts()):
		while($the_query->have_posts()):
			$the_query->the_post();
			$animals[] = get_the_title();
		endwhile;
	endif;
	wp_reset_postdata();

	// If the search corresponds to an animal
	// $result = $_GET;
	// $home = get_home_url();
	// if(!empty($result)):
	// 	for($i; $i<7;$i++):
	// 	if(in_array($result['name'], $animals[$i])):
	// 		//Go to the page
	// 		wp_redirect($home.'/animal/'.$result['name']);
	// 		exit;
	// 	endif;
	// endfor;
	// endif;



	$result = file_get_contents('animals.json');
	$result = json_decode($result);
	// echo '<pre>';
	// print_r($result);
	// echo '</pre>';
	// $json_data = json_encode($animals);
	// file_put_contents('animals.json', $json_data);

?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
				<!-- favicons -->
				<link rel="apple-touch-icon" sizes="180x180" href="<?= FAVICONS_URL ?>/apple-touch-icon.png">
				<link rel="icon" type="image/png" sizes="32x32" href="<?= FAVICONS_URL ?>/favicon-32x32.png">
				<link rel="icon" type="image/png" sizes="16x16" href="<?= FAVICONS_URL ?>/favicon-16x16.png">
				<link rel="manifest" href="<?= FAVICONS_URL ?>/site.webmanifest">
				<link rel="mask-icon" href="<?= FAVICONS_URL ?>safari-pinned-tab.svg" color="#5bbad5">
				<link rel="shortcut icon" href="<?= FAVICONS_URL ?>/favicon.ico">
				<meta name="msapplication-TileColor" content="#2b5797">
				<meta name="msapplication-config" content="/browserconfig.xml">
				<meta name="theme-color" content="#ffffff">
        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">




		<title>
			<?php
				bloginfo('name');
				if (wp_title('', false)) {
					echo '|';
				} else {
					echo bloginfo('description');
				} wp_title('');
			?>
		</title>



        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
	<body <?php body_class(); ?>>
        <header id="header">
		<?php
			$mouse = get_field('type_of_mouse', 'options');
			if($mouse == 'experimental'):
		?>
			<div class="wrap">
				<div class="wrap__ball wrap__ball-js" style="background-color: <?php the_field('mouse_color', 'options') ?>;"></div>
			</div>
		<?php
			endif;
		?>
		<?php include 'menu.php'; ?>

		</header>


