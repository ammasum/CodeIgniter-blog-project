<div class="categories">
    <p class="categories-header">Categories</p>
    <div class="main-category-list">
        <?php $main_categories = $this->categories_model->get_main_categories(); ?>
        <?php foreach ($main_categories as $cat_row){ ?>
            <div class="main-category-list-item">
                <p><i class="far fa-angle-double-right"></i> <a href="#"><?php echo $cat_row->name; ?></a></p>
                <?php $sub_categories = $this->categories_model->get_sub_categories($cat_row->id); ?>
                <?php foreach ($sub_categories as $subcat_row){ ?>
                    <div class="sub-category-list">
                        <div class="sub-category-list-item">
                            <p><a href="#"><?php echo $subcat_row->name; ?></a></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>