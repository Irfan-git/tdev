
<?php
        if( has_post_thumbnail() ){
?>
        <header class="entry-header">
        <div class="article-main-meta">

        <?php the_title( '<h1 class="single-title">', '</h1>' ); ?>

        <div class="article-meta">
        
        <?php tdev_single_posted_on(); ?>
        <?php tdev_posted_by(); ?>

        </div>  

        <?php tdev_post_thumbnail(); ?>

        </div>
        </header>
<?php
        }else{
?>

        <header class="entry-header">
        <div class="article-main-meta article-without-thumbnail">

        <?php the_title( '<h1>', '</h1>' ); ?>
        
        <div class="article-meta">
            
        <?php tdev_single_posted_on(); ?>
        <?php tdev_posted_by(); ?>
        
        </div>  
        
        </div>
        </header>

<?php
        }
?>

