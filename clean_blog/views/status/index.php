<?php $this->setLayoutVar('title', 'ホーム') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1><?php echo $this->escape($user_name); ?></h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

        <?php //var_dump($statuses); ?>
        <?php foreach ($statuses as $status): ?>
            <?php echo $this->render('status/status', array('status' => $status)); ?>
        <?php endforeach; ?>

            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase"
             href="<?php echo $base_url; ?>/status/post">Older Posts →</a></div>
        </div>
    </div>
</div>
