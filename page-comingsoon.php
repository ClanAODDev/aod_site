<?php

/**
 * Template Name: Coming Soon
 */
get_header();

?>

<style>

    body {

        font-family: MuseoSans, serif;
        background-color: #111;
        height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrap {
        display: flex; /* or inline-flex */
        flex-direction: column; /* or usually or row */
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .wrap > div {
        margin: 50px 0;
    }

    #countdown {
        color: rgba(255, 255, 255, .8);
        text-align: center;
        display: flex;
        max-width: 360px;
        justify-content: center;
        margin: 0 auto;
    }

    #countdown .countdown-section {
        font-size: 2em;
        padding: 0 15px;
        border-right: 1px solid rgba(255, 255, 255, 0.2);
    }

    #countdown .countdown-section:last-child {
        border-right: 0;
    }

    #countdown .countdown-section .h1 {
        opacity: 0.75;
    }

    #countdown .countdown-section .text-center {
        font-size: 1em;
        color: #fff;
        opacity: 1.0
    }


</style>

<div class="wrap">

    <div class="logo text-center">
        <a href="https://clanaod.net/forums">
            <img src="<?= get_template_directory_uri() ?>/public/images/official-logo.png" class="aod-logo"/>
        </a>
    </div>

    <div id="countdown">
        <div class="countdown-section">
            <span class="h1 hours">-</span>
            <div class="text-center"><strong>HRS</strong></div>
        </div>

        <div class="countdown-section">
            <span class="h1 minutes"></span>
            <div class="text-center"><strong>MINS</strong></div>
        </div>

        <div class="countdown-section">
            <span class="h1 seconds"></span>
            <div class="text-center"><strong>SECS</strong></div>
        </div>
    </div>

    <div><a href="https://clanaod.net/forums" class="call-to-action-button">
            <span>Continue to Forums</span>
        </a></div>
</div>


<script type="text/javascript">
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        return {
            'total': t,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = 'January 01 2017 00:00:00 EST';
    initializeClock('countdown', deadline);
</script>
