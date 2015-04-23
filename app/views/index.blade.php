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
        <img src="{{asset('extensions/images/logo.png')}}" alt=""/><br/>

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
            <a href="">Главная</a>
            <a class="active" href="">Новости</a>
            <a href="">Статьи</a>
    </div>
</section>
<section class="content">
    <div class="left-block">
        <h3>News</h3>

        <div class="post">
            <img src="{{asset('extensions/images/news.png')}}" alt=""/><br/>

            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is
                untrammelled and when nothing prevents our.</p>
            <a href="">Read</a>
        </div>
        <hr width=70% color="black"/>
        <div class="post">
            <img src="{{asset('extensions/images/news.png')}}" alt=""/><br/>

            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is
                untrammelled and when nothing prevents our.</p>
            <a href="">Read</a>
        </div>
    </div>
    <div class="center-block">
        <img src="{{asset('extensions/images/img.png')}}" alt=""/>

        <h1>These cases are perfectly simple </h1>

        <p>Every pleasure is to be welcome |<span> 12:35 15 Янв 2015</span></p>

        <h2>Choice is untrummled</h2>

        <div class="text">
            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is
                untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be
                welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the
                obligations of business it will frequently occur that pleasures have to be repudiated and annoyances
                accepted. Website.com</p>

            <h3>Circumstances</h3>

            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is
                untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be
                welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the
                obligations of business it will frequently occur that pleasures have to be repudiated and annoyances
                accepted. Website.com</p>

            <h3>Circum</h3>
            <ul>
                <li>These cases are perfectly simple and easy to distinguish</li>
                <li>These cases are perfectly simple and easy to distinguish</li>
                <li>These cases are perfectly simple and easy to distinguish</li>
                <li>These cases are perfectly simple and easy to distinguish</li>
            </ul>
        </div>
    </div>
    <div class="right-block">
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
            <img src="{{asset('extensions/images/logowhite.png')}}" alt="" width=200/> <br/>
            <a href="mail:to"><img src="{{asset('extensions/images/mail.png')}}" width=30 alt=""/>daemkredit@bank.com</a>
        </div>

        <a class="meowlogo" rel="nofollow" style="margin-top: 20px;" href=""><img src="{{asset('extensions/images/about_logo_white.png')}}" title="Meow! Studio" alt="Meow!Studio"/><br />Разработка и продвижение сайта<br />Meow! Studio 2015</a>

    </div>
</footer>
</body>
</html>