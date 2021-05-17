<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-field">
        <input type="search" placeholder="Search..." id="search" value="<?php echo get_search_query(); ?>" name="s" />
        <i class="fas fa-search"></i>
    </div>
</form>
