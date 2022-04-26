<!doctype html>

<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); ?>>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">

    <?php do_action( 'amp_post_template_head', $this ); ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <style amp-custom>

        <?php $this->load_parts( array( 'style' ) ); ?>

        <?php do_action( 'amp_post_template_css', $this ); ?>

        .top_baner{
            <?php echo image_src(get_field('top_block'), 'bg', true, true); ?>
            height: 200px;
            margin-left: -16px;
            margin-right: -16px;
            background-size: cover;
            background-position: center;
        }
        .text_baner{
            position: relative;
            background: #022e50;
            text-align: center;
            color: #fff;
            font-size: 1rem;
            position: relative;
            margin: 10px -16px 30px -16px;
            padding: 16px;
        }
        .text_baner h2{
            font-size: 1.5rem;
            font-weight: 200;
            letter-spacing: 10px;
        }
        .text_baner .arrow{
            position: absolute;
            left: 50%;
            bottom: -29px;
            transform: translate(-50%, 0);
        }
        .content_about{
          <?php echo image_src(get_field('bg_text'), 'bg', true); ?>  
            padding: 6.75rem 16px 2.25rem;
            background-size: cover;
            background-position: center;
            color: #fff;
            margin-top: -16px;
            margin-left: -16px;
            margin-right: -16px;
        }
        .content_about ul{
            margin-left: 0;
        }
        .content_about ul li{
            display: inline-block;
            margin-bottom: 1rem;
            list-style-type: none;
            font-size:18px;
        }
        .column{
            color: #fff;
        }
        .column #approach{
            background: <?php the_field('color_left'); ?> ;
            margin-left: -16px;
            margin-right: -16px;
            display: flex;
            padding: 2rem 1rem;
            position: relative;
            margin-top: 6px;
        }
        .column #careers{
            background: <?php the_field('color_right'); ?>;
            margin-left: -16px;
            margin-right: -16px;
            display: flex;
            padding: 2rem 1rem;
            position: relative;   
            margin-bottom: 30px;         
        }
        .column .item h2{
            margin: 0;
            letter-spacing: 10px;
            font-size: 2em;
            font-weight: normal;
        }
        .column .item p{
            margin: 0;
            font-size: 18px;
            padding-bottom: 20px;
        }
        .column .item .button{
            background: transparent;
            font-size: 20px;
            border: 1px solid #fff;
            height: 33px;
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
        }
    </style>

</head>



<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">



<?php $this->load_parts( array( 'header-bar' ) ); ?>



<article class="amp-wp-article">

    <div class="amp-wp-article-content">

		<section class="content">
		    <div class="top_baner" style="<?php echo image_src(get_field('top_baner'), 'bg', true); ?>">
		        <div class="arrow">
		            <img src="<?php echo theme('images/scrollto.png'); ?>" alt="">
		        </div>
		    </div>
		    <div class="wrap">
		        <a href="/learn/" class="back i-down-open-big"></a><?php the_field('title_ebook'); ?>
		    </div>
		    <?php if ($book = get_field('books' )) { ?>
		        <div class="books">
		            <div class="wrap">
		                <?php foreach ($book as $b) { ?>
		                    <div class="item">
		                        <div class="top" style="background-color: <?php echo $b['color']; ?>;">
		                            <?php echo $b['title']; ?>
		                        </div>
		                        <?php echo $b['text']; ?><br>
		                        <a href="<?php echo $b['button_link']; ?>" class="button">READ MORE</a>
		                    </div>
		                <?php } ?>
		            </div>
		        </div>
		    <?php } ?>
		</section>

    </div>

    <div class="amp-social-share">
        <amp-social-share type="gplus"></amp-social-share>
        <amp-social-share type="linkedin"></amp-social-share>
        <amp-social-share type="facebook"></amp-social-share>
        <amp-social-share type="twitter"></amp-social-share>
    </div>
</article>



<?php $this->load_parts( array( 'footer' ) ); ?>



<?php do_action( 'amp_post_template_footer', $this ); ?>



</body>

</html>

