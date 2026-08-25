<?php

$query = new WP_Query(
    array(
        'post_type'      => 'team_member',
        'posts_per_page' => 6,
    )
);

if ( $query->have_posts() ) :

    echo '<div class="team-members">';

    while ( $query->have_posts() ) :

        $query->the_post();

        echo '<article class="team-member">';

        the_post_thumbnail( 'medium' );

        echo '<h3>';
        the_title();
        echo '</h3>';

        echo '<p>';
        the_content();
        echo '</p>';

        echo '</article>';

    endwhile;

    echo '</div>';

endif;

wp_reset_postdata();