<?php
/*
template Name: General Template

*/
?>

<?php get_header();  ?>
<img src="<?php header_image(); ?>" height = "<?php  echo_costum_header() -> height; ?>" width="<?php echo get_costum_header() -> width; ?>" alt=""/>  ?>">
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="home-blog">
                <div class="container">
                    <div class="blog-item">
                                <?php
                                if(have_posts() ):
                                    while(have_posts()) : the_post();
                                ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-info">
                                        <p>posted in <?php echo get_the_date(); ?> By <?php  the_author_posts_link(); ?></p>
                                        <p>Categories: <?php the_category(''); ?></p>
                                        <p>Tags: <?php the_tags('',', '); ?> </p>
                                    </div>
                                    <?php the_content(); ?>
                                </article>
                                <?php endwhile; 
                                else:?>
                                <p>Nothing yet to be displayed!</p>
                                <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
<!---->
<?php get_footer(); ?>

