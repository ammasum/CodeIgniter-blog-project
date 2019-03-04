<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/home/common/header'); ?>
</head>
<body>
<!--navbar-->
<?php
    $this->load->view('partials/home/common/navbar');
?>
<!--end navbar-->
<div class="container-costom">
    <div class="row-costom">
        <div class="left-box">
            <?php $this->load->view('partials/home/common/categoriesbar'); ?>
        </div>
        <div class="middle-box">
            <?php
                if($page_body === "root"){
                    $this->load->view('partials/home/body/root');
                }else if($page_body === 'create_post'){
                    $this->load->view('partials/home/body/create_post');
                }else if($page_body === 'view_post'){
                    $this->load->view('partials/home/body/view_post');
                }else if($page_body === 'errors'){
                    $this->load->view('partials/home/body/errors');
                }
            ?>
        </div>
        <div class="right-box">H</div>
    </div>
</div>
</body>
</html>