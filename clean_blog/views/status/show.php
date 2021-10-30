<?php $this->setLayoutVar('title', $status['user_name']) ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1><?php echo $status['title']; ?></h1>
                    <span class="subheading"><?php echo $status['subtitle']; ?></span>
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
        <!-- 投稿削除は本人しかできないようにする -->
        <?php if (!is_null($buttonFlag) && $buttonFlag): ?>
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase"
            href="<?php echo $base_url; ?>/delete/<?php echo $this->escape($status['user_name']); ?>/status/<?php echo $this->escape($status['id']); ?>">投稿削除</a></div>
            </div>
        <?php endif; ?>
    </div>
</div>