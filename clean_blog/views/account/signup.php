<?php $this->setLayoutVar('title', 'アカウント登録') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h3>アカウント登録</h3>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>ユーザ名とメールアドレス、パスワードを入力してください</p>
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    
                    
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form action="<?php echo $base_url; ?>/account/register" method="post"
                     id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
                        <!-- Submit error message-->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div id="submitErrorMessage"><div class="text-center text-danger mb-3">
                            <?php if (isset($errors) && count($errors) > 0): ?>
                            <?php echo $this->render('errors', array('errors' => $errors)); ?>
                            <?php endif; ?>
                        </div></div>

                        <!-- 入力フォームを呼び出す -->
                        <?php echo $this->render('account/inputs', array(
                            'user_name' => $user_name, 'mail_address' => $mail_address, 'password' => $password,
                        )); ?>
                        <br />

                        
                        <!-- Submit success message-->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">登録</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>