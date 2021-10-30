<?php $this->setLayoutVar('title', $user['user_name']) ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h3><?php echo $this->escape($user['user_name']); ?></h3>
                            <a href="<?php echo $base_url; ?>/user/<?php
                             echo $this->escape($user['user_name']); ?>">
                                <span class="subheading"><h1><?php echo $this->escape($user['user_name']); ?></h1></span>
                            </a>
                            <?php if (!is_null($following)): ?>
                            <?php if ($following): ?>
                            
                            <span class="subheading"><h2>フォローしています</h2></span>

                            <form action="<?php echo $base_url; ?>/followdelete" method="post">
                                <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
                                <input type="hidden" name="following_name" value="<?php echo $this->escape($user['user_name']); ?>" />

                                <!-- Divider-->
                                <hr class="my-4" />
                                <!-- Pager-->
                                <div class="d-flex justify-content-end mb-4">
                                <input class="btn btn-primary text-uppercase" type="submit" value="フォローを外す">
                                </div>
                            </form>
                            
                            <?php else: ?>
                            <form action="<?php echo $base_url; ?>/follow" method="post">
                                <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
                                <input type="hidden" name="following_name" value="<?php echo $this->escape($user['user_name']); ?>" />

                                <!-- Divider-->
                                <hr class="my-4" />
                                <!-- Pager-->
                                <div class="d-flex justify-content-end mb-4">
                                <input class="btn btn-primary text-uppercase" type="submit" value="フォローする">
                                </div>
                                
                            </form>
                            <?php endif; ?>
                            <?php endif; ?>
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
                            <?php foreach ($statuses as $status): ?>
                            <?php echo $this->render('status/status', array('status' => $status)); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>