<?php get_header(); ?>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
$search_query = get_search_query();
?>
<div id="main" class="clearfix">

    <!--パンくずリスト-->
    <?php the_bread( $search_query ); ?>

    <!--メインコンテンツエリア-->
    <div id="content">

        <div id="single-box-list" class="clearfix">

            <h1><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h1>

            <?php
            if( $total_results >0 ):
            if(have_posts()):
            while(have_posts()): the_post();
            ?>

            <div class="single-box">
                <div class="chatch-img"><?php the_post_thumbnail('msize'); ?></div>
                <div class="single-desc">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div><!--//single-desc-->
            </div><!--//single-box-->

            <?php endwhile; endif; else: ?>

            <?php echo $search_query; ?> に一致する情報は見つかりませんでした。

            <?php endif; ?>
        </div><!-- //single-box-list-->
    </div><!-- //content -->

    <?php get_sidebar(); ?>

</div><!-- //main -->

<?php get_footer(); ?>
