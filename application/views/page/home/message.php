<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>assets/css/message.css">
    <title>Message</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php if($page_body === "message_list"){ ?>
                    <?php $results = $this->message_model->get_message_list_by_user_id($this->session->userdata('userid')) ?>
                    <h1>Messages</h1>
                    <ul class="list-group">
                        <?php foreach ($results AS $result){ ?>
                            <li class="list-group-item">
                                <a href="<?php echo base_url()?>index.php/message/to/<?php echo $result->text_receiver; ?>">
                                    <?php echo $result->to_name; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }else if($page_body === "message_box"){ ?>
                    <div class="message-show-area">
                        <?php if(count($msg) >0){ ?>
                            <h4><?php echo $userdata[0]->fullname; ?></h4>
                            <hr class="break-hr">
                            <?php foreach ($msg as $msgrow){ ?>
                                <?php if((int)$msgrow->sender === (int)$this->session->userdata('userid')){ ?>
                                    <div class="owner-parent">
                                        <div class="own-message bg-primary common-message">
                                            <p><?php echo $msgrow->text; ?></p>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <div>
                                        <div class="receive-message bg-danger common-message">
                                            <p><?php echo $msgrow->text; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <?php echo form_open('message/to/' . $userdata[0]->id); ?>
                    <div class="form-group">
                        <textarea class="form-control msg-input-box" rows="3" name="usermsg"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Send</button>
                    <?php echo form_close(); ?>
                <?php } ?>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>