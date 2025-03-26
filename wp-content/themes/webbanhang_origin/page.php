<?php
get_header();
?>
    <div id="primary">
        <main id="main">
            <?php
            while ( have_posts() ) :
                 the_post();
                the_content(); // Hiển thị nội dung của trang
            endwhile;
            ?> 
        </main>
    </div>
<?php
get_footer();
?>
