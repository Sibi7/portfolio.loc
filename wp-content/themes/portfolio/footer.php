<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>
<footer class="footer">
    <div class="container">
        <div>
            <div class="row">
                <div class="col-xs-12">
                    <p class="small text-center">&copy;2017 Vladimir Lipodat</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-labelledby="portfolio-modal-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="modal-title" id="portfolio-modal-label"></h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 portfolio_modal_pic">
                        <img class="img-responsive" src="#" alt=""/>
                    </div>
                    <div class="col-xs-12">
                        <p class="portfolio_description"></p>
                    </div>
                    <div class="col-xs-12">
                        <a class="portfolio_link" href="#" target="_blank"></a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="portfolio_stack">
                    <p class="portfolio_stack_text">Используемые технологии:</p>
                    <ul class="list-inline"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
