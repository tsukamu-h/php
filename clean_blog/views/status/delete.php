<?php $this->setLayoutVar('title', '投稿削除画面') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h2>以下の投稿を本当に削除しますか？</h2>
                    <span class="subheading">この操作は取り消すことができません</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

        <?php echo $this->render('status/statusdetail', array('status' => $status, '_token' => $_token)); ?>

        <!-- Divider-->
        <hr class="my-4" />
        <!-- Pager-->
        <form id="deleteForm" data-sb-form-api-token="API_TOKEN" action="<?php echo $base_url; ?>/delete/<?php echo $this->escape($status['user_name']); ?>/status/<?php echo $this->escape($status['id']); ?>" method="post">
            <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
            <!-- Submit Button-->
            <div class="d-flex justify-content-end mb-4">
            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">削除する</button>
            </div>
        </form>
        </div>
    </div>
</div>