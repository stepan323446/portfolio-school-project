<?php get_header(
    'Contacts',
    'Contact me to discuss projects, collaborations, or questions. I will be glad to receive your suggestions and feedback!',
    '',
    'contacts',
    [
        ['robots', 'index, follow'],
        ['keywords', 'portfolio, web development, programming, contacts, telegram, email']
    ] ) ?>

    <div class="container contacts-container">
        <div class="contact-info">
            <section class="page-header">
                <span class="page-header__effect"></span>
                <span class="page-header__effect page-header__effect-2"></span>
                <h1>Contacts</h1>

                <div class="page-description">
                    If you have any questions, suggestions, or would like to learn more about my project, <b>feel free to reach out</b>. I'm always happy to hear from you!
                </div>
            </section>

            <section class="contact-info__links">
                <h3>Get in Touch</h3>
                <ul>
                    <li>
                        <span><i class="fa fa-envelope"></i> Email:</span> <a href="mailto:stevedekart2020@gmail.com">stevedekart2020@gmail.com</a></li>
                    <li>
                        <span><i class="fa-brands fa-telegram"></i> Telegram:</span> <a href="https://t.me/SteveDekart" target="_blank">@SteveDekart</a>
                    </li>
                    <li>
                        <span><i class="fa-brands fa-linkedin"></i> LinkedIn:</span> <a href="https://www.linkedin.com/in/stepan-turitsin-009354243/" target="_blank">Stepan Turitsin</a>
                    </li>
                </ul>
            </section>
        </div>
        <div class="contact-form">
            <form action="#" method="post">
                <?php if($sent_status == 'sent'): ?>
                <div class="alert alert-success">
                    Your message has been sent successfully
                </div>
                <?php elseif($sent_status == 'error'): ?>
                <div class="alert alert-danger">
                    An unexpected error has occurred. Contact the administrator
                </div>
                <?php endif; ?>

                <div class="input-text">
                    <label for="contact-name">Name</label>
                    <input type="text" name="name" id="contact-name" required placeholder="">
                </div>

                <div class="input-text">
                    <label for="contact-email">E-mail</label>
                    <input type="email" name="email" id="contact-email" required placeholder="">
                </div>

                <div class="input-text">
                    <label for="contact-message">Message</label>
                    <textarea name="content" rows="4" id="contact-message" required placeholder=""></textarea>
                </div>

                <button class="btn" type="submit">Send message</button>
            </form>
        </div>
        
    </div>
    

<?php get_footer() ?>