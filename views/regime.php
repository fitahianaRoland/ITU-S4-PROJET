<!-- ##### Intro News Area Start ##### -->
<section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>Registration</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">regime gras</a>
                                    <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">regime salade</a>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                                <div class="wrapper">
                                                    <h2>votre objectif </h2>
                                                    <form action="<?php echo base_url('Traitement/insererDetailsUtilisateur'); ?>">

                                                    <div class="input-box">
                                                        <select class="form-control"id="username"name="genre">
                                                        <option value="1">Homme</option>
                                                        <option value="2">Femme</option>
                                                        </select>
                                                      </div>
                                                      <div class="input-box">
                                                        <input type="number" name="taille" placeholder="taille > 100" required>
                                                      </div>
                                                      <div class="input-box">
                                                        <input type="number" name="poids" placeholder="poids actuel > 30" required>
                                                      </div>
                                                      <div class="input-box">
                                                        <input type="number" name="objectifpoids" placeholder="objectif poids > 30" required>
                                                      </div>
                                                      <input type="hidden" value="<?php echo $idregime; ?>" name="idregime">
                                                      <div class="input-box button">
                                                        <input type="Submit" value="GENEREZ REGIME">
                                                      </div>
                                                    </form>
                                                  </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Voici quelques aliments riches en protéines à intégrer au régime alimentaire pour perdre du poids</a>
                                                <a href="#" class="post-author mb-30">By Michael Smith</a>
                                                <p>Le régime alimentaire pour maigrir propose des recommandations pour perdre du poids et maintenir un poids santé. En privilégiant les bons aliments pour maigrir, vous augmentez vos chances de perdre du poids sans frustration, ni privation.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4>Subscribe to our newsletter</h4>
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                            </form>
                            <p class="mt-30">Le régime alimentaire pour maigrir propose des recommandations pour perdre du poids et maintenir un poids santé. En privilégiant les bons aliments pour maigrir, vous augmentez vos chances de perdre du poids sans frustration, ni privation. . volutpat lobortis.</p>
                        </div>
                </div>
            </div>
                <!-- ##### Catagory Featured Area Start ##### -->
    <div class="catagory-featured-post bg-overlay clearfix" style="background-image: url(img/bg-img/23.jpg)">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-9">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Entertainment</span></p>
                        <a href="#" class="post-title">Top 10 <br>Aliment</a>
                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. </p>
                        <span class="post-date">June 20, 2018</span>
                    </div>
                </div>
            </div>
        </div>
    </div>