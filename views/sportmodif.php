<!-- ##### Intro News Area Start ##### -->
<section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>pour modifier votre sport</h6>
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
                                                    <h2>modifier</h2>
                                                    <form action="<?php echo base_url('Traitement/updatesport'); ?>">
                                                      <div class="input-box">
                                                        <label for="">id</label>
                                                        <input type="number" name="idsport" value="<?php echo $idsport[0]['idsport']; ?>" required>
                                                      </div>
                                                      <label for="">prix</label>
                                                      <div class="input-box">
                                                        <input type="text" name="nomsport" value="<?php echo $idsport[0]['nomsport']; ?>" required>
                                                      </div>
                                                      <div class="input-box button">
                                                        <input type="Submit" value="valider">
                                                      </div>
                                                    </form>
                                                  </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
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
                            <h4>Autre menu</h4>
                            <form action="<?php echo base_url("#"); ?>" method="post">
                                <button type="submit" class="btn newsbox-btn w-100">retour</button>
                            </form>
                            <p class="mt-30">Le régime alimentaire pour maigrir propose des recommandations pour perdre du poids et maintenir un poids santé. En privilégiant les bons aliments pour maigrir, vous augmentez vos chances de perdre du poids sans frustration, ni privation. . volutpat lobortis.</p>
                        </div>
                </div>
            </div>