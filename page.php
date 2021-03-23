<?php
get_header();
?>
    <main class="flex-1">
        <article>
            <h1 class="page-title"><?php the_title() ?></h1>
            <div class="page-content">
                <?php the_content() ?>
            </div>
        </article>
    </main>
<?php
get_footer();
?>