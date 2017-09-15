<div class="content_box">
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
    </div>