<?php $this->setLayoutVar('title', '自己紹介文更新') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h3>アカウント情報を更新します</h3>
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
                <p>自己紹介文を入力してください</p>
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div id="submitErrorMessage"><div class="text-center text-danger mb-3">
                        <?php if (isset($errors) && count($errors) > 0): ?>
                            <?php echo $this->render('errors', array('errors' => $errors)); ?>
                        <?php endif; ?>
                    </div></div>
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="<?php echo $base_url; ?>/account/introductionupdate" method="post">
                        <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
                        <div class="form-floating">
                            <textarea class="form-control" id="introduction" name="introduction" style="height: 12rem" placeholder="Enter text..." data-sb-validations="required"><?php echo $this->escape($introduction); ?></textarea>
                            <label for="phone">自己紹介文</label>
                        </div>
                        <br />
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">更新</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>