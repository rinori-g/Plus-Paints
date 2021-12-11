<?php while (have_rows('content_elements')) : the_row();
        require get_template_directory() . '/custom-fields/layouts/' . get_row_layout() . '.php';
endwhile; ?>