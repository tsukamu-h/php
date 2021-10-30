<?php $this->setLayoutVar('title', 'ユーザ一覧') ?>
    
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>ユーザ一覧</h1>
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

            <!-- <input type="hidden" name="_token" value="<?php //echo $this->escape($_token); ?>" /> -->

            <!-- 検索フォームを作る -->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="<?php echo $base_url; ?>/account/searchresult" method="post">
                <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
                <div class="form-floating">
                    <input class="form-control" type="text" name="search" placeholder="Enter title..." data-sb-validations="required" value="<?php echo $this->escape($search); ?>" />
                    <label for="name">探したいユーザ名を入力してください</label>
                </div>
                <!-- Pager-->
                
                <div class="d-flex justify-content-end mb-4">
                <!-- Submit Button-->
                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">検索</button>
                </div>
            </form>

            
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

