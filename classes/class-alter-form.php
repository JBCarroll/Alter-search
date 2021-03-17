<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>~

<div class="form-group pull-right">
    <input id="alter_input" type="text" class="search form-control" placeholder="Enter the Therapists name, surname, contact number, suburb or province">
        </div>
        <span class="counter pull-right"></span>
        <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th>#</th>
                <th class="col-md-5 col-xs-5">Name</th>
                <th class="col-md-5 col-xs-5">Surname</th>
                <th class="col-md-4 col-xs-4">Contact Number</th>
                <th class="col-md-5 col-xs-5">Suburb / City</th>
                <th class="col-md-3 col-xs-3">Province</th>
                <th class="col-md-5 col-xs-5">Field of Interest</th>
            </tr>
            <tr class="warning no-result">
                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
            </tr>
        </thead>
        <tbody>
            <?php if( have_rows('therapist_repeater', 'option') ): ?>
                    <?php while( have_rows('therapist_repeater', 'option') ): the_row(); ?>
                        <tr>
                            <th class="scope"><?php echo get_row_index(); ?></th>
                            <td class="ther_name"><?php the_sub_field('repeater_name'); ?></td>
                            <td><?php the_sub_field('repeater_surname'); ?></td>
                            <td><?php the_sub_field('repeater_contact_number'); ?></td>
                            <td><?php the_sub_field('repeater_suburb'); ?></td>
                            <td><?php the_sub_field('repeater_province'); ?></td>
                            <td><?php the_sub_field('repeater_interest'); ?></td>
                        </tr>
                    <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
</table>