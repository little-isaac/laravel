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
<title><?php echo $title; ?></title>
<script>
    window.theme = window.theme || {};
    window.business = window.business || {};
    window.cn = function (o) {
        return"undefined" == typeof o || null == o || "" == o.toString().trim()
    };
</script>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<link href="{{ URL::asset('css/style.css') }}?t=<?php echo time() ?>" rel="stylesheet" type="text/css"/>