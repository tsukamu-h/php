

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h3>どの情報を更新するか選択してください</h3>
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
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <p>自己紹介文を更新する</p>
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="<?php echo $base_url; ?>/account/introductionupdate" method="post">
                       
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">自己紹介文を更新</button>
                    </form>

                    <!-- Divider-->
                    <hr class="my-4" />

                    <p>パスワードを更新する</p>
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="<?php echo $base_url; ?>/account/passupdate" method="post">
                       
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">パスワードを更新</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>