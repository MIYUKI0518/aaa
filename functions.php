<?php
  //アイキャッチ画像を有効化する
  add_theme_support( 'post-thumbnails', array( 'post' ) );

  //テンプレートディレクトリーのURLを表示する関数を定義
  function the_template_delectory_uri(){
    echo get_template_directory_uri();
  }

  //全投稿をテンプレートファイル表示する関数を定義
  function get_template_part_for_all_posts($name, $slag){
    if (have_posts()){
      while(have_posts()){
        the_post();
        get_template_part($name, $slag);
      }
    }
  }

  function pagination($pages = '', $range = 4)
  {
       $showitems = ($range * 2)+1;

       global $paged;
       if(empty($paged)) $paged = 1;

       if($pages == '')
       {
           global $wp_query;
           $pages = $wp_query->max_num_pages;
           if(!$pages)
           {
               $pages = 1;
           }
       }

       if(1 != $pages)
       {
           echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
           if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
           if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

           for ($i=1; $i <= $pages; $i++)
           {
               if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
               {
                   echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
               }
           }

           if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
           echo "</div>\n";
       }
  }

?>
