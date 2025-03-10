<?php

defined( 'ABSPATH' ) or die();

use BookneticApp\Providers\Helpers\Helper;

?>

<div class="booknetic_forgot_password">
    <div class="booknetic_step_1">
        <div class="booknetic_header"><?php echo bkntc__('Forgot Password')?></div>
        <form method="post" class="booknetic_form">
            <div class="booknetic_form_element">
                <label for="booknetic_email"><?php echo bkntc__('Email')?></label>
                <input type="text" id="booknetic_email" maxlength="100" name="email">
            </div>
            <div>
                <button type="submit" class="booknetic_btn_primary booknetic_forgot_password_btn"><?php echo bkntc__('CONTINUE')?></button>
            </div>
        </form>
        <div class="booknetic_footer">
            <span><?php echo bkntc__('Already have an account?')?></span>
            <a href="<?php echo get_permalink( Helper::getOption('regular_sing_in_page') )?>"><?php echo bkntc__('Sign in')?></a>
        </div>
    </div>
    <div class="booknetic_step_2">
        <div class="booknetic_header"><?php echo bkntc__('Congratulations!')?></div>
        <div class="booknetic_check_your_email">
            <?php echo bkntc__('We need to verify your email.')?><br/>
            <?php echo bkntc__('Please, check your inbox for a confirmation link.')?>
        </div>
        <div class="booknetic_email_success">
            <img src="<?php echo Helper::assets('images/signup-success.svg', 'front-end')?>" alt="">
        </div>
        <div class="booknetic_footer booknetic_resend_activation">
            <span><?php echo bkntc__('Didn\'t receive the email?')?></span>
            <a href="javascript:;" class="booknetic_resend_activation_link"><?php echo bkntc__('Resend again')?></a>
        </div>
    </div>
</div>
