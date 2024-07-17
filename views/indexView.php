<?php include 'header.php'; ?>

<div class="wrapper">
    <main class="main">
        <style>
            .promo {
                background: url(images/<?= $lastnews['image'] ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
        </style>
        <section class="promo">
            <div class="container">
                <div class="promo__wrapper">
                    <h1 class="title promo__title"><?= $lastnews['title'] ?></h1>
                    <div class="announce promo__announce"><?= $lastnews['announce'] ?></div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <h2 class="title">Новости</h2>
                <div class="news__items">
                    <?php foreach($fourNews as $news) { ?>
                        <a href="?id=<?= $news['id']?>" class="news__item">
                            <div class="news__date"><?= $news['formatDate'] ?></div>
                            <h3 class="news__title"><?= $news['title'] ?></h3>
                            <div class="news__announce"><?= $news['announce'] ?></div>
                            <button type="button" class="news__button">
                                Подробнее
                                <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM26.707 8.70711C27.0975 8.31658 27.0975 7.68342 26.707 7.2929L20.343 0.928934C19.9525 0.53841 19.3193 0.538409 18.9288 0.928934C18.5383 1.31946 18.5383 1.95262 18.9288 2.34315L24.5857 8L18.9288 13.6569C18.5383 14.0474 18.5383 14.6805 18.9288 15.0711C19.3193 15.4616 19.9525 15.4616 20.343 15.0711L26.707 8.70711ZM1 9L25.9999 9L25.9999 7L1 7L1 9Z" fill="#9B407A"/>
                                </svg>
                            </button>
                        </a>
                    <?php } ?>
                </div>
                <ul class="news__navigation">
                    <?php for($i = 1; $i <= $pageOneNews; $i++) { ?>
                        <li><a class="<?= $currentPage==$i ? 'active' : '' ?>" href="?page=<?= $i ?>"><?= $i ?></a></li>
                    <? } ?>
                    <?php if($currentPage < $pageOneNews) { ?>
                        <li>
                            <a class="next" href="?page=<?= $currentPage + 1 ?>">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 10C2.44772 10 2 10.4477 2 11C2 11.5523 2.44772 12 3 12L3 10ZM18.466 11.7071C18.8565 11.3166 18.8565 10.6834 18.466 10.2929L12.102 3.92893C11.7115 3.53841 11.0783 3.53841 10.6878 3.92893C10.2973 4.31946 10.2973 4.95262 10.6878 5.34315L16.3447 11L10.6878 16.6569C10.2973 17.0474 10.2973 17.6805 10.6878 18.0711C11.0783 18.4616 11.7115 18.4616 12.102 18.0711L18.466 11.7071ZM3 12L17.7589 12L17.7589 10L3 10L3 12Z" fill="#841844"/>
                                </svg>
                            </a>
                        </li>
                    <? } ?>
                </ul>
            </div>
        </section>
    </main>


<?php include 'footer.php'; ?>
