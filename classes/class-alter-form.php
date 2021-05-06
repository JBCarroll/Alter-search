<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<div class="alter_wrapper">
    <div class="form-row">
        <div class="col">
            <label for="alter_province">Province:</label>
            <?php if( have_rows('service_provider_searches', 'option') ): ?>
                    <select id="alter_province" class="alter-select province form-control">
                    <option value="none" selected disabled>Select Province</option>
                <?php while( have_rows('service_provider_searches', 'option') ): the_row(); ?>
                        <option onclick="filterSelection('<?php the_sub_field('province'); ?>')"><?php the_sub_field('filter_province'); ?></option>
                <?php endwhile; ?>
                    </select>
            <?php endif; ?>
        </div>
        <div class="col">
            <label for="alter_city">City:</label>
            <?php if( have_rows('service_provider_searches', 'option') ): ?>
                <select id="alter_city" class="alter-select city form-control">
                    <option value="none" selected disabled>Select City</option>
                <?php while( have_rows('service_provider_searches', 'option') ): the_row(); ?>
                    <option onclick="filterSelection('<?php the_sub_field('city'); ?>')"><?php the_sub_field('filter_city'); ?></option>
                <?php endwhile; ?>
                </select>
            <?php endif; ?>
        </div>
        <div class="col">
            <label for="alter_store">Category:</label>
            <?php if( have_rows('service_provider_searches', 'option') ): ?>
                <select id="alter_store" class="alter-select store form-control">
                    <option value="none" selected>Select Category</option>
                <?php while( have_rows('service_provider_searches', 'option') ): the_row(); ?>
                    <option onclick="filterSelection('<?php the_sub_field('provider_category'); ?>')"><?php the_sub_field('filter_category'); ?></option>
                <?php endwhile; ?>
                </select>
            <?php endif; ?>
        </div>
        <!-- SEARCH INPUT -->
        <div class="col">
            <span id="alter-reset">Reset</span>
        </div>
    </div>
        <span class="counter pull-right"></span>
    <div class="container">
        <?php if( have_rows('service_provider_searches', 'option') ): ?>
            <?php while( have_rows('service_provider_searches', 'option') ): the_row(); ?>
                    <div class="filterDiv <?php the_sub_field('province'); ?><?php echo " " ?><?php the_sub_field('city'); ?><?php echo " " ?><?php the_sub_field('provider_category'); ?>">
                    <a href="#" class="link">
                        <img src="<?php the_sub_field('provider_image'); ?>"/>
                        <span class="title"><?php the_sub_field('provider_name'); ?></span>
                    </a>
                    </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<script>
filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

jQuery(function($){
    $("#alter-reset").on("click", function () {
        $('.alter-select option').prop('selected', function() {
            return this.defaultSelected;
        });
    });
});

</script>