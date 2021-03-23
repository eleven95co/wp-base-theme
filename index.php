<?php
get_header();
?>
    <main class="flex-1">
        <h1 class="page-title">Our Latest Posts</h1>
        <div class="page-content">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php while (have_posts()) {
                    the_post();
                    ?>
                    <article class="mb-4 p-4 shadow rounded-md">
                        <h1 class="text-3xl font-semibold mb-4"><?php the_title() ?></h1>
                        <?php the_excerpt() ?>
                        <a class="mt-4 block underline font-semibold" href="<?php echo get_post_permalink() ?>">Read</a>
                    </article>
                    <?php
                }
                ?>
            </div>

        </div>
    </main>
<?php
get_footer();
?>