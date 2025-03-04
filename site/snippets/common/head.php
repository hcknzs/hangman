<!DOCTYPE html>
<html lang="de" class="theme-light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<?= vite()->css('_source/main.scss') ?>
</head>

<body class="<?= 'page-' . $page->template() ?> pt-6">