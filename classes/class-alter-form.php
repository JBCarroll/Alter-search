<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<div class="alter_wrapper">
    <div class="form-row">
        <div class="col">
            <label for="alter_province">WHERE:</label>
                <select id="alter_province" class="province form-control">
                <option value="none" selected disabled>
                    Select province
                </option>
                <option><?php the_sub_field('repeater_surname'); ?></option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
        </div>
        <div class="col">
                <select id="alter_city" class="city form-control">
                <option value="none" selected disabled>
                    Select city
                </option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
        </div>
        <div class="col">
            <label for="alter_store">STORE TYPE:</label>
                <select id="alter_store" class="store form-control">
                <option value="none" selected disabled>
                    Select store
                </option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
        </div>
        <div class="col">
            <input id="alter_search" type="text" class="search form-control" placeholder="Search here..." />
        </div>
    </div>
        <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <tbody>
        <h4>Nationwide retailers in: </h4>
            <?php if( have_rows('therapist_repeater', 'option') ): ?>
                    <?php while( have_rows('therapist_repeater', 'option') ): the_row(); ?>
                    <tr class="warning no-result">
                        <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                    </tr>
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
</div>