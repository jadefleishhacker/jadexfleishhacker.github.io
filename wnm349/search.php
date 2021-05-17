<html>
    <head>
        <title>Jade's Life</title>
        <?php include("head.php"); ?>
    </head>
    <body>
        <?php get_header(); ?>

        <section class="section-search">
            <?php get_search_form(); ?>    
        </section>

        <section class="section-results">
            <?php
                $query = get_search_query();

                if ($query != "") {
                    echo "<p>Your query: {$query}</p>";
                }
            ?>
        </section>

        <?php get_footer(); ?>
        <?php include("scripts.php"); ?>
    </body>
</html>