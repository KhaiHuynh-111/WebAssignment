<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/contact-style.css">

        <title> Contact Us </title>
    </head>

    <body>
        <nav>
            <input type="checkbox">
            <svg viewBox="0 0 24 24">
                <path fill="currentColor" d="M22 13C22 14.11 21.11 15 20 15H4C2.9 15 2 14.11 2 13S2.9 11 4 11H13L15.5 13L18 11H20C21.11 11 22 11.9 22 13M12 3C3 3 3 9 3 9H21C21 9 21 3 12 3M3 18C3 19.66 4.34 21 6 21H18C19.66 21 21 19.66 21 18V17H3V18Z" />
            </svg>

            <ul>
                <li><a href="../index.php"><span>logitech</span><span>G</span></a></li>
                <li><a href="../products/product.php">Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="#">Community</a></li>

                <li class="last-nav-li hidden"><a href="#" class="button-style-2">Sign Up</a></li>
                <li class="last-nav-li hidden"><a href="#" onclick="show('popup1')">Sign In</a></li>
            </ul>

            <div>
                <a href="#" class="button-style-2">Sign Up</a>
                <a href="#" onclick="show('popup1')">Sign In</a>
            </div>
        </nav>

        <div class="main-s">
            <div class="main-banner-s">
                <div class="banner-image-s">
                    <img src="./assets/images/about-contact-hero.webp" alt="about-contact-us">
                    <div class="contact-items-s">
                        <p class="contact-item-s dropdown-products" onmouseover="handleDropdown('dropdown-products')" onmouseout="hideDropdown('dropdown-products')" 
                            onclick="expandDropdown('dropdown-products')"> PRODUCTS</P>
                            <div class="dropdown-expand dropdown-products-expand"></div>
                        <p class="contact-item-s dropdown-solutions" onmouseover="handleDropdown('dropdown-solutions')" onmouseout="hideDropdown('dropdown-solutions')"
                            onclick="expandDropdown('dropdown-solutions')"> SOLUTIONS</P>
                            <div class="dropdown-expand dropdown-solutions-expand"></div>
                        <p class="contact-item-s dropdown-business" onmouseover="handleDropdown('dropdown-business')" onmouseout="hideDropdown('dropdown-business')"
                            onclick="expandDropdown('dropdown-business')" > BUSINESS</P>
                            <div class="dropdown-expand dropdown-business-expand"></div>
                        <p class="contact-item-s dropdown-support" onmouseover="handleDropdown('dropdown-support')" onmouseout="hideDropdown('dropdown-support')"
                            onclick="expandDropdown('dropdown-support')" > SUPPORT</P>
                            <div class="dropdown-expand dropdown-support-expand"></div>
                    </div>
                    <div class="contact-info-dropdown-s dropdown-products" >
                        <div class="dropdown-inner">
                            <div class="dropdown-info-item-s dropdown-gap-1"></div>
                            <div class="dropdown-info-item-s dropdown-col-1">
                                <div class="dropdown-mice-key">
                                    <h4> MICE + KEYBOARDS </h4>
                                    <p> <a href="#"> Mice </a> </p>
                                    <p> <a href="#"> Combos </a> </p>
                                    <p> <a href="#"> Keyboards </a> </p>
                                    <p> <a href="#"> Ipad Keyboards </a> </p>
                                    <p> <a href="#"> Tablet Keyboards </a> </p>
                                </div>
                                <div class="dropdown-pre-remt">
                                    <h4> PRESENTATION REMOTE </h4>
                                    <p> <a href="#"> Spotlights </a> </p> 
                                    <p> <a href="#"> All presentations remotes </a> </p> 
                                </div>
                            </div>
                            <div class="dropdown-info-item-s dropdown-col-2">
                                <div class="dropdown-mob-devices">
                                    <h4> MOBILE DEVICES </h4>
                                    <p> <a href="#"> iPad Keyboards </a> </p>
                                    <p> <a href="#"> iPad Accessories </a> </p>
                                    <p> <a href="#"> Tablets Keyboards </a> </p>
                                    <p> <a href="#"> Smart Accessories </a> </p>
                                </div>  
                                <div class="dropdown-wire-charging"></div>
                            </div>
                            <div class="dropdown-info-item-s dropdown-col-3"></div>
                            <div class="dropdown-info-item-s dropdown-col-4"></div>
                            <div class="dropdown-info-item-s dropdown-col-5"></div>
                        </div>
                    </div>
                    <div class="contact-info-dropdown-s dropdown-solutions">
                        <div class="dropdown-inner">
                            <div class="dropdown-info-item-s dropdown-col-1">
                                <div class="dropdown-master-series">
                                    <h4> MASTER SERIES </h4>
                                    <p> <a href="#"> MX For Coding </a> </p>
                                    <p> <a href="#"> MX For Creativity </a> </p>
                                    <p> <a href="#"> Master Series Products </a> </p>
                                    <p> <a href="#"> Smart Accessories </a> </p>
                                </div>  
                                <div class="dropdown-work-with">
                                    <h4> WORK WITH </h4>
                                    <p> <a href="#"> Apple </a> </p>
                                    <p> <a href="#"> ChromeBook </a> </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-dropdown-s dropdown-business">
                        <div class="dropdown-inner">
                            <div class="dropdown-info-item-s dropdown-col-1">
                                <div class="dropdown-business">
                                    <h4> VIDEO CONFERENCE </h4>
                                    <p> <a href="#"> Overviews </a> </p>
                                    <p> <a href="#"> Products </a> </p>
                                    <p> <a href="#"> Resources </a> </p>
                                    <p> <a href="#"> Partners </a> </p>
                                    <p> <a href="#"> Contact Sales </a> </p>
                                    <p> <a href="#"> Find a Reseller </a> </p>
                                    <p> <a href="#"> Trading Programs </a> </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-dropdown-s dropdown-support">
                        <div class="dropdown-inner">
                            <div class="dropdown-info-item-s dropdown-col-1">
                                <div class="dropdown-support">
                                    <h4> SUPPORT </h4>
                                    <p> <a href="#"> Support Home </a> </p>
                                    <p> <a href="#"> Register a Products </a> </p>
                                    <p> <a href="#"> Downloads </a> </p>
                                    <p> <a href="#"> Partners </a> </p>
                                    <p> <a href="#"> Contact Sales </a> </p>
                                    <p> <a href="#"> Find a Reseller </a> </p>
                                    <p> <a href="#"> Trading Programs </a> </p>
                                </div>  
                            </div>
                            <div class="dropdown-info-item-s dropdown-col-2">
                                <div class="dropdown-business-support">
                                    <h4> BUSINESS SUPPORT </h4>
                                    <p> <a href="#"> Support Home </a> </p>
                                    <p> <a href="#"> Register a Products </a> </p>
                                    <p> <a href="#"> Downloads </a> </p>
                                    <p> <a href="#"> Partners </a> </p>
                                    <p> <a href="#"> Contact Sales </a> </p>
                                    <p> <a href="#"> Find a Reseller </a> </p>
                                    <p> <a href="#"> Trading Programs </a> </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <script>
                    /*
                        function expandDropdown(className) {
                            let w = window.innerWidth;
                            if(w > 600) return ;

                            let newClassName = className + "-expand";
                            let expDropdown = document.getElementsByClassName(newClassName)[0];
                            if(expDropdown.innerHTML !== "") {
                                expDropdown.innerHTML = "";
                                return;
                            } 
                            let dropDownInfo = document.getElementsByClassName(className)[1].cloneNode(true);
                            let disp = dropDownInfo.style.display ;
                            disp = "none" ? "block" : "none";
                            dropDownInfo.style.display  = disp;
                            document.getElementsByClassName(newClassName)[0].appendChild(dropDownInfo);
                            //dropDownInfo.style.display = "none";

                        } */
                        function handleDropdown(className) {
                            let w = window.innerWidth;
                            if(w < 600) return ;
                            document.getElementsByClassName(className+"-expand")[0].innerHTML = "";

                            let dropDownInfo = document.getElementsByClassName(className)[1];
                            dropDownInfo.setAttribute("onmouseover", "showDropdown('"+className+"')");
                            dropDownInfo.setAttribute("onmouseout", "hideDropdown('"+className+"')");
                            showDropdown(className);
                        }

                        function showDropdown(className) {
                            let dropDown = document.getElementsByClassName(className)[1];
                            dropDown.style.display = "flex";
                        }
                        function hideDropdown(className) {
                            let w = window.innerWidth;
                            if(w < 600) return ;
                            document.getElementsByClassName(className+"-expand")[0].innerHTML = "";
                            let dropDown = document.getElementsByClassName(className)[1];
                            dropDown.style.display = "none";
                        }
                    </script>
                </div>
                
            </div>
            <div class="main-info-s">
                <div class="main-info-s-1">
                    <h2> CORPORATE OFFICES </h2>
                    <div class="top-blank-s"></div>
                    <hr >
                    <div class="bottom-blank-s"></div>
                    <div class="info-content-s">
                        <div class="info-col-1s info-col-s-1">
                            <p class="info-col-title-s"> <b> Americas </b> </p>
                            <p> 7700 Gateway Blvd. </p>
                            <p> Newark, CA 94560 USA </p>
                            <p> +1 510-795-8500 </p>
                            <p> Monday - Friday, 8:00am - 5:00pm PST </p>
                        </div>
                        <div class="info-col-1s info-col-s-2">
                            <p class="info-col-title-s"> <b> Logitech Europe S.A. </b></p>
                            <p> EPFL - Quartier de l'Innovation </p>
                            <p> Daniel Borel Innovation Center </p>
                            <p> CH - 1015 Lausanne </p>
                            <p> +41 (0)21 863 55 11 </p>
                            <p> +41 (0)21 863 55 12 Fax </p>
                        </div>
                        <div class="info-col-1s info-col-s-3">
                            <p class="info-col-title-s"> <b> Logitech Audio Group - Business Office </b></p>
                            <p> 4700 NW Camas Meadows Drive </p>
                            <p> Camas, WA  98607 </p>
                            <p> +1 360-817-1200 </p>
                            <p> Monday - Friday, 8:00am - 5:00pm PT </p>
                        </div>
                    </div>
                </div>

                <div class="info-gap-s"></div>

                <div class="main-info-s-1">
                    <h2> SUPPORT ENQUIRIES </h2>
                    <div class="top-blank-s"></div>
                    <hr>
                    <div class="bottom-blank-s"></div>
                    <div class="info-content-s">
                        <div class="info-col-1s info-col-s-1 info-col-s-21">
                            <p class="info-col-title-s"> <b> Online Support </b> </p>
                                <div class="col-21-gap-1-s"></div>
                            <p> Resources for help with Logitech hardware and software. </p>
                                <div class="col-21-gap-2-s"></div>
                            <p> <b> <a href="#">SUPPORT HOME > </a></b></p>
                                <div class="col-21-gap-3-s"></div>
                            <p> <b> Online/.com Order Support </b></p>
                                <div class="col-21-gap-4-s"></div>
                            <p> <a href="#"> ORDER FAQS > </a> <a href="#"> TRACK YOUR ORDER > </a> </p>
                                <div class="col-21-gap-5-s"></div>
                            <p> <b> Support / Warranty Claims </b> </p>
                                <div class="col-21-gap-6-s"></div>
                            <p> +1 646-454-3200 </p>
                            <p> +1 866-632-5644 </p>
                        </div>
                        <div class="info-col-1s info-col-s-2">
                            <p class="info-col-title-s"> <b> Harmony Product Support </b></p>
                                <div class="col-22-gap-1-s"></div>
                            <p> Toll-free phone and email support is available for a limited period after the initial setup of your Harmony. </p>
                                <div class="col-22-gap-2-s"></div>
                            <p> <b> <a href="#"> VIEW SUPPORT OPTIONS > </a></b> </p>
                                <div class="col-22-gap-3-s"></div>
                            <p> Complete support for current Harmony products is available online. </p>
                                <div class="col-22-gap-4-s"></div>
                            <p> <b> <a href="#">VIEW ONLINE SUPPORT > </a> </b></p>
                        </div>
                        <div class="info-col-1s info-col-s-3 info-col-23-s-3">
                            <p class="info-col-title-s"> <b> Product Forums </b></p>
                                <div class="col-23-gap-1-s"> </div>
                            <p> Access the Logitech community for peer-to-peer support. </p>
                                <div class="col-23-gap-2-s"> </div>
                            <p> <b> <a href="#">PRODUCT FORUMS > </a></b> </p>
                        </div>
                    </div>
                </div>

                <div class="info-gap-s"></div>

                <div class="main-info-s-1">
                    <h2> BUSINESS TO BUSINESS RESOURCE </h2>
                    <div class="top-blank-s"></div>
                    <hr >
                    <div class="bottom-blank-s col-31-bot-blank"></div>
                    <div class="info-content-s">
                        <div class="info-col-1s info-col-s-31">
                            <p class="info-col-title-s"> <b> Channel Resellers </b></p>
                            <p> <b> <a href="#">AUTHORIZED RESELLERS > </a></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div>
                <div class="col-1">
                    <a href="#"><span>logitech</span><span>G</span></a>
                    <p style="font-style: italic;"> "Game with passion - Win with science"</p>
                    <p>A Swiss company focused on innovation and quality, 
                    Logitech designs products and experiences that have an
                     everyday place in people's lives.</p>
                </div>
                
                <div class="col-2">
                    <h4>Explore</h4>
                    <p>Services</p>
                    <p>About Us</p>
                    <p>Contact</p>
                    <p>Community</p>

                    <br>

                    <h4>News</h4>
                    <p>Products</p>
                    <p>Discount</p>
                    <p>Lottery</p>
                </div>

                <div class="col-3">
                    <h4>Thanks To</h4>
                    <p>Faker</p>
                    <p>S1mple</p>
                    <p>Riot Games</p>
                    <p>Jeon Jung-kook</p>

                    <br>

                    <h4>Affiliate</h4>
                    <p>VNG</p>
                    <p>Tencent</p>
                    <p>Riots Games</p>
                </div>

                <div class="col-4">
                    <h4>Legal</h4>
                    <p>Cookies</p>
                    <p>Terms</p>
                    <p>Policy</p>
                </div>

                <div class="social-media">
                    <svg class="facebook" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
                    </svg>
            
                    <svg class="youtube" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z" />
                    </svg>
            
                    <svg class="twitter" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" />
                    </svg>
            
                    <svg class="linkedin" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 3A2 2 0 0 1 21 5V19A2 2 0 0 1 19 21H5A2 2 0 0 1 3 19V5A2 2 0 0 1 5 3H19M18.5 18.5V13.2A3.26 3.26 0 0 0 15.24 9.94C14.39 9.94 13.4 10.46 12.92 11.24V10.13H10.13V18.5H12.92V13.57C12.92 12.8 13.54 12.17 14.31 12.17A1.4 1.4 0 0 1 15.71 13.57V18.5H18.5M6.88 8.56A1.68 1.68 0 0 0 8.56 6.88C8.56 5.95 7.81 5.19 6.88 5.19A1.69 1.69 0 0 0 5.19 6.88C5.19 7.81 5.95 8.56 6.88 8.56M8.27 18.5V10.13H5.5V18.5H8.27Z" />
                    </svg>
                </div>
            </div>

            <div class="line-through"></div>

            <p>?? 2021 Logitech. All Rights Reserved.</p>

            <div class="popup" id="popup1">
            <h1>Sign in</h1>

            <form action="/login.php" method="post">
            <div class="sign-in-input">
                <div class="fields">
                    <div class="fieldset">
                        <input type="text" class="before-FS" required="" autocomplete="off" name="username">
                        <h1 class="Fs-H"> <span>Email or phone</span></h1>
                        <label class="placeholder">Email or phone</label>
                    </div>
                </div>

                <div class="fields">
                    <div class="fieldset">
                        <input type="text" class="before-FS" required="" autocomplete="off" name="password">
                        <h1 class="Fs-H"> <span>Password</span></h1>
                        <label class="placeholder">Password</label>
                        <label class="Remember-me">
                            <input type="checkbox" class="custom-checkbox" />
                            <span style="color:cyan; position: absolute; left: 25px; top: 60px">Remember me?</span>
                        </label>
                    </div>
                </div>

            </div>

            <div class="login-option">
                <button onclick="hide('popup1')">Cancel</button>
                <button>Login</button>
                <a href=# class="clear"> Forgot Password?</a>
            </div>
            </form>
        </div>
    
            <script src="/script.js"></script>
        </footer>
    </body>
</html>