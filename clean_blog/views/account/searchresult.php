<?php $this->setLayoutVar('title', '検索結果一覧') ?>
    
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>ユーザ一覧（検索結果）</h1>
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
            
            <div id="statuses">
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                <?php foreach ($users as $user): ?>
                    <a href="<?php echo $base_url; ?>/user/<?php echo $this->escape($user['user_name']); ?>">
                        <h2 class="post-title"><?php echo $this->escape($user['user_name']); ?></h2>
                    </a>
                    <br>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

