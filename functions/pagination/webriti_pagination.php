<?php 
class Webriti_pagination
{
function Webriti_page($curpage, $post_type_data)
{   ?>
    <div class="blog-pagination">
            <?php if($curpage != 1  ) {
                    echo '<a href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'"><i class="fa fa-angle-double-left"></i></a>'; } ?>
            <?php for($i=1;$i<=$post_type_data->max_num_pages;$i++)
                {
                echo '<a class="'.($i == $curpage ? 'active ' : '').'" href="'.get_pagenum_link($i).'">'.$i.'</a>';
                }               
            if($i-1!= $curpage)  {
            echo '<a class="" href="'.get_pagenum_link(($curpage+1 <= $post_type_data->max_num_pages ? $curpage+1 : $post_type_data->max_num_pages)).'"><i class="fa fa-angle-double-right"></i></a>';
             } ?>
    </div>
<?php } 
}

class Webriti_pagination2
{
function Webriti_page2($curpage, $post_type_data,$div)
{   ?>
    <div class="blog-pagination">

            <?php if($curpage != 1  ) {
                $arr=explode("?",get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)));
                    echo '<a href="'.$arr[0]."?div=$div".'"><i class="fa fa-angle-double-left"></i></a>'; } ?>
            <?php for($i=1;$i<=$post_type_data->max_num_pages;$i++)
                {
                    $arr=explode("?",get_pagenum_link($i));
                echo '<a class="'.($i == $curpage ? 'active ' : '').'" href="'.$arr[0]."?div=$div".'">'.$i.'</a>';
                }               
            if($i-1!= $curpage)  {
            $arr=explode("?",get_pagenum_link(($curpage+1 <= $post_type_data->max_num_pages ? $curpage+1 : $post_type_data->max_num_pages)));
            echo '<a class="" href="'.$arr[0]."?div=$div".'"><i class="fa fa-angle-double-right"></i></a>';
             } ?>
    </div>
<?php } 
}

class Webriti_pagination3
{
function Webriti_page3($pages = '', $range = 2, $total_records='', $show_item='')
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         //$pages = $wp_query->max_num_pages;
         $pages= ceil($total_records/$show_item);
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='blog-pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class='portfolio_categories' href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a class='portfolio_categories' href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<a class='active'>".$i."</a>":"<a class='portfolio_categories' href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a class='portfolio_categories' href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class='portfolio_categories' href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}   
}
?>