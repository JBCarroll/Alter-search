<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<div class="alter_wrapper">
    <div class="form-row">
        <div class="col">
            <label for="alter_province">WHERE:</label>
            <?php if( have_rows('service_provider_searches', 'option') ): ?>
                    <select id="alter_province" class="province form-control">
                    <option value="none" selected disabled>Select province</option>
                <?php while( have_rows('service_provider_searches', 'option') ): the_row(); ?>
                        <option><?php the_sub_field('province'); ?></option>
                <?php endwhile; ?>
                    </select>
            <?php endif; ?>
        </div>
        <div class="col">
            <?php if( have_rows('service_provider_searches', 'option') ): ?>
                <select id="alter_city" class="city form-control">
                    <option value="none" selected disabled>Select city</option>
                <?php while( have_rows('service_provider_searches', 'option') ): the_row(); ?>
                    <option><?php the_sub_field('city'); ?></option>
                <?php endwhile; ?>
                </select>
            <?php endif; ?>
        </div>
        <div class="col">
            <label for="alter_store">STORE TYPE:</label>
            <?php if( have_rows('service_provider_searches', 'option') ): ?>
                <select id="alter_store" class="store form-control">
                    <option value="none" selected disabled>Select store</option>
                <?php while( have_rows('service_provider_searches', 'option') ): the_row(); ?>
                    <option><?php the_sub_field('store_type'); ?></option>
                <?php endwhile; ?>
                </select>
            <?php endif; ?>
        </div>
        <!-- SEARCH INPUT -->
        <div class="col">
            <input id="alter_search" type="text" class="search form-control" placeholder="Search here..." />
        </div>
    </div>
        <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <tbody>
        <h4>Nationwide retailers in: </h4>
            <?php if( have_rows('service_provider_results', 'option') ): ?>
                    <?php while( have_rows('service_provider_results', 'option') ): the_row(); ?>
                    <tr class="warning no-result">
                        <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                    </tr>
                        <tr>
                            <td class="ther_name"><img src="<?php the_sub_field('provider_image'); ?>"/></td>
                        </tr>
                    <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>