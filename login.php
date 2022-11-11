<?php require_once 'components/head.php' ?>

<?php require_once 'components/nav.php' ?>

    <!-- Login In start -->
    <section class="sign-in-up login">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content">
                        <?php if (isset($_GET['error'])) : ?>
              <?= showAlert('danger', $_GET['error']); ?>
            <?php endif; ?>

            <?php if (isset($_GET['success'])) : ?>
              <?= showAlert('success', $_GET['success']); ?>
            <?php endif; ?>
                            <div class="section-header">
                                <h5 class="sub-title">The Power of Financial Freedom</h5>
                                <h2 class="title">Set Up Your Password</h2>
                                <p>Your security is our top priority. You'll need this to log into your bankio account</p>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Enter Your Email ID</label>
                                            <input type="text" id="email" placeholder="Your email ID here" name="email">
                                        </div>
                                    </div>
                                    <input type="hidden" name="LOGIN">
                                    <div class="col-12">
                                        <div class="single-input ">
                                            <label for="confirmPass">Password</label>
                                            <div class="password-show d-flex align-items-center">
                                                <input type="text" class="passInput" id="confirmPass" autocomplete="off" placeholder="Enter Your Password" name="pass">
                                                <img class="showPass" src="assets/images/icon/show-hide.png" alt="icon">
                                            </div>
                                            <!-- <div class="forgot-area text-end">
                                                <a href="javascript:void(0)" class="forgot-password">Forgot Password?</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="cmn-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login In end -->

    <!--==================================================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/plugin/slick.js"></script>
    <script src="assets/js/plugin/waypoint.min.js"></script>
    <script src="assets/js/plugin/counter.js"></script>
    <script src="assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugin/wow.min.js"></script>
    <script src="assets/js/plugin/plugin.js"></script>
    <script src="assets/js/main.js"></script>
</body>


</html>