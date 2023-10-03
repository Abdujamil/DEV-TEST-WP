<?php
/*
Template Name: Home
*/

get_header();

$about_html_block = get_field('about_html_block');

$projects = get_posts([
    'post_type' => 'project',
    'post_status' => 'publish',
    'numberposts' => 3,
]);
?>

<?php if ($about_html_block): ?>
    <div class="about">
        <?php echo $about_html_block; ?>
    </div>
<?php endif; ?>

<?php if (have_rows('skills')):
    ?>
    <div class="skills">
        <?php
        while (have_rows('skills')) : the_row();
            $image = get_sub_field('image');
            $alt_text = get_sub_field('alt_text');
            ?>
            <img src="<?php echo $image; ?>" alt="<?php echo $alt_text; ?>"/>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php if (count($projects)): ?>
    <div class="projects">
        <h1>Projects</h1>
        <div class="projects__cards">
            <?php foreach ($projects as $project): $stacks = wp_get_post_terms($project->ID, 'stack'); ?>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="<?php echo get_the_post_thumbnail_url($project->ID); ?>" alt="<?php echo $project->post_title; ?>"/>
                    </figure>
                    <div class="article-body">
                        <h2><?php echo $project->post_title; ?></h2>
                        <p class="desc"><?php echo substr($project->post_content, 0, 190); ?></p>

                        <?php if ($stacks): ?>
                            <p class="stack">
                                Tech stack:
                                <?php foreach ($stacks as $stack): ?>
                                    <?php echo $stack->name; ?>
                                <?php endforeach; ?>
                            </p>
                        <?php endif; ?>
                        <a href="<?php echo get_the_permalink($project->ID); ?>" class="read-more">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/link_icon.svg" alt="link-icon"/> Live Preview
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<?php
get_footer();
