<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('public/css/bootstrap.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.js') ?>"></script>
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <div id="container">
        <?php 
            $this->load->view($contenido);
        ?>
    </div>
    <footer>

    </footer>
</body>

</html>