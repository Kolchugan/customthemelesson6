<!-- Blog Sidebar Widgets Column -->
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <?php 
                    if (function_exists('dynamic_sidebar')) {
                        dynamic_sidebar("sidebar");
                    }
                    ?>
            </div>
            </div>
            </div>