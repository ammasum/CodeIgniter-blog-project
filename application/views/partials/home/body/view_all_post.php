<div class="page-1100">
    <div class="view-all-post-1100">
        <?php foreach ($result as $row){ ?>
            <div class="post-box-1100">
                <div class="post-title-1100">
                    <p><?php echo $row->title; ?></p>
                </div>
                <div class="post-image-1100">
                    <img src="<?php echo base_url(); ?>uploads/image/<?php echo $row->image; ?>" alt="" width="100%" height="200px">
                </div>
                <div class="post-content-1100">
                    <p>
                        <?php echo substr($row->content, 0, 50); ?> <a
                                href="<?php echo base_url();?>index.php/post/view/<?php echo $row->id; ?>" class="btn btn-primary">View full
                        </a>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php if(count($result) > 0){ ?>
        <div class="post-next-1100"><i class="fas fa-arrow-square-right"></i></div>
    <?php } ?>
</div>