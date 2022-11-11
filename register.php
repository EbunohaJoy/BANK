<?php require_once 'components/head.php' ?>

<?php require_once 'components/nav.php' ?>
    <!-- Register In start -->
    <section class="sign-in-up register">
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
                                <h2 class="title">Let’s Get Started!</h2>
                                <p>Please Enter your Email Address to Start your Online Application</p>
                            </div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="name" placeholder="Jone" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" placeholder="Fisher" name="lname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Enter Your Email ID</label>
                                            <input type="text" id="email" placeholder="Your email ID here" name="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="referral">Someone invited you over?</label>
                                            <input type="text" id="referral" placeholder="Enter the referral code" name="ref">
                                        </div>
                                    </div>
                                    <input type="hidden" name="REG">

                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="referral">Password</label>
                                            <input type="text" id="referral" placeholder="Enter the referral code" name="pass">
                                        </div>

                                        <div class="col-12">
                                        <div class="single-input">
                                            <label for="referral">Confirm pass</label>
                                            <input type="text" id="referral" placeholder="Enter the referral code" name="cpass">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <p>By clicking submit, you agree to <span>Bankio's Terms of Use, Privacy Policy, E-sign</span> & <span>communication Authorization.</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="cmn-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register In end -->

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