<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <title>Message</title>
</head>
<body>
    <div class="container">
        <?php if($page_body === "message_list"){ ?>
            <h1>Messages</h1>
            <ul class="list-group">
                <li class="list-group-item"><a href="#">MA</a></li>
                <li class="list-group-item"><a href="#">CM</a></li>
                <li class="list-group-item"><a href="#">KM</a></li>
            </ul>
        <?php }else if($page_body === "message_box"){ ?>
            <?php echo form_open('message/to/' . "1"); ?>
            <div class="form-group">
                <label for="msgbox">Example textarea</label>
                <textarea class="form-control" id="msgbox" rows="3" name="usermsg"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
            <?php echo form_close(); ?>
        <?php } ?>
    </div>
</body>
</html>