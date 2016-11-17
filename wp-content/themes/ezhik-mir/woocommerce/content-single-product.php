<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(array('dis-flex','flex-wrap-wrap', 'align-items-start', 'relative', 'wow', 'hide', 'fadeIn')); ?>>

	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
         * @hooked woocommerce_custom_sales_price - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary text-block col-2 padding-l-20">
        
		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_attr - 20
			 * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_single_product_social - 25
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
             * @hooked woocommerce_template_single_price - 10
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>
        
	</div><!-- .summary -->

	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->
<div class="katalog-single-popular katalog-grid">
    <div class="section-title">
        <h2>Популярное</h2>
    </div>                 
    <section class="product-of-week margin-b-24">
        <div class="wrap hor-wrap">
            <div class="katalog-product wow hide fadeIn">
                <div class="katalog-product-type">
                    товар недели
                </div>
                <div class="dis-flex justify-content-between align-items-center">
                    <div class="katalog-product-image col-3-6 text-center">
                        <img src="https://vape.ru/uploads/goods/1005.png">
                    </div>
                    <div class="katalog-product-desc col-3-6 text-block">
                        <h3 class="katalog-product-title">Smok TF-RTA G2 Tank</h3>
                        <p>Это место, в котором культура парения утопает в огромном изобилии авторитетных e-liquids из США и Европы. авторитетных e-liquids из США и Европы. авторитетных e-liquids из США и Европы.</p>
                        <p>Это место, в котором культура парения утопает в огромном изобилии авторитетных e-liquids из США и Европы. авторитетных e-liquids из США и Европы.</p>
                        <div class="price">
                            3299 руб.
                        </div>
                        <div class="more-button">
                            <a href="#" class="button">подробнее</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="product-actions">
        <div class="wrap hor-wrap">
            <div class="dis-flex flex-wrap-wrap justify-content-between">
                <div class="col-4-6 padding-r-24">
                    <div class="katalog-product wow hide fadeIn">
                        <div class="katalog-product-type">
                            распродажа
                        </div>
                        <div class="dis-flex justify-content-between align-items-center">
                            <div class="katalog-product-image col-3-6 text-center">
                                <img src="http://vapenews.ru/uploads/images/00/02/42/2015/07/06/cdac49.png">
                            </div>
                            <div class="katalog-product-desc col-3-6 text-block">
                                <h3 class="katalog-product-title">Blueprint, park ave</h3>
                                <p>Клубника с терпким лимоном.</p>
                                <ul>
                                    <li>12U</li>
                                    <li>4,5ml</li>
                                    <li>24mm</li>
                                    <li>original</li>
                                    <li>USA</li>
                                </ul>
                                <div class="price">
                                    2499 руб.
                                </div>
                                <div class="more-button">
                                    <a href="#" class="button">подробнее</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-2-6">
                    <div class="katalog-product margin-b-24 wow hide fadeIn">
                        <div class="katalog-product-type">
                            акция
                        </div>
                        <div class="katalog-product-image text-center">
                            <img src="https://pp.vk.me/c631518/v631518196/48088/kEgOmyA4Z7s.jpg">
                        </div>
                    </div>
                    <div class="katalog-product wow hide fadeIn">
                        <div class="katalog-product-type">
                            акция
                        </div>
                        <div class="katalog-product-image text-center">
                            <img src="https://pp.vk.me/c631518/v631518196/48088/kEgOmyA4Z7s.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
<script type="text/javascript">(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);
</script>