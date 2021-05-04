<?php

	/**
	 * Two Columns With Kitchen Booking Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );

	$col_2_bg = get_field( 'column_2_background_colour' );
	$col_1_image = get_field( 'column_1_background_image' );
	$image_size = 'large';

	$col_1_image_bg = wp_get_attachment_image_url( $col_1_image, $image_size );
	?>

<style type="text/css">
	<?php if ( $col_2_bg ) : echo '#' . $block_id . '.acf-kitchen-booking .col-2'; ?>  {
        background-color: <?php echo $col_2_bg; ?>;
    }
	<?php endif; ?>
	<?php if ( $col_1_image ) : echo '#' . $block_id . '.acf-kitchen-booking .col-1';  ?> {
        background-image: url(<?php echo $col_1_image_bg; ?>);
    }
	<?php endif; ?>
</style>

<section <?php ign_block_attrs( $block ); ?>>
	<div class="grid">
		<div class="span-6 col-1">


		</div>
		<!-- /.col-left -->
		<div class="span-6 col-2">
            <!--<form action="#" id="widgetForm" method="post" name="widgetForm">
                <fieldset>
                    <div class="ui-icon-lb ui-btn-corner-all ui-header ui-bar-w ui-header-fixed slidedown" data-position="fixed" data-role="header" data-theme="w" role="banner">
                        <div class="ui-select"><div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="flags en-GB" data-iconpos="notext" data-theme="w" data-inline="false" data-mini="false" title="UK English" class="ui-btn ui-btn-up-w ui-shadow ui-btn-corner-all ui-fullsize ui-btn-block ui-btn-icon-notext"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">UK English</span><span class="ui-icon ui-icon-flags en-GB ui-icon-shadow">&nbsp;</span></span><select data-icon="flags en-GB" data-iconpos="notext" id="lang" name="lang"><option selected="selected" value="en-GB">UK English</option><option value="de-CH">Deutsch - CHE</option><option value="de-DE">Deutsch - DE</option><option value="de-AT">Deutsch - AUT</option><option value="da-DK">Dansk</option><option value="es-ES">Español</option><option value="fi-FI">Suomi</option><option value="fr-FR">Français</option><option value="nl-NL">Nederlands</option><option value="nb-NO">Norsk</option><option value="sv-SE">Svenska</option><option value="en-US">US English</option>
                                </select></div></div>
                        <h3 id="widgetTitle" class="ui-title" role="heading">Una Kitchen</h3>
                        <p class="ui-title">Choose your date, party size and session:</p>
                    </div>

                    <div data-role="content" id="ABTest" data-noavailability="Sorry, there isn’t a table matching your selection." class="ui-content" role="main">
                        <fieldset data-role="controlgroup" data-type="horizontal" class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal">
                            <div class="ui-select"><div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="alt ui-icon-arrow-d" data-iconpos="left" data-theme="c" data-inline="true" data-mini="false" class="ui-btn ui-btn-up-c ui-btn-inline ui-fullsize ui-btn-icon-left ui-corner-left"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">2 people</span><span class="ui-icon ui-icon-alt ui-icon-arrow-d ui-icon-shadow">&nbsp;</span></span><select data-icon="alt ui-icon-arrow-d" data-iconpos="left" data-inline="true" id="dfcovs" name="dfcovs">
                                        <option value="1">1 person</option>
                                        <option selected="selected" value="2">2 people</option>
                                        <option value="3">3 people</option>
                                        <option value="4">4 people</option>
                                        <option value="5">5 people</option>
                                        <option value="6">6 people</option>
                                    </select></div></div><div class="ui-select"><div data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="alt ui-icon-arrow-d" data-iconpos="right" data-theme="c" data-inline="true" data-mini="false" class="ui-btn ui-btn-up-c ui-btn-inline ui-fullsize ui-btn-icon-right ui-corner-right ui-controlgroup-last"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Breakfast</span><span class="ui-icon ui-icon-alt ui-icon-arrow-d ui-icon-shadow">&nbsp;</span></span><select data-icon="alt ui-icon-arrow-d" data-inline="true" id="dfsid" name="dfsid">
                                        <option selected="selected" value="BREAKFAST">Breakfast</option>
                                        <option value="LUNCH">Lunch</option>
                                        <option value="DINNER">Dinner</option>
                                    </select></div></div>
                        </fieldset>
                        <input id="dfdate" name="dfdate" type="text" value="2021-05-17" class="ui-input-text ui-body-e ui-corner-all ui-shadow-inset" style="display: none;">
                        <div class="ui-calendar ui-corner-all ui-overlay-shadow" id="dfdate_calendar">
                            <div class="ui-calendar-head">
                                <a class="ui-calendar-prev ui-btn ui-btn-up-c ui-btn-inline ui-shadow ui-btn-corner-all ui-btn-icon-notext" data-date="2021-04-01" href="#" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" title="Previous Month">
                                    <span class="ui-btn-inner ui-btn-corner-all">
                                        <span class="ui-btn-text screen-reader-text">Previous Month</span>
                                        <span class="ui-icon ui-icon-arrow-l ui-icon-shadow">&nbsp;</span>
                                    </span></a>
                                <a class="ui-calendar-next ui-btn ui-btn-up-c ui-btn-inline ui-shadow ui-btn-corner-all ui-btn-icon-notext" data-date="2021-06-01" href="#" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-icon="arrow-r" data-iconpos="notext" data-theme="c" data-inline="true" title="Next Month">
                                    <span class="ui-btn-inner ui-btn-corner-all">
                                        <span class="ui-btn-text screen-reader-text">Next Month</span>
                                        <span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span>
                                    </span>
                                </a>
                                <h4 class="ui-calendar-heading">May 2021</h4>
                            </div>
                            <table class="ui-calendar-body">
                                <thead>
                                <tr>
                                    <th scope="col">Mon</th>
                                    <th scope="col">Tue</th>
                                    <th scope="col">Wed</th>
                                    <th scope="col">Thu</th>
                                    <th scope="col">Fri</th>
                                    <th scope="col">Sat</th>
                                    <th scope="col">Sun</th>
                                </tr></thead><tbody><tr><td><span class="ui-date ui-date-inactive ui-date-previousmonth" data-date="2021-04-26">26</span></td><td><span class="ui-date ui-date-inactive ui-date-previousmonth" data-date="2021-04-27">27</span></td><td><span class="ui-date ui-date-inactive ui-date-previousmonth" data-date="2021-04-28">28</span></td><td><span class="ui-date ui-date-inactive ui-date-previousmonth" data-date="2021-04-29">29</span></td><td><span class="ui-date ui-date-inactive ui-date-previousmonth" data-date="2021-04-30">30</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-01">1</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-02">2</span></td></tr><tr><td><span class="ui-date ui-date-inactive" data-date="2021-05-03">3</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-04">4</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-05">5</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-06">6</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-07">7</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-08">8</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-09">9</span></td></tr><tr><td><span class="ui-date ui-date-inactive" data-date="2021-05-10">10</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-11">11</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-12">12</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-13">13</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-14">14</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-15">15</span></td><td><span class="ui-date ui-date-inactive" data-date="2021-05-16">16</span></td></tr><tr><td><a class="ui-date ui-date-active ui-date-selected ui-corner-all ui-btn-up-c" data-date="2021-05-17" href="#">17</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-18" href="#">18</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-19" href="#">19</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-20" href="#">20</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-21" href="#">21</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-22" href="#">22</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-23" href="#">23</a></td></tr><tr><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-24" href="#">24</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-25" href="#">25</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-26" href="#">26</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-27" href="#">27</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-28" href="#">28</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-29" href="#">29</a></td><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-30" href="#">30</a></td></tr><tr><td><a class="ui-date ui-date-active ui-corner-all ui-btn-up-w" data-date="2021-05-31" href="#">31</a></td><td><a class="ui-date ui-date-active ui-date-nextmonth ui-corner-all ui-btn-up-w" data-date="2021-06-01" href="#">1</a></td><td><a class="ui-date ui-date-active ui-date-nextmonth ui-corner-all ui-btn-up-w" data-date="2021-06-02" href="#">2</a></td><td><a class="ui-date ui-date-active ui-date-nextmonth ui-corner-all ui-btn-up-w" data-date="2021-06-03" href="#">3</a></td><td><a class="ui-date ui-date-active ui-date-nextmonth ui-corner-all ui-btn-up-w" data-date="2021-06-04" href="#">4</a></td><td><a class="ui-date ui-date-active ui-date-nextmonth ui-corner-all ui-btn-up-w" data-date="2021-06-05" href="#">5</a></td><td><a class="ui-date ui-date-active ui-date-nextmonth ui-corner-all ui-btn-up-w" data-date="2021-06-06" href="#">6</a></td></tr></tbody></table></div>
                    </div>


                    <div data-role="footer" data-position="fixed" class="ui-footer ui-bar-a ui-footer-fixed slideup" role="contentinfo">
                        <a class="ui-btn-large vcenter ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-right ui-btn-up-w" data-icon="widget ui-icon-widget3arrow" data-iconpos="right" data-role="button" data-theme="w" href="#" id="optionsSubmit" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">
                Book Online
            </span></span></a>

                        <input id="sessionGuid" name="sessionGuid" type="hidden" value="71e23e84-82bc-4e75-9c02-a2f3841c1eb8">


                        <input id="widgetType" name="widgetType" type="hidden" value="restaurant">
                        <input id="rid" name="rid" type="hidden" value="417102">
                        <input id="rName" name="rName" type="hidden" value="Una Kitchen">
                        <input id="logMetricsId" name="logMetricsId" type="hidden" value="c369c942-0d84-47f3-9b45-de799ecda694">
                    </div>

            </form>-->
            <iframe src="https://booking.resdiary.com/widget/Standard/UnaKitchen/24732?" allowtransparency="true" frameborder="0" style="width:100%; border:none; max-width: 540px; height: 740px; "></iframe>
		</div>
		<!-- /.col-right -->
	</div>
	<!-- /.grid -->
</section>
