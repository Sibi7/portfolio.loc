<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>
<section id="contacts" class="contacts_block">
    <div class="container">
        <h2 id="contacts_header" class="text-center header_color_special">Контакты_</h2>
        <div class="card">
            <div class="reviews row">
                <div class="contacts_links col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-4">
                    <div class="row">
                        <div class="col-xs-7 col-sm-12">
                            <dl class="dl-horizontal">
                                <dt>Телефон:</dt>
                                <dd><a href="tel:80954863090">8 (095) 486-30-90</a></dd>
                                <dt>Skype:</dt>
                                <dd><a href="skype:acmr80">acmr80</a></dd>
                                <dt>email:</dt>
                                <dd><a href="mailto:lipodat94@gmail.com">lipodat94@gmail.com</a></dd>
                            </dl>
                        </div>
                        <div class="col-xs-5 col-sm-12 social_links">
                            <ul class="list-unstyled text-xs-right text-sm-left">
                                <li><a href="https://vk.com/id_sibi">Vkontakte</a></li>
                                <li><a href="https://www.instagram.com/v.lipodat/">Instagram</a></li>
                                <li><a href="https://github.com/Sibi7">Github</a></li>
                                <li><a href="https://bitbucket.org/Lipodat_Vladimir/">Bitbucket</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact_form contact_form col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-5 col-md-offset-1">
                    <div class="row">
                        <h3>Сообщение_</h3>
                    </div>
                    <div class="row">
                        <form id="contact-form" method="get" action="http://previews.aspirity.com/mail.php"
                              class="form-horizontal" data-toggle="validator" data-disable="false">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input type="text" id="name-input" name="name" class="form-control"
                                           placeholder="Ваше имя" data-error="Пожалуйста, введите Ваше имя" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input type="email" id="email-input" name="e-mail" class="form-control"
                                           placeholder="Ваш email" data-required-error="Пожалуйста, введите свой email"
                                           data-error="Пожалуйста, введите email корректно" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <textarea class="form-control" id="message-input" name="message"
                                              placeholder="Ваше сообщение" rows="4"
                                              data-error="Пожалуйста, введите Ваше сообщение" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-block" value="Отправить">
                                    <div id="form-submit-errors" class="help-block with-errors"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
