<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    
    <title>Products</title>
</head>
<body>
    <nav>
        <input type="checkbox">
        <svg viewBox="0 0 24 24">
            <path fill="currentColor" d="M22 13C22 14.11 21.11 15 20 15H4C2.9 15 2 14.11 2 13S2.9 11 4 11H13L15.5 13L18 11H20C21.11 11 22 11.9 22 13M12 3C3 3 3 9 3 9H21C21 9 21 3 12 3M3 18C3 19.66 4.34 21 6 21H18C19.66 21 21 19.66 21 18V17H3V18Z" />
        </svg>

        <ul>
            <li><a href="../index.php"><span>logitech</span><span>G</span></a></li>
            <li><a href="./product.php">Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="../contact/contact.php">Contact</a></li>
            <li><a href="#">Community</a></li>

            <li class="last-nav-li hidden"><a href="#" class="button-style-2">Sign Up</a></li>
            <li class="last-nav-li hidden"><a href="#" onclick="show('popup1')">Sign In</a></li>
        </ul>

        <div>
            <a href="#" class="button-style-2">Sign Up</a>
            <a href="#" onclick="show('popup1')">Sign In</a>
        </div>
    </nav>


    <article class="article-1">
        <div class="container">
            <div class="card">
                <img src="imgs/card-1.jpg" alt="">
                <h2>01</h2>
                <div class="content">
                    <h3>Mouses</h3>
                    <p>Logitech G develops award-winning wireless and wired gaming mice. 
                        Constantly innovating from the sensor to shape, finding the right one for you.</p>
                </div>
                <a href="#mouse">Details</a>
            </div>

            <div class="card">
                <img src="imgs/card-2.jpg" alt="">
                <h2>02</h2>
                <div class="content">
                    <h3>Keyboards</h3>
                    <p>Speed. Accuracy. Reliability. Logitech G gaming keyboards are 
                        designed with the technology and materials needed for high-performance gaming.</p>
                </div>
                <a href="#keyboard">Details</a>
            </div>

            <div class="card">
                <img src="imgs/card-3.jpg" alt="">
                <h2>03</h2>
                <div class="content">
                    <h3>Headphones</h3>
                    <p>Immersive sound, crystal-clear mic, Customizable Equalizer, 
                        and optional 7.1 surround sound. 
                        Everything you need to get started in the game.</p>
                </div>
                <a href="#headphone">Details</a>
            </div>
        </div>
    </article>

    <article class="article-2" id="mouse">
        <div class="left-sidebar">
            <ul>
                <li>LIGHTSPEED</li>
                <li>HERO SENSOR</li>
                <li>ULTRA-FAST FPS</li>
                <li>WIRELESS</li>
                <li>RGB</li>
            </ul>
        </div>
        <div class="title">
            <h1>Mouses</h1>
        </div>
        <div class="container">
            <h2>G SERIES</h2>
            <div class="main-container">
                <div class="card">
                    <div class="new">
                        <h4>NEW</h4>
                    </div>
                    <div class="product-img">
                        <img src="imgs/mouses/G series/G304 (NEW, WIRELESS LIGHTSPEED).webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G304</h3>
                        <br>
                        <p>Wireless lightspeed technology</p>
                        
                    </div>
                    <p class="price">1.099.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="new">
                        <h4>NEW</h4>
                    </div>
                    <div class="product-img">
                        <img src="imgs/mouses/G series/G304 K-DA (NEW, WIRELESS LIGHTSPEED).webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G304 K/DA</h3>
                        <br>
                        <p>Wireless lightspeed technology</p>
                    </div>
                    <p class="price">1.099.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/mouses/G series/G402 HYPERION FURY (ULTRA-FAST FPS).webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G402 HYPERION FURY</h3>
                        <br>
                        <p>Ultra-fast FPS</p>
                    </div>
                    <p class="price">999.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/mouses/G series/G502 HERO K-DA.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G502 HERO K/DA</h3>
                        <br>
                        <p>HERO Sensor 16K</p>
                    </div>
                    <p class="price">1.799.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/mouses/G series/G502 HERO.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G502 HERO</h3>
                        <br>
                        <p>HERO Sensor 16K</p>
                    </div>
                    <p class="price">1.799.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/mouses/G series/G604 (WIRELESS LIGHTSPEED).webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G604</h3>
                        <br>
                        <p>Wireless lightspeed technology</p>
                    </div>
                    <p class="price">2.499.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <h2>PRO SERIES</h2>
            <div class="main-container">
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/mouses/Pro Series/PRO (WIRELESS).webp" alt="">
                    </div>
                    <div class="content">
                        <h3>Pro</h3>
                        <br>
                        <p>Wireless</p>
                        
                    </div>
                    <p class="price">3.799.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/mouses/Pro Series/PRO X (SUPERLIGHT).webp" alt="">
                    </div>
                    <div class="content">
                        <h3>PRO X</h3>
                        <br>
                        <p>Superlight</p>
                    </div>
                    <p class="price">3.490.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/mouses/Pro Series/PRO.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>Pro</h3>
                        <br>
                        <p>PRO Gaming Mouse</p>
                    </div>
                    <p class="price">1.799.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </article>

    <div class="line-through"></div>

    <article class="article-2" id="keyboard">
        <div class="left-sidebar">
            <ul>
                <li>LIGHTSPEED</li>
                <li>GL SWITCH</li>
                <li>ULTRA-THIN</li>
                <li>WIRELESS</li>
                <li>RGB</li>
            </ul>
        </div>
        <div class="title">
            <h1>Keyboards</h1>
        </div>
        <div class="container">
            <h2>G SERIES</h2>
            <div class="main-container">
                <div class="card">
                    <div class="new">
                        <h4>NEW</h4>
                    </div>
                    <div class="product-img">
                        <img src="imgs/keyboards/G-series/g213-prodigy.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G213 PRODIGY</h3>
                        <br>
                        <p>Lightsync RGB</p>
                        
                    </div>
                    <p class="price">1.099.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="new">
                        <h4>NEW</h4>
                    </div>
                    <div class="product-img">
                        <img src="imgs/keyboards/G-series/g413.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G413</h3>
                        <br>
                        <p>Romer-G Tactile Switch</p>
                    </div>
                    <p class="price">2.199.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/keyboards/G-series/g512-carbon.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G512 CARBON</h3>
                        <br>
                        <p>Advanced GX Switch</p>
                    </div>
                    <p class="price">2.999.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/keyboards/G-series/g613.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G613</h3>
                        <br>
                        <p>Wireless lightspeed technology</p>
                    </div>
                    <p class="price">2.499.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/keyboards/G-series/g813.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G813</h3>
                        <br>
                        <p>Ultra-thin keyboard</p>
                    </div>
                    <p class="price">4.699.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/keyboards/G-series/G913 TKL.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>G913 TKL</h3>
                        <br>
                        <p>Tenkeyless lightspeed wireless RGB</p>
                    </div>
                    <p class="price">5.699.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <h2>PRO SERIES</h2>
            <div class="main-container">
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/keyboards/Pro-series/Pro-KDA.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>PRO K/DA</h3>
                        <br>
                        <p>Lightsync RGB</p>
                        
                    </div>
                    <p class="price">3.269.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/keyboards/Pro-series/pro-X.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>PRO X</h3>
                        <br>
                        <p>Programmable RGB</p>
                    </div>
                    <p class="price">3.799.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/keyboards/Pro-series/pro.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>Pro</h3>
                        <br>
                        <p>Tactile switch</p>
                    </div>
                    <p class="price">3.269.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>

                <div class="card">
                    <div class="product-img">
                        <img src="imgs/keyboards/Pro-series/Switch-pro-X.webp" alt="">
                    </div>
                    <div class="content">
                        <h3>SWITCH PRO X</h3>
                        <br>
                        <p>GX switch</p>
                    </div>
                    <p class="price">1.299.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </article>
    <div class="line-through"></div>


    <article class="article-2" id="headphone">
        <div class="left-sidebar">
            <ul>
                <li>LIGHTSPEED</li>
                <li>DUAL DRIVERS</li>
                <li>STEREO HEADSET</li>
                <li>WIRELESS</li>
                <li>RGB</li>
            </ul>
        </div>
        <div class="title">
            <h1>Headphones</h1>
        </div>
        <div class="container">
            <h2>G SERIES</h2>
            <div class="main-container">
                <div class="card">
                    <div class="new">
                        <h4>NEW</h4>
                    </div>
                    <div class="product-img">
                        <img src="imgs/headphones/G-series/g331.png" alt="">
                    </div>
                    <div class="content">
                        <h3>G331</h3>
                        <br>
                        <p>6mm Mic</p>
                        
                    </div>
                    <p class="price">1.699.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="new">
                        <h4>NEW</h4>
                    </div>
                    <div class="product-img">
                        <img src="imgs/headphones/G-series/g333 kda.png" alt="">
                    </div>
                    <div class="content">
                        <h3>G333 K/DA</h3>
                        <br>
                        <p>Dual dynamic drivers</p>
                    </div>
                    <p class="price">1.299.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/headphones/G-series/g333.png" alt="">
                    </div>
                    <div class="content">
                        <h3>G333</h3>
                        <br>
                        <p>Multi-device connection</p>
                    </div>
                    <p class="price">1.299.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/headphones/G-series/g431.png" alt="">
                    </div>
                    <div class="content">
                        <h3>G431</h3>
                        <br>
                        <p>7.1 Surround Sound Wired Gaming Headset</p>
                    </div>
                    <p class="price">2.099.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/headphones/G-series/g433.png" alt="">
                    </div>
                    <div class="content">
                        <h3>G433</h3>
                        <br>
                        <p>7.1 Surround Sound Wired Gaming Headset</p>
                    </div>
                    <p class="price">2.499.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/headphones/G-series/g633s.png" alt="">
                    </div>
                    <div class="content">
                        <h3>G633s</h3>
                        <br>
                        <p>Pro-G audio driver</p>
                    </div>
                    <p class="price">3.999.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>

                <div class="card">
                    <div class="product-img">
                        <img src="imgs/headphones/G-series/g733 kda.png" alt="">
                    </div>
                    <div class="content">
                        <h3>G733 K/DA</h3>
                        <br>
                        <p>Wireless lightspeed technology</p>
                    </div>
                    <p class="price">3.999.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>

                <div class="card">
                    <div class="product-img">
                        <img src="imgs/headphones/G-series/g633s.png" alt="">
                    </div>
                    <div class="content">
                        <h3>G633s</h3>
                        <br>
                        <p>Wireless lightspeed technology</p>
                    </div>
                    <p class="price">3.999.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <h2>PRO SERIES</h2>
            <div class="main-container">
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/headphones/Pro-series/pro-X.png" alt="">
                    </div>
                    <div class="content">
                        <h3>PRO X</h3>
                        <br>
                        <p>DTS surrounded sound</p>
                        
                    </div>
                    <p class="price">3.899.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
                <div class="card">
                    <div class="product-img">
                        <img src="imgs/headphones/Pro-series/pro.png" alt="">
                    </div>
                    <div class="content">
                        <h3>PRO</h3>
                        <br>
                        <p>EQ configuration</p>
                    </div>
                    <p class="price">2.999.000 ???</p>
                    <a href="#">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
                        </svg>
                    </a>
                </div>
    
            </div>
        </div>
    </article>

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
