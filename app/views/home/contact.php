<div class="breadcrumb-area text-center bg-dark text-light" style="background-image: url(<?php echo URL?>public/assets/img/shape/42.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Bizimle İletişime Geçin</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Us
============================================= -->
<div class="contact-area  overflow-hidden default-padding">
    <div class="container">
        <div class="row align-center">
            <div class="col-tact-stye-one col-lg-5 pr-60 pr-md-15 pr-xs-15">
                <div class="contact-style-one-info">
                    <div class="mb-30">
                        <h2>İletişim</h2>
                    </div>
                    <ul>
                        <li class="wow fadeInUp">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Telefon</h4>
                                <a href="">+905326117795</a>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="info">
                                <h4 class="title">Email</h4>
                                <a href="mailto:info@hipoiot.com">info@hipoiot.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-tact-stye-one col-lg-7">
                <div class="contact-form-style-one">
                    <div class="shape-right-bottom">
                        <img src="<?php echo URL?>public/assets/img/shape/43.png" alt="Image not Found">
                    </div>
                    <h4 class="sub-title">Have Questions?</h4>
                    <h2 class="title">Send us a Massage</h2>
                    <?php
                    function alertError($s)
                    {
                        return '<div class="alert alert-error">'.$s.'</div>';
                    }

                    function alertMsg($s)
                    {
                        return '<div class="alert alert-info">'.$s.'</div>';
                    }
                    ?>
                    <?php  if (isset($_COOKIE["error"])){echo alertError($_COOKIE["error"]);}?>
                    <?php  if (isset($_COOKIE["mail_cevap"]))	{echo alertMsg($_COOKIE["mail_cevap"]);}?>
                    <?php
                    function value($s)
                    {
                        if (empty($s)){  return $s=null; exit;}
                        else{return $s;}
                    }

                    if (empty($_COOKIE["mail_cevap"]))	{?>
                    <form  method="POST" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="company"  class="form-control" placeholder="Company Name*" required="required"  value="<?php if(isset($_COOKIE["company"])){ echo $_COOKIE["company"];} ?>">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="name"  class="form-control" placeholder="Your Name*" required="required"  value="<?php if(isset($_COOKIE["adSoyad"])){ echo $_COOKIE["adSoyad"];} ?>">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email*" required="required" value="<?php if(isset($_COOKIE["email"])){ echo $_COOKIE["email"];} ?>">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone*" required="required"  value="<?php if(isset($_COOKIE["tel"])){ echo $_COOKIE["tel"];} ?>">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea name="message"  cols="30" rows="5" class="form-control" placeholder="Your Message*" required="required"><?php if(isset($_COOKIE["mesaj"])){ echo $_COOKIE["mesaj"];}  ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    <i class="fa fa-paper-plane"></i> Get in Touch
                                </button>
                            </div>
                        </div>
                    </form>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>