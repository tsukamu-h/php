<?php $this->setLayoutVar('title', '投稿') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>投稿</h1>
                    <span class="subheading">投稿画面です</span>
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
                <p>タイトルは必須項目です</p>
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
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" enctype="multipart/form-data" action="<?php echo $base_url; ?>/status/post" method="post">
                        <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                        <div class="form-floating">
                            <input class="form-control" id="title" type="text" name="title" placeholder="Enter title..." data-sb-validations="required" value="<?php echo $this->escape($title); ?>" />
                            <label for="name">タイトル</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="subtitle" type="text" name="subtitle" placeholder="Enter subtitle..." data-sb-validations="required" value="<?php echo $this->escape($subtitle); ?>" />
                            <label for="email">サブタイトル</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="body" name="body" style="height: 12rem" placeholder="Enter text..." data-sb-validations="required"><?php echo $this->escape($body); ?></textarea>
                            <label for="phone">本文</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="image" type="file" name="img" accept="image/*" data-sb-validations="required" />
                            <label for="message">画像</label>
                        </div>
                        <br />
                        <!-- Submit success message-->
                        <!---->
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
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">投稿</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>