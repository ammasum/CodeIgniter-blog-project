<?php $result = $this->post_model->get_one($post_id); ?>
<?php if($result->num_rows() === 1){ ?>
    <?php $row = $result->result()[0]; ?>
    <div class="post-card">
        <div class="post-header">
            <p class="post-title"><?php echo $row->title; ?></p>
            <p class="author">
                By <a href="<?php echo base_url(); ?>index.php/user/profile/<?php echo $row->author_id; ?>">
                    <?php
                        if((int)$this->session->userdata('userid') === (int)$row->author_id){
                            echo "You";
                        }else{
                            echo $row->author_name;
                        }
                    ?>
                </a>
            </p>
        </div>
        <div class="post-image">
            <img src="<?php echo base_url() ?>uploads/image/<?php echo $row->image; ?>">
        </div>
        <div class="post-text">
            <p>
                <?php echo $row->content; ?>
            </p>
        </div>
        <hr class="post-break-hr">
        <?php if($this->session->userdata('islogin')){ ?>
            <div class="post-opinion-bar-inner">
                <div class="post-opinion-like">
                    <a href="#" class="post-opinion-button"><i class="fal fa-thumbs-up"></i></a>
                </div>
                <div class="post-opinion-share">
                    <a href="#" class="post-opinion-button"><i class="fal fa-share-alt-square"></i></a>
                </div>
            </div>
            <div class="comment-input-area">
                <?php echo form_open('post/comment/' . $row->id); ?>
                <div class="form-area">
                    <div class="form-comment-box">
                        <textarea class="form-control form-comment-box-input" name="comment" rows="5" id="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-primary-costom">Comment</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        <?php }else{ ?>
            <p class="success"><a href="<?php echo base_url(); ?>index.php/user">Login</a> to comment</p>
        <?php } ?>
        <?php $comment_results = $this->post_model->get_all_comment($row->id); ?>
        <?php foreach ($comment_results as $comment_row){ ?>
            <div class="comments-show-area">
                <div class="comment-header">
                    <?php $temp_user = $this->user_model->get_user_by_id($comment_row->author_id); ?>
                    <p class="title">
                        <a href="<?php echo base_url(); ?>index.php/user/<?php echo $temp_user[0]->username ?>">
                            <?php echo $temp_user[0]->fullname ?>
                        </a>
                    </p>
                </div>
                <div class="comment-content">
                    <p class="comment-text">
                        <?php echo $comment_row->comment ?>
                    </p>
                </div>
            </div>
            <hr class="post-break-hr">
        <?php } ?>
    </div>

<?php }else{ echo "Something wronge"; } ?>
