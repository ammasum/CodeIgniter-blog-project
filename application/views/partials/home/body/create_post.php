<div class="post-update-form">
    <p class="post-create-form-title">Create Post</p>
    <?php
        echo form_open_multipart('post/create');
    ?>
    <div class="form-group">
        <input type="text" name="title" placeholder="Title" class="form-title-input form-control-plaintext">
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control-file">
    </div>
    <div class="form-group">
        <textarea name="content" id="" cols="30" rows="10" class="form-content-input" placeholder="Content"></textarea>
    </div>
    <button class="btn btn-primary">SUBMIT</button>
    <?php
        echo form_close();
    ?>

</div>