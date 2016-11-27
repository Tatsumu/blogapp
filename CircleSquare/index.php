<?php get_header(); ?>

<div class="container clearfix">
<?php get_sidebar(); ?>
    <!--     <section class="hero"></section> -->
    <div class="wrapper">
        <section class="hero2"></section>
        <div class="sns">
            <a href="" class="sns_item"><i class="fa fa-home" aria-hidden="true"></i></a>
            <a href="" class="sns_item"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="" class="sns_item"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        </div>
        <div class="contents">
            <div class="contents_card contents_time">
                <div class="contents_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                <hr class="contents_line">
                <h2 class="contents_heading">火・金5限後</h2>
            </div>
            <div class="contents_card contents_location">
                <div class="contents_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <hr class="contents_line">
                <h2 class="contents_heading">場所 アリーナ</h2>
            </div>
            <div class="contents_card contents_president">
                <div class="contents_icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <hr class="contents_line">
                <h2 class="contents_heading">代表 松本健太郎</h2>
                <p class="contents_email">ksmsek3150@gmail.com</p>
            </div>
            <div class="contents_card contents_number">
                <div class="contents_icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                <hr class="contents_line">
                <h2 class="contents_heading">人数</h2>
            </div>
            <div class="contents_card contents_percent">
                <div class="contents_icon">
                    <i class="fa fa-male" aria-hidden="true"></i>
                    <i class="fa fa-female" aria-hidden="true"></i>
                </div>
                <hr class="contents_line">
                <h2 class="contents_heading">男女比 -:-</h2>
            </div>
            <div class="contents_card contents_money">
                <div class="contents_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                <hr class="contents_line">
                <h2 class="contents_heading">年間比 3000円</h2>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" width="750px" class="contents_img" alt="">

            <div class="contents_info ">
                <div class="contents_info_article">
                    <p class="description">新歓合宿</p>
                </div>
                <div class="contents_info_article">
                    <p class="description">七夕祭</p>
                    <p class="description">夏合宿</p>
                </div>
                <div class="contents_info_article">
                    <p class="description">秋祭</p>
                </div>
                <div class="contents_info_article">
                    <p class="description">塾長会</p>
                    <p class="description">新年合宿</p>
                </div>
            </div>


            <div class="contents_comment">
               <h1 class="contents_comment_heading">・新着情報・</h1>
                <div class="contents_comment_list clearfix">
                    <div class="contents_comment_icon"><i class="fa fa-tag" aria-hidden="true"></i></div>
                    <p class="contents_comment_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

                <div class="contents_comment_list clearfix">
                    <div class="contents_comment_icon"><i class="fa fa-tag" aria-hidden="true"></i></div>
                    <p class="contents_comment_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

                <!--                <a href="" class="contents_comment_next">書き込みをもっと見る(14件)</a> -->


                <div class="contents_comment_post">
                    <input type="radio" name="member" value="サークル関係者">サークル関係者
                    <input type="radio" name="freshman" value="新入生">新入生

                    <textarea name="comment" class="contents_comment_textarea" cols="120" rows="5" placeholder="サークルの最新情報を記入してみよう"></textarea>
                </div>
                    <input  class = "contents_comment_button" type="submit" value="投稿する" width="100" height="100">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
