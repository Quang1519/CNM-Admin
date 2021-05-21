<meta charset="utf-8">
<title>Đăng ký vé</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"> -->
<meta content="Coderthemes" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <base href="http://localhost:8080/CNM-Admin/"> -->
<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo constant("DIR_APP"); ?>admin\view\assets\images\favicon1.ico">

<!-- App css -->
<link href="<?php echo constant("DIR_APP"); ?>admin\view\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo constant("DIR_APP"); ?>admin\view\assets\css\icons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo constant("DIR_APP"); ?>admin\view\assets\css\app.min.css" rel="stylesheet" type="text/css">

<?php

if(empty($_SESSION['username']) || $_SESSION['phanquyen'] != 1 || empty($_SESSION['ten'])){
  if($this->active != 'login'){
    echo '<script type="text/javascript">window.location="login.html"</script>';
  }
}
?>
