<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $page_title; ?></title>
        <link href="<?= base_url(); ?>assets/stylesheets/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" type="text/css" href="<?= base_url(); ?>assets/images/1427576875_Summer_512px-02.png" />
        <link href="<?= base_url(); ?>assets/stylesheets/sb-admin.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/stylesheets/plugins/morris.css" rel="stylesheet">
        <link href="<?= base_url(); ?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="<?= base_url(); ?>assets/javascripts/jquery-1.11.0.js"></script>
        <script src="<?= base_url(); ?>assets/javascripts/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/javascripts/jquery-1.7.1.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Martel:400,800' rel='stylesheet' type='text/css'>
        <script src="<?= base_url() ?>assets/javascripts/tinymce/js/tinymce/tinymce.min.js"></script>
    </head>
    
    <body>
        <div id="wrapper">
            <?= $sub_menu; ?>
            <?= $main_content; ?>
        </div>