<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package departmental-store
 */

?>

<footer class="container-fluid ds-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
				<?php dynamic_sidebar("footer_first_widget")?>
            </div>
            <div class="col-md-6 col-lg-2 mt-5 mt-lg-0">
				<?php dynamic_sidebar("footer_second_widget")?>
            </div>
            <div class="col-md-6 col-lg-2 mt-5 mt-lg-0">
				<?php dynamic_sidebar("footer_third_widget")?>
            </div>
            <div class="col-md-12 col-lg-4 mt-5 mt-lg-0">
				<?php dynamic_sidebar("footer_forth_widget")?>
            </div>
        </div>
    </div>
</footer>

<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center flex-wrap">
					<?php dynamic_sidebar("copyright_footer")?>
            </div>
            
            <div class="col-md-6">
                <div class="w-100 text-center text-lg-end">
                    <?php dynamic_sidebar("payment_image")?>
                </div>
            </div>
        </div>
    </div>
</div>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<style>
    .ds-footer{
        padding-top:75px;
        padding-bottom:75px;
        background-color:#222;
    }

    .ds-footer .logo_hdng {
        color: #fff;
        font-size: 28px;
        font-weight: 800;
        font-family: var(--poppins-bold);
        margin-bottom:15px;
        margin-top:0px;
    }

    .ds-footer .cntnt,
    .footer_bottom .cntnt{
        font-size:13px;
        color:rgba(255,255,255,.7);
        margin-bottom:15px;
        line-height: 1.8;
    }

    .ds-footer .ds-address{
        font-size:14px;
        color:#fff;
        margin-bottom:0;
    }

    .ds-footer .ds-address b {
        letter-spacing: 1px;
    }

    .ds-footer .ds-address span{
        width:100%;
        display:block;
    }

    .ds-footer .footer_hdng{
        text-transform: capitalize;
        line-height: 1;
        margin-bottom: 20px;
        color: #fff;
        font-size:17px;
        font-family: var(--poppins-medium)
    }

    .ds-footer ul{
        display:flex;
        flex-wrap:wrap;
        width:100%;
        padding: 0px;
        margin: 0px;
    }

    .ds-footer ul li{
        width:100%;
        list-style:none;
        width:100%;
        margin-bottom:5px;
    }

    .ds-footer ul li a{
        color:rgba(255,255,255,.7);
        text-decoration: none;
        font-size: 13px;
        transition:0.5s ease;
    }

    .ds-footer ul li a:hover{
        color:var(--primary);
        text-decoration: none;
        font-size: 13px;
    }

    .footer_bottom{
        padding-top:25px;
        padding-bottom:25px;
        background-color:#222;
        border-top:1px solid #323232;
    }

    .footer_bottom img{
        max-width:100%;
        width:200px;
    }
    
    @media (width < 768px ){
        footer{
            background:#ff2200;
        }
    }   

</style>
