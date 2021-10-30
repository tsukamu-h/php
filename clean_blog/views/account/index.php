<?php $this->setLayoutVar('title', 'アカウント') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h3>ユーザID</h3>
                    <a href="<?php echo $base_url; ?>/user/<?php
                        echo $this->escape($user['user_name']); ?>">
                        <span class="subheading"><h1><?php echo $this->escape($user['user_name']); ?></h1></span>
                    </a>
                    <?php echo $this->escape($user['introduction']); ?>
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
            <h3>フォロー中<h3>

            <?php if (count($followings) > 0): ?>
            <ul>
                <?php foreach ($followings as $following): ?>
                <li>
                    <a href="<?php echo $base_url ?>/user/<?php echo $this->escape($following['user_name']); ?>">
                        <?php echo $this->escape($following['user_name']); ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
                <p>誰もフォローしていません<p>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase"
                href="<?php echo $base_url; ?>/account/userall">ユーザを探す</a></div>
                </div>
            <?php endif; ?>

            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="<?php echo $base_url; ?>/account/update" method="post">
                
                <!-- Submit Button-->
                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">アカウント情報更新</button>
            </form>
            </div>
            </div>
            
        </div>
    </div>
</main>
        
                            
                        
        
    
