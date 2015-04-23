<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    {{HTML::style('extensions/style.css')}}
    {{HTML::style('extensions/bootstrap.css')}}
</head>
<body>
<header>
    <div class="header">
        <img src="../../public/extensions/images/logo.png" alt=""/><br/>

        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
            by the charms of pleasure of the moment.</p>

        <form>
            <input type="text" name="search" placeholder="Search">
            <input type="submit" value="">
        </form>
    </div>
</header>
<section class="menu">
    <div class="mmenu">
        <div>
            <a href="">Home</a>
            <a class="active" href="">About</a>
            <a href="">Pricing</a>
            <a href="">Blog</a>
            <a href="">Contact</a>
        </div>
    </div>
</section>
<section class="content">
    <div class="left-block">
        <h3>Рубрики</h3>

        <div class="form">
            <input type="checkbox" id="money">
            <label for="money">Деньги</label>
            <br />
            <input type="checkbox" id="credits">
            <label for="credits">Кредиты</label>
        </div>
    </div>
    <div class="center-block">
        <div class="news">
            <img src="../../public/extensions/images/post.png" alt="post"/>
            <div class="post">
                <div class="headering">
                    Choice is ntrammelled
                </div>
                <p>Every pleasure is to be welcome |<span> 12:35 15 Янв 2015</span></p>
                <p class="shorttext">
                    These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain
                </p>
                <a href="">Read more</a>
            </div>
        </div>
        <div class="news">
            <img src="../../public/extensions/images/post.png" alt="post"/>
            <div class="post">
                <div class="headering">
                    Choice is ntrammelled
                </div>
                <p>Every pleasure is to be welcome |<span> 12:35 15 Янв 2015</span></p>
                <p class="shorttext">
                    These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain
                </p>
                <a href="">Read more</a>
            </div>
        </div>
        <div class="news">
            <img src="../../public/extensions/images/post.png" alt="post"/>
            <div class="post">
                <div class="headering">
                    Choice is ntrammelled
                </div>
                <p>Every pleasure is to be welcome |<span> 12:35 15 Янв 2015</span></p>
                <p class="shorttext">
                    These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain
                </p>
                <a href="">Read more</a>
            </div>
        </div>
    </div>
    <div class="right-block">
        <div class="advertising"></div>
        <div class="advertising"></div>
        <div class="advertising"></div>
    </div>
</section>
<footer>
    <div class="footer">
        <div class="links">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Pricing</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
        <div class="logocredit">
            <img src="../../public/extensions/images/logowhite.png" alt="" width=200/> <br/>
            <a href="mail:to"><img src="../../public/extensions/images/mail.png" width=30 alt=""/>daemkredit@bank.com</a>
        </div>
        <a href="" class="application">Оставить заявку</a>
        <a class="meowlogo" rel="nofollow" style="margin-top: -50px;" href=""><img src="{{asset('extensions/images/about_logo_white.png')}}" title="Meow! Studio" alt="Meow!Studio"/><br />Разработка и продвижение сайта<br />Meow! Studio 2015</a>
    </div>
</footer>
</body>
</html>