<?php
/*** Template Name: About */
get_header("main");
?>

<section>
    <div class="about">
        <div class="about__banner">
            <div class="about__banner--title">
                <h1>About</h1>
            </div>
        </div>
        <div class="about__container">
            <div class="about__info">
                <div class="about__info--logo">
                    <img src="<?php echo THEME_DIR; ?>/assets/img/nhcp_logo.png" alt="NHCP Logo">
                    <p>National Historical
                        Commission of the Philippines</p>
                </div>
                <div class="about__info--desc">
                    <p>The National Historical Commission of the Philippines (NHCP), by virtue of Republic Act 10086, is
                        responsible for the conservation and preservation of the country’s historical legacies. Its
                        major thrusts encompass an ambitious cultural program on historical studies, curatorial works,
                        architectural conservation, Philippine heraldry, historical information dissemination
                        activities, restoration and preservation of relics and memorabilia of heroes and other renowned
                        Filipinos. The NHCP undertakes the commemoration of signiﬁcant events and personages in
                        Philippine history and safeguard the blazoning of the national government and its political
                        divisions and instrumentalities. Its five divisions are Finance and Administrative; Historic
                        Preservation; Historic Sites and Education; Research, Publications and Heraldry; and Materials
                        Research Conservation.</p>
                </div>
            </div>
            <div class="about__content">
                <div class="about__content--fullvid">
                    <iframe class="main-video"
                        src="https://www.youtube.com/embed?listType=playlist&list=UUJJPVFOBfAT7ssbpOrqX_hg"
                        allowfullscreen></iframe>
                </div>
                <div class="about__content--icon">
                    <div class="icon">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/icon/logos_youtube.png" alt="Youtube Logo">
                    </div>
                    <div class="link">
                        <a href="https://www.youtube.com/@nationalhistoricalcommissi5224/featured">Go to NHCP Youtube
                            Channel</a>
                    </div>
                </div>
                <div class="about__content--morevid">
                    <div class="yt-video">
                        <iframe
                            src="https://www.youtube.com/embed?listType=playlist&list=UUJJPVFOBfAT7ssbpOrqX_hg&index=2"
                            allowfullscreen></iframe>
                    </div>
                    <div class="yt-video">
                        <iframe
                            src="https://www.youtube.com/embed?listType=playlist&list=UUJJPVFOBfAT7ssbpOrqX_hg&index=3"
                            allowfullscreen></iframe>
                    </div>
                    <div class="yt-video">
                        <iframe
                            src="https://www.youtube.com/embed?listType=playlist&list=UUJJPVFOBfAT7ssbpOrqX_hg&index=4"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer("main");