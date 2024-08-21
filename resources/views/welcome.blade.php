<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    @vite([
    "resources/scss/app.scss",
    "resources/js/app.js",
    ])
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <div class="items">
            <div>About Green Haven</div>
            <div>Event Details</div>
            <div>Our Sponsors</div>
            <div>Leaderboard</div>
        </div>
        <button>Plant a Mangrove</button>
    </nav>

    <!-- Section 1 -->
    <div class="section1">
        <div class="upper">
            <div class="section1__left">
                <div class="title_and_progress">
                    <div class="title">
                        <div>Green Haven Project - Mangrove</div>
                        <h1>Green Horizon Await, Join Us in Planting 10,000 Mangroves!</h1>
                    </div>
                    <div class="card_progress">
                        <div>
                            <div>
                                <img class="mangrove" src="{{ asset('images/mangrove.svg') }}" alt="Mangrove">
                                <p><span>5,690</span>/10,000 Pohon</p>
                            </div>

                            <button class="btn__action">Support Our Mission
                                <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow">
                            </button>
                        </div>

                        <div class="progress__bar">
                            <div class="progress__curr"></div>
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/hero.png') }}" alt=" Illustration">
            </div>
            <div class="section1__separator"></div>
            <div class="section1__right">
                <h2>Leaderboard</h2>
                <div class="tabs">
                    <button class="active">Most Donation</button>
                    <button class="">Most Recent</button>
                </div>
                <ul class="leaderboard_list">
                    <li>
                        <div>
                            <div class="rank">01</div>
                            <img src="{{asset('images/profile1.png')}}" alt="Profile Photo">
                            <div>
                                <p>Mangrove Maven</p>
                                <div class="name">Budi Hartanto</div>
                            </div>
                        </div>
                        <div class="points">
                            <img src="{{ asset('images/mangrove.svg') }}" alt="Mangrove">
                            <p><span>350</span> Pohon</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="rank">02</div>
                            <img src="{{asset('images/profile1.png')}}" alt="Profile Photo">
                            <div>
                                <p>Mangrove Maven</p>
                                <div class="name">Dewi Sartika</div>
                            </div>
                        </div>
                        <div class="points">
                            <img src="{{ asset('images/mangrove.svg') }}" alt="Mangrove">
                            <p><span>330</span> Pohon</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="rank">03</div>
                            <img src="{{asset('images/profile1.png')}}" alt="Profile Photo">
                            <div>
                                <p>Mangrove Maven</p>
                                <div class="name">Eko Wahyudi</div>
                            </div>
                        </div>
                        <div class="points">
                            <img src="{{ asset('images/mangrove.svg') }}" alt="Mangrove">
                            <p><span>200</span> Pohon</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="rank">04</div>
                            <img src="{{asset('images/profile2.png')}}" alt="Profile Photo">
                            <div>
                                <p>Guardian of the Grove</p>
                                <div class="name">Rina Kartika</div>
                            </div>
                        </div>
                        <div class="points">
                            <img src="{{ asset('images/mangrove.svg') }}" alt="Mangrove">
                            <p><span>190</span> Pohon</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="rank">05</div>
                            <img src="{{asset('images/profile2.png')}}" alt="Profile Photo">
                            <div>
                                <p>Guardian of the Grove</p>
                                <div class="name">Agus Prasetyo</div>
                            </div>
                        </div>
                        <div class="points">
                            <img src="{{ asset('images/mangrove.svg') }}" alt="Mangrove">
                            <p><span>140</span> Pohon</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="rank">06</div>
                            <img src="{{asset('images/profile1.png')}}" alt="Profile Photo">
                            <div>
                                <p>Mangrove Master</p>
                                <div class="name">Irfan Setiawan</div>
                            </div>
                        </div>
                        <div class="points">
                            <img src="{{ asset('images/mangrove.svg') }}" alt="Mangrove">
                            <p><span>80</span> Pohon</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section1__bg">
            <img src="{{ asset('images/background-sect1.svg') }}" alt="">
        </div>
        <div class="section1__sponsor">
            <img src="{{ asset('images/sponsor-jala.png') }}" alt="Logo Sponsor">
            <img src="{{ asset('images/sponsor-efishery.png') }}" alt="Logo Sponsor">
            <img src="{{ asset('images/sponsor-azarine.png') }}" alt="Logo Sponsor">
            <img src="{{ asset('images/sponsor-kompas.png') }}" alt="Logo Sponsor">
            <img src="{{ asset('images/sponsor-tribun.png') }}" alt="Logo Sponsor">
            <img src="{{ asset('images/sponsor-jawapos.png') }}" alt="Logo Sponsor">
        </div>
    </div>

    <!-- Section 2 -->
    <div class="section2">
        <div>
            <img src="{{ asset('images/jci.png') }}" alt="JCI">
            <img src="{{ asset('images/greenhaven.png') }}" alt="Green Haven">
        </div>
        <h1>About Green Haven Project</h1>
        <div>
            <p>The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting </br> mangroves and educating participants about the importance of these areas. This six-hour event will involve JCI
                </br> members, local farmers, and students, focusing on combating beach erosion and promoting ESG values.</p>
        </div>

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('images/before-mangrove.png') }}" alt="Before Mangrove">
                        <p>Before mangroves were planted</p>
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/after-mangrove.png') }}" alt="After Mangrove">
                        <p>After mangroves were planted</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="section3">
        <h1>Event Summary</h1>
        <p>We give you a brief overview of the event to give you a glimpse of what we're doing </br>
            in the Green Haven Project, download the detailed PDF to see how you can get involved</p>

        <div class="card">
            <div class="card__left">
                <div class="date">26/04/2024</div>
                <div class="time">08:00 - 11:00 WIB</div>
                <div>
                    <p>Join the impactful journey of planting mangroves, </br>
                        where you'll learn, collaborate with locals, earn recognition, </br>
                        and share your story through media coverage</p>
                    <div class="section3__separator"></div>
                    <div class="btn__action"><img src="{{ asset('images/document-download.svg') }}" alt="Arrow">View Event Details</div>
                </div>
            </div>
            <div class="card__right">
                <div class="carousel">
                    <img src="{{ asset('images/event.png') }}" alt="">
                </div>
                <div class="arrow__left"> <img src="{{ asset('images/arrow-left.svg') }}" alt="Arrow Carousel Left">
                </div>
                <div class="arrow__right"> <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow Carousel Right">
                </div>
            </div>
        </div>

        <div class="info">
            <div class="info__item">
                <div class="line active"></div>
                <div class="num">01</div>
                <p class="content">
                    Introducing the beauty </br>
                    of mangroves on a journey </br>
                    to the planting site.
                </p>
            </div>
            <div class="info__item">
                <div class="line"></div>
                <div class="num">02</div>
                <p class="content">
                    Working together with </br>
                    local farmers while </br>
                    planting each mangrove
                </p>
            </div>
            <div class="info__item">
                <div class="line"></div>
                <div class="num">03</div>
                <p class="content">
                    Exploring the wonders of </br>
                    mangrove ecotourism, an
                    educational adventure.
                </p>
            </div>
            <div class="info__item">
                <div class="line"></div>
                <div class="num">04</div>
                <p class="content">
                    Receive a plaque & badge, </br>
                    a mark of honor for every </br>
                    tree you plant.
                </p>
            </div>
            <div class="info__item">
                <div class="line"></div>
                <div class="num">05</div>
                <p class="content">
                    Coverage & documentation </br> 
                    by news media, share your </br>
                    story of change!
                </p>
            </div>
        </div>
    </div>

    <!-- Section 4 -->
    <div class="section4">
        <h1>Sponsorship Packages</h1>
        <p>Our sponsorship package offers branding, promotional opportunities, and visibility at </br>our event, ideal for enhancing company presence and community engagement.</p>

        <div class="personal">
            <h2>Personal Sponsorship Package</h2>
            <div class="personal__table">
                <table>
                    <thead>
                        <tr>
                            <th>Membership Tier</th>
                            <th>Min. Seeds</th>
                            <th>Min. Buy</th>
                            <th>Benefits</th>
                            <th>Donors</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Seedling Scout</td>
                            <td>5 Seeds</td>
                            <td>IDR 75K</td>
                            <td>Badge</td>
                            <td>4,900 Donors</td>
                            <td><button class="btn__action">Support Our Mission
                                    <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow">
                                </button></td>
                        </tr>
                        <tr>
                            <td>Sapling Savior</td>
                            <td>10 Seeds</td>
                            <td>IDR 150K</td>
                            <td>Badge + Pin</td>
                            <td>4,300 Donors</td>
                            <td><button class="btn__action">Support Our Mission
                                    <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow">
                                </button></td>
                        </tr>
                        <tr>
                            <td>Tree Titan</td>
                            <td>20 Seeds</td>
                            <td>IDR 300K</td>
                            <td>Badge + Pin</td>
                            <td>15,000 Donors</td>
                            <td><button class="btn__action">Support Our Mission
                                    <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow">
                                </button></td>
                        </tr>
                        <tr>
                            <td>Mangrove Master</td>
                            <td>50 Seeds</td>
                            <td>IDR 750K</td>
                            <td>Badge + Pin + Bag</td>
                            <td>5,000 Donors</td>
                            <td><button class="btn__action">Support Our Mission
                                    <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow">
                                </button></td>
                        </tr>
                        <tr>
                            <td>Guardian of the Grove</td>
                            <td>100 Seeds</td>
                            <td>IDR 1,500K</td>
                            <td>Badge + Pin + Bag</td>
                            <td>300 Donors</td>
                            <td><button class="btn__action">Support Our Mission
                                    <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow">
                                </button></td>
                        </tr>
                        <tr>
                            <td>Mangrove Maven</td>
                            <td>200 Seeds</td>
                            <td>IDR 3,000K</td>
                            <td>Badge + Pin + Bag</td>
                            <td>10 Donors</td>
                            <td><button class="btn__action">Support Our Mission
                                    <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow">
                                </button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section4__separator"></div>

            <div class="corporate">
                <h2>Corporate Sponsorship Package</h2>
                <div class="corporate__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Benefits</th>
                                <th>Eco Trailblazers</th>
                                <th>Green Innovators</th>
                                <th>Eco Vanguard</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Price</td>
                                <td>15 Million IDR</td>
                                <td>30 Million IDR</td>
                                <td>45 Million IDR</td>
                            </tr>
                            <tr>
                                <td>CO<sub>2</sub> Sequestration</td>
                                <td>22,5 ton/year</td>
                                <td>45 ton/year</td>
                                <td>67,5 ton/year</td>
                            </tr>
                            <tr>
                                <td>Number of Trees</td>
                                <td>1000 Trees</td>
                                <td>2000 Trees</td>
                                <td>3000 Trees</td>
                            </tr>
                            <tr>
                                <td>Logo on JCI Banner</td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                            </tr>
                            <tr>
                                <td>Logo on Communal Stainless Plate</td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                            </tr>
                            <tr>
                                <td>Considered as Main Sponsor</td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                            </tr>
                            <tr>
                                <td>Dedicated Stainless Plate</td>
                                <td></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                            </tr>
                            <tr>
                                <td>Report Update on Planted Trees</td>
                                <td></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                            </tr>
                            <tr>
                                <td>Logo on Event Clothings</td>
                                <td></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                                <td><img src="{{ asset('images/tick-circle.svg') }}" alt=""></td>
                            </tr>
                            <tr class="corporate__action">
                                <td>Make a Donation</a></td>
                                <td><button class="btn__action">Support Our Mission
                                        <img src="{{ asset('images/arrow-right-bl.svg') }}" alt="Arrow">
                                    </button></td>
                                <td><button class="btn__action">Support Our Mission
                                        <img src="{{ asset('images/arrow-right-bl.svg') }}" alt="Arrow">
                                    </button></td>
                                <td><button class="btn__action">Support Our Mission
                                        <img src="{{ asset('images/arrow-right-bl.svg') }}" alt="Arrow">
                                    </button></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <div>
                    <a href="#" class="btn">Make a Donation</a>
                    <a href="#" class="btn">Support Our Mission</a>
                    <a href="#" class="btn">Support Our Mission</a>
                    <a href="#" class="btn">Support Our Mission</a>
                </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="section5">
        <h1>Donate Today and be a </br>Guardian of the Green Belt.</h2>
            <div class="action_call">
                <p>Join us in our mission to rejuvenate and protect our shorelines </br>by donating to our mangrove planting project. </p>
                <div class="btn__container">
                    <button class="btn__action">Support Our Mission <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow"></button>
                </div>
            </div>

            <div class="photos">
                <img src="{{ asset('images/action1.png') }}" alt="Children planting mangroves">
                <img src="{{ asset('images/action2.png') }}" alt="Mangroves plantation">
                <img src="{{ asset('images/action3.png') }}" alt="People working together">
                <img src="{{ asset('images/action4.png') }}" alt="Mangrove tree grows">
                <img src="{{ asset('images/action5.png') }}" alt="Mangrove tree healthy">
            </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Nama yang Mengerjakan Test : <span>Fiorenza Celestyn</span></p>
    </footer>
</body>

</html>