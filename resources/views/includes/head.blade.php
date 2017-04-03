<!--head-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$title = str_replace('_', ' ', $title);
if (strtolower($title) == 'index') {
    $title = 'Home';
}
$title = ucwords($title);
?>
<script>
    window.theme = window.theme || {};
theme = {};
    </script>
<title><?php echo $title; ?></title>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<link href="{{ URL::asset('css/style.css') }}?t=<?php echo time() ?>" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">