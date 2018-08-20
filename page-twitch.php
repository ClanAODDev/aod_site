<?php

/**
 * Template Name: Twitch Template
 */

get_header();

$url = get_template_directory_uri() . '/public/images/';
$defaultHeader = $url . 'pageheader.jpg';
$borderBg = "url('{$url}divisionbgborder.jpg')";

include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<section class="page">
    <div class="sectioncontentcontainer" style="width: 100% !important; margin-top: -30px;">

        <div id="twitchembed" style="height: 75vh;"></div>

        <div class="section-title" style="text-align: center;">
            <h1>Stream Schedule</h1>
        </div>

        <div class="section table100 ver1" style="display: flex;">
            <table data-vertable="ver1"
                   style="border-collapse: collapse; font-family: MuseoSans; font-size: 12px; width: 95%; text-align: center; margin: 30px auto; border: none;">
                <tbody>
                <tr class="row100 head" style="color: #fff; padding: 20px;">
                    <th class="column1" data-column="column1"></th>
                    <th class="column2" data-column="column2">SUNDAY</th>
                    <th class="column3" data-column="column3">MONDAY</th>
                    <th class="column4" data-column="column4">TUESDAY</th>
                    <th class="column5" data-column="column5">WEDNESDAY</th>
                    <th class="column6" data-column="column6">THURSDAY</th>
                    <th class="column7" data-column="column7">FRIDAY</th>
                    <th class="column8" data-column="column8">SATURDAY</th>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">8:00 AM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">9:00 AM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1"
                        style="color: gray; text-align: left;">10:00 AM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1"
                        style="color: gray; text-align: left;">11:00 AM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1"
                        style="color: gray; text-align: left;">12:00 AM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5" style="background-color:orange;"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">1:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5" style="background-color:orange;">Validuz</td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8" style="background-color:purple;"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">2:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5" style="background-color:orange;"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8" style="background-color:purple;">Melrocks</td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">3:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5" style="background-color:orange;"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8" style="background-color:purple;"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">4:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8" style="background-color:purple;"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">5:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6" style="background-color:#b5d6ac;"></td>
                    <td class="column100 column7" data-column="column7"></td>
                    <td class="column100 column8" data-column="column8" style="background-color:green;"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">6:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3" style="background-color: brown;"></td>
                    <td class="column100 column4" data-column="column4" style="background-color: lightblue;"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6" style="background-color:#b5d6ac;">Adaptive</td>
                    <td class="column100 column7" data-column="column7" style="background-color:yellow;"></td>
                    <td class="column100 column8" data-column="column8" style="background-color:green;">Armedpoop</td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">7:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3" style="background-color: brown;">LuckyGuns</td>
                    <td class="column100 column4" data-column="column4" style="background-color:lightblue;">DashBenny
                    </td>
                    <td class="column100 column5" data-column="column5" style="background-color:red;"></td>
                    <td class="column100 column6" data-column="column6" style="background-color:#b5d6ac;"></td>
                    <td class="column100 column7" data-column="column7" style="background-color:yellow;">Shadoxfilms
                    </td>
                    <td class="column100 column8" data-column="column8" style="background-color:green;"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">8:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3" style="background-color: brown;"></td>
                    <td class="column100 column4" data-column="column4" style="background-color:lightblue;"></td>
                    <td class="column100 column5" data-column="column5" style="background-color:red;">Poyzun</td>
                    <td class="column100 column6" data-column="column6" style="background-color:#b5d6ac;"></td>
                    <td class="column100 column7" data-column="column7" style="background-color:yellow;"></td>
                    <td class="column100 column8" data-column="column8" style="background-color:green;"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">9:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2" style="background-color: red;"></td>
                    <td class="column100 column3" data-column="column3" style="background-color: brown;"></td>
                    <td class="column100 column4" data-column="column4" style="background-color:lightblue;"></td>
                    <td class="column100 column5" data-column="column5" style="background-color:red;"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7" style="background-color:yellow;"></td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1"
                        style="color: gray; text-align: left;">10:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2" style="background-color: red;">Poyzun</td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5" style="background-color:red;"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7" style="background-color:cyan;"></td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1"
                        style="color: gray; text-align: left;">11:00 PM
                    </td>
                    <td class="column100 column2" data-column="column2" style="background-color:red;"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7" style="background-color:cyan;">Sneaky561</td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1"
                        style="color: gray; text-align: left;">12:00 AM
                    </td>
                    <td class="column100  column2" data-column="column2" style="background-color:red;"></td>
                    <td class="column100  column3" data-column="column3"></td>
                    <td class="column100  column4" data-column="column4"></td>
                    <td class="column100  column5" data-column="column5"></td>
                    <td class="column100  column6" data-column="column6"></td>
                    <td class="column100  column7" data-column="column7" style="background-color:cyan;"></td>
                    <td class="column100  column8" data-column="column8"></td>
                </tr>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1" style="color: gray; text-align: left;">1:00 AM
                    </td>
                    <td class="column100 column2" data-column="column2"></td>
                    <td class="column100 column3" data-column="column3"></td>
                    <td class="column100 column4" data-column="column4"></td>
                    <td class="column100 column5" data-column="column5"></td>
                    <td class="column100 column6" data-column="column6"></td>
                    <td class="column100 column7" data-column="column7" style="background-color:cyan;"></td>
                    <td class="column100 column8" data-column="column8"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<style>
    .ver1 {
        cursor: default
    }

    td, th {
        padding: 10px
    }

    .table100.ver1 th {
        text-transform: uppercase
    }

    .table100.ver1 .hov-column-ver1, .table100.ver1 .row100:hover {
        background-color: rgba(255, 255, 255, .1)
    }

    .table100.ver1 .hov-column-head-ver1 {
        background-color: #484848 !important
    }

    .table100.ver1 .row100 td:hover {
        background-color: rgba(255, 255, 255, .1);
        color: #fff
    }
</style>

<! Load the Twitch embed script >
<script src="https://embed.twitch.tv/embed/v1.js"></script>

<script>
  !function (a) {
    a('.column100').on('mouseover', function () {
      var n = a(this).parent().parent().parent(), e = a(this).parent().parent(), t = a(n).data('vertable') + '',
        o = a(this).data('column') + '';
      a(e).find('.' + o).addClass('hov-column-' + t), a(n).find('.row100.head .' + o).addClass('hov-column-head-' + t);
    }), a('.column100').on('mouseout', function () {
      var n = a(this).parent().parent().parent(), e = a(this).parent().parent(), t = a(n).data('vertable') + '',
        o = a(this).data('column') + '';
      a(e).find('.' + o).removeClass('hov-column-' + t), a(n).find('.row100.head .' + o).removeClass('hov-column-head-' + t);
    });
  }(jQuery);
</script>

<script type="text/javascript">
  new Twitch.Embed('twitchembed', {
    width: '100%',
    height: '100%',
    channel: 'clanaodstream',
    theme: 'dark',
  });
</script>

<?php get_footer() ?>
