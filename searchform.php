<div class="input-group">
  <form role="search" method="get" id="searchform" class="form-search form-control" action="<?php echo home_url('/'); ?>">
    <!-- <input class="form-control" type="text" placeholder="Search" tabindex="1" autocomplete="off" spellcheck="false" dir="auto" style="position:relative; vertical-align:top; background-color:transparent;"> -->
    <input type="text" tabindex="1" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" id="s" class="search-query form-control" placeholder="<?php _e("<!--:en-->Search<!--:--><!--:tr-->Ara<!--:--><!--:hr-->pretraživanje<!--:--><!--:sq-->kërkim<!--:--><!--:bg-->търсене<!--:-->"); ?>">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button">
         <i class="icon-search"></i>
      </button>
    </span>
    <!-- <input type="submit" id="searchsubmit" value="<?php _e('Search issues and places', 'roots'); ?>" class="btn"> -->
  </form>
</div>