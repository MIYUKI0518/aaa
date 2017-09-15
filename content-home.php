<?php
  //表示する関数と、取得する関数
    //the_xxx :表示する関数
    //get_xxx :取得する関数、表示するためには echo get_xxx();とする必要がある。
?>
<header>
  <section class="content_list">
    <a href="<?php the_permalink(); //個別投稿ページのurlを表示?>">
      <?php if(has_post_thumbnail()): //サムネイルが設定されていれば?>
        <?php
          //the_post_thumbnail( 'thumbnail' );        // サムネイル (デフォルト 150px x 150px :最大値)
          //the_post_thumbnail( 'medium' );           // 中サイズ   (デフォルト 300px x 300px :最大値)
          //the_post_thumbnail( 'large' );            // 大サイズ   (デフォルト 640px x 640px :最大値)
          //the_post_thumbnail( 'full' );             // フルサイズ (アップロードした画像の元サイズ)
          //the_post_thumbnail( array( 100, 100 ) );  // 他のサイズ
          the_post_thumbnail()                      //サムネイル画像を表示
          ?>
        <?php else: //サムネイル設定されていなければ ?>
        <?php endif; ?>
      </a>
      <div class="content_list_block">
        <div class="content_list_block_comment">
          <h2><a href="<?php the_permalink();?>"><?php the_title(); //投稿のタイトルを表示する?></a></h2>
          <article>
            <?php the_excerpt(); //投稿の抜粋文を表示する。画像などメディアは表示しない。 ?>
          </article>
        </div>
      </div>
    </section>
  </header>