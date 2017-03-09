<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <?php get_search_form() ?>
        <!-- /.input-group -->
    </div>

    <!--  Categories Well -->
    <div class="well">
        <h4>Menu</h4>
        <?php //wp_list_categories(); ?>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php wp_list_categories('orderby=name&show_count=1&title_li='); ?>
                </ul>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- List of pages -->
    <div class="well">
        <h4>List of pages</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php wp_list_pages('orderby=name&title_li=') ?>
                </ul>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- Side Widget Well -->
    <div class="well">

        <h4><?php bloginfo('name'); ?></h4>
        <p><?php bloginfo('description'); ?></p>
    </div>

</div>