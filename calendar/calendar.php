<!-- ForScroll-->
<div class="calendarScroll" style="height:100px; background-color:black"></div>
<div class="calendar">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-12 ">
                <div class="calendar__title">Календарь бронирования</div>
            </div>
            <div class="col-xl-8 col-lg-12 col-12">
                <div class="choose-date">Выберите дату:</div>
                <div class="table">
                    <div class="table__title">
                        <div class="prev-month"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M28.4558 14.7279H2.99998M2.99998 14.7279L12.1924 5.53553M2.99998 14.7279L12.2567 23.9846" stroke="#C90D0D" stroke-width="3"/>
									</svg>
                        </div>
                        <div class="title-text"></div>
                        <div class="title-text year-text"></div>
                        <div class="next-month"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.27244 14.7279H27.7283M27.7283 14.7279L18.5359 5.53553M27.7283 14.7279L18.4716 23.9846" stroke="#C90D0D" stroke-width="3"/>
									</svg>
                        </div>
                    </div>
                    <div class="calendar__row head">
                        <div class="head__cell">ПН.</div>
                        <div class="head__cell">ВТ.</div>
                        <div class="head__cell">СР.</div>
                        <div class="head__cell">ЧТ.</div>
                        <div class="head__cell">ПТ.</div>
                        <div class="head__cell">СБ.</div>
                        <div class="head__cell">ВС.</div>
                    </div>
                    <div class="calendar__row week-1">
                        <div class="monday calendar__cell"></div>
                        <div class="tuesday calendar__cell"></div>
                        <div class="wednesday calendar__cell"></div>
                        <div class="thursday calendar__cell"></div>
                        <div class="friday calendar__cell"></div>
                        <div class="saturday calendar__cell"></div>
                        <div class="sunday calendar__cell"></div>
                    </div>
                    <div class="calendar__row week-2">
                        <div class="monday calendar__cell"></div>
                        <div class="tuesday calendar__cell"></div>
                        <div class="wednesday calendar__cell"></div>
                        <div class="thursday calendar__cell"></div>
                        <div class="friday calendar__cell"></div>
                        <div class="saturday calendar__cell"></div>
                        <div class="sunday calendar__cell"></div>
                    </div>
                    <div class="calendar__row week-3">
                        <div class="monday calendar__cell"></div>
                        <div class="tuesday calendar__cell"></div>
                        <div class="wednesday calendar__cell"></div>
                        <div class="thursday calendar__cell"></div>
                        <div class="friday calendar__cell"></div>
                        <div class="saturday calendar__cell"></div>
                        <div class="sunday calendar__cell"></div>
                    </div>
                    <div class="calendar__row week-4">
                        <div class="monday calendar__cell"></div>
                        <div class="tuesday calendar__cell"></div>
                        <div class="wednesday calendar__cell"></div>
                        <div class="thursday calendar__cell"></div>
                        <div class="friday calendar__cell"></div>
                        <div class="saturday calendar__cell"></div>
                        <div class="sunday calendar__cell"></div>
                    </div>
                    <div class="calendar__row week-5">
                        <div class="monday calendar__cell"></div>
                        <div class="tuesday calendar__cell"></div>
                        <div class="wednesday calendar__cell"></div>
                        <div class="thursday calendar__cell"></div>
                        <div class="friday calendar__cell"></div>
                        <div class="saturday calendar__cell"></div>
                        <div class="sunday calendar__cell"></div>
                    </div>
                    <div class="calendar__row week-6">
                        <div class="monday calendar__cell"></div>
                        <div class="tuesday calendar__cell"></div>
                        <div class="wednesday calendar__cell"></div>
                        <div class="thursday calendar__cell"></div>
                        <div class="friday calendar__cell"></div>
                        <div class="saturday calendar__cell"></div>
                        <div class="sunday calendar__cell"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="order">
        <form class="order__form" action="studio/calendar/order.php" method="post">
            <div onclick="closeOrderForm()" class="order-cross"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M1.80192 0L0.000213623 1.80171L6.0061 7.8076L0.000396455 13.8133L1.80211 15.615L7.80781 9.60931L13.8133 15.6148L15.615 13.8131L9.60952 7.8076L15.6152 1.8019L13.8135 0.000192434L7.80781 6.00589L1.80192 0Z" fill="#212121"/>
				</svg>
            </div>
            <div class="order__titl-text">Забронировать</div>
            <div class="order__sub-title-text mb-16">Начало аренды:</div>
            <div class="order__time-choose">
                <div class="__select StartDay__select daySelects" data-state="">
                    <div class="__select__title StartDay__title"></div>
                    <div class="__select__content StartDay__content">
                        <input id="StartDay0" class="__select__input StartDay__input" value="01" type="radio" name="StartDay" />
                        <label for="StartDay0" tabindex="0" class="__select__label StartDay__label" data-value="1"></label>
                        <input id="StartDay1" class="__select__input StartDay__input" value="02" type="radio" name="StartDay" />
                        <label for="StartDay1" tabindex="0" class="__select__label StartDay__label" data-value="2"></label>
                        <input id="StartDay2" class="__select__input StartDay__input" value="03" type="radio" name="StartDay" />
                        <label for="StartDay2" tabindex="0" class="__select__label StartDay__label" data-value="3"></label>
                        <input id="StartDay3" class="__select__input StartDay__input" value="04" type="radio" name="StartDay" />
                        <label for="StartDay3" tabindex="0" class="__select__label StartDay__label" data-value="4"></label>
                        <input id="StartDay4" class="__select__input StartDay__input" value="05" type="radio" name="StartDay" />
                        <label for="StartDay4" tabindex="0" class="__select__label StartDay__label" data-value="5"></label>
                        <input id="StartDay5" class="__select__input StartDay__input" value="06" type="radio" name="StartDay" />
                        <label for="StartDay5" tabindex="0" class="__select__label StartDay__label" data-value="6"></label>
                        <input id="StartDay6" class="__select__input StartDay__input" value="07" type="radio" name="StartDay" />
                        <label for="StartDay6" tabindex="0" class="__select__label StartDay__label" data-value="7"></label>
                        <input id="StartDay7" class="__select__input StartDay__input" value="08" type="radio" name="StartDay" />
                        <label for="StartDay7" tabindex="0" class="__select__label StartDay__label" data-value="8"></label>
                        <input id="StartDay8" class="__select__input StartDay__input" value="09" type="radio" name="StartDay" />
                        <label for="StartDay8" tabindex="0" class="__select__label StartDay__label" data-value="9"></label>
                        <input id="StartDay9" class="__select__input StartDay__input" value="10" type="radio" name="StartDay" />
                        <label for="StartDay9" tabindex="0" class="__select__label StartDay__label" data-value="10"></label>
                        <input id="StartDay10" class="__select__input StartDay__input" value="11" type="radio" name="StartDay" />
                        <label for="StartDay10" tabindex="0" class="__select__label StartDay__label" data-value="11"></label>
                        <input id="StartDay11" class="__select__input StartDay__input" value="12" type="radio" name="StartDay" />
                        <label for="StartDay11" tabindex="0" class="__select__label StartDay__label" data-value="12"></label>
                        <input id="StartDay12" class="__select__input StartDay__input" value="13" type="radio" name="StartDay" />
                        <label for="StartDay12" tabindex="0" class="__select__label StartDay__label" data-value="13"></label>
                        <input id="StartDay13" class="__select__input StartDay__input" value="14" type="radio" name="StartDay" />
                        <label for="StartDay13" tabindex="0" class="__select__label StartDay__label" data-value="14"></label>
                        <input id="StartDay14" class="__select__input StartDay__input" value="15" type="radio" name="StartDay" />
                        <label for="StartDay14" tabindex="0" class="__select__label StartDay__label" data-value="15"></label>
                        <input id="StartDay15" class="__select__input StartDay__input" value="16" type="radio" name="StartDay" />
                        <label for="StartDay15" tabindex="0" class="__select__label StartDay__label" data-value="16"></label>
                        <input id="StartDay16" class="__select__input StartDay__input" value="17" type="radio" name="StartDay" />
                        <label for="StartDay16" tabindex="0" class="__select__label StartDay__label" data-value="17"></label>
                        <input id="StartDay17" class="__select__input StartDay__input" value="18" type="radio" name="StartDay" />
                        <label for="StartDay17" tabindex="0" class="__select__label StartDay__label" data-value="18"></label>
                        <input id="StartDay18" class="__select__input StartDay__input" value="19" type="radio" name="StartDay" />
                        <label for="StartDay18" tabindex="0" class="__select__label StartDay__label" data-value="19"></label>
                        <input id="StartDay19" class="__select__input StartDay__input" value="20" type="radio" name="StartDay" />
                        <label for="StartDay19" tabindex="0" class="__select__label StartDay__label" data-value="20"></label>
                        <input id="StartDay20" class="__select__input StartDay__input" value="21" type="radio" name="StartDay" />
                        <label for="StartDay20" tabindex="0" class="__select__label StartDay__label" data-value="21"></label>
                        <input id="StartDay21" class="__select__input StartDay__input" value="22" type="radio" name="StartDay" />
                        <label for="StartDay21" tabindex="0" class="__select__label StartDay__label" data-value="22"></label>
                        <input id="StartDay22" class="__select__input StartDay__input" value="23" type="radio" name="StartDay" />
                        <label for="StartDay22" tabindex="0" class="__select__label StartDay__label" data-value="23"></label>
                        <input id="StartDay23" class="__select__input StartDay__input" value="24" type="radio" name="StartDay" />
                        <label for="StartDay23" tabindex="0" class="__select__label StartDay__label" data-value="24"></label>
                        <input id="StartDay24" class="__select__input StartDay__input" value="25" type="radio" name="StartDay" />
                        <label for="StartDay24" tabindex="0" class="__select__label StartDay__label" data-value="25"></label>
                        <input id="StartDay25" class="__select__input StartDay__input" value="26" type="radio" name="StartDay" />
                        <label for="StartDay25" tabindex="0" class="__select__label StartDay__label" data-value="26"></label>
                        <input id="StartDay26" class="__select__input StartDay__input" value="27" type="radio" name="StartDay" />
                        <label for="StartDay26" tabindex="0" class="__select__label StartDay__label" data-value="27"></label>
                        <input id="StartDay27" class="__select__input StartDay__input" value="28" type="radio" name="StartDay" />
                        <label for="StartDay27" tabindex="0" class="__select__label StartDay__label" data-value="28"></label>
                        <input id="StartDay28" class="__select__input StartDay__input" value="29" type="radio" name="StartDay" />
                        <label for="StartDay28" tabindex="0" class="__select__label StartDay__label start_februaryday" data-value="29"></label>
                        <input id="StartDay29" class="__select__input StartDay__input" value="30" type="radio" name="StartDay" />
                        <label for="StartDay29" tabindex="0" class="__select__label StartDay__label start_februaryday" data-value="30"></label>
								<input id="StartDay30" class="__select__input StartDay__input" value="31" type="radio" name="StartDay" />
                        <label for="StartDay30" tabindex="0" class="__select__label StartDay__label start_longday start_februaryday" data-value="31"></label>
                    </div>
                </div>
                <div class="__select StartMonth__select monthSelects" data-state="">
                    <div class="__select__title StartMonth__title"></div>
                    <div class="__select__content StartMonth__content">
                        <input id="StartMonth0" class="__select__input StartMonth__input" value="01" type="radio" name="StartMonth" />
                        <label for="StartMonth0" tabindex="0" class="__select__label StartMonth__label" data-value="Январь"></label>
                        <input id="StartMonth1" class="__select__input StartMonth__input" value="02" type="radio" name="StartMonth" />
                        <label for="StartMonth1" tabindex="0" class="__select__label StartMonth__label start_februarymonth" data-value="Февраль"></label>
                        <input id="StartMonth2" class="__select__input StartMonth__input" value="03" type="radio" name="StartMonth" />
                        <label for="StartMonth2" tabindex="0" class="__select__label StartMonth__label" data-value="Март"></label>
                        <input id="StartMonth3" class="__select__input StartMonth__input" value="04" type="radio" name="StartMonth" />
                        <label for="StartMonth3" tabindex="0" class="__select__label StartMonth__label start_shortmonth" data-value="Апрель"></label>
                        <input id="StartMonth4" class="__select__input StartMonth__input" value="05" type="radio" name="StartMonth" />
                        <label for="StartMonth4" tabindex="0" class="__select__label StartMonth__label" data-value="Май"></label>
                        <input id="StartMonth5" class="__select__input StartMonth__input" value="06" type="radio" name="StartMonth" />
                        <label for="StartMonth5" tabindex="0" class="__select__label StartMonth__label start_shortmonth" data-value="Июнь"></label>
                        <input id="StartMonth6" class="__select__input StartMonth__input" value="07" type="radio" name="StartMonth" />
                        <label for="StartMonth6" tabindex="0" class="__select__label StartMonth__label" data-value="Июль"></label>
                        <input id="StartMonth7" class="__select__input StartMonth__input" value="08" type="radio" name="StartMonth" />
                        <label for="StartMonth7" tabindex="0" class="__select__label StartMonth__label" data-value="Август"></label>
                        <input id="StartMonth8" class="__select__input StartMonth__input" value="09" type="radio" name="StartMonth" />
                        <label for="StartMonth8" tabindex="0" class="__select__label StartMonth__label start_shortmonth" data-value="Сентябрь"></label>
                        <input id="StartMonth9" class="__select__input StartMonth__input" value="10" type="radio" name="StartMonth" />
                        <label for="StartMonth9" tabindex="0" class="__select__label StartMonth__label" data-value="Октябрь"></label>
                        <input id="StartMonth10" class="__select__input StartMonth__input" value="11" type="radio" name="StartMonth" />
                        <label for="StartMonth10" tabindex="0" class="__select__label StartMonth__label start_shortmonth" data-value="Ноябрь"></label>
                        <input id="StartMonth11" class="__select__input StartMonth__input" value="12" type="radio" name="StartMonth" />
                        <label for="StartMonth11" tabindex="0" class="__select__label StartMonth__label" data-value="Декабрь"></label>
                    </div>
                </div>

                <div class="order__sub-title-text">В:</div>
                <input class="defoult-height time-inputs" type="text" id="StartTime" name="time" value="15:00" style="width:50px">
            </div>
            <div class="Array-Error-text"></div>
            <div class="order__sub-title-text mb-16">Конец аренды:</div>
            <div class="order__time-choose">
                <div class="__select StopDay__select daySelects" data-state="">
                    <div class="__select__title StopDay__title" data-default="Январь"></div>
                    <div class="__select__content">
                        <input id="StopDay0" class="__select__input StopDay__input" value="01" type="radio" name="StopDay" checked />
                        <label for="StopDay0" tabindex="0" class="__select__label StopDay__label" data-value="1"></label>
                        <input id="StopDay1" class="__select__input StopDay__input" value="02" type="radio" name="StopDay" />
                        <label for="StopDay1" tabindex="0" class="__select__label StopDay__label" data-value="2"></label>
                        <input id="StopDay2" class="__select__input StopDay__input" value="03" type="radio" name="StopDay" />
                        <label for="StopDay2" tabindex="0" class="__select__label StopDay__label" data-value="3"></label>
                        <input id="StopDay3" class="__select__input StopDay__input" value="04" type="radio" name="StopDay" />
                        <label for="StopDay3" tabindex="0" class="__select__label StopDay__label" data-value="4"></label>
                        <input id="StopDay4" class="__select__input StopDay__input" value="05" type="radio" name="StopDay" />
                        <label for="StopDay4" tabindex="0" class="__select__label StopDay__label" data-value="5"></label>
                        <input id="StopDay5" class="__select__input StopDay__input" value="06" type="radio" name="StopDay" />
                        <label for="StopDay5" tabindex="0" class="__select__label StopDay__label" data-value="6"></label>
                        <input id="StopDay6" class="__select__input StopDay__input" value="07" type="radio" name="StopDay" />
                        <label for="StopDay6" tabindex="0" class="__select__label StopDay__label" data-value="7"></label>
                        <input id="StopDay7" class="__select__input StopDay__input" value="08" type="radio" name="StopDay" />
                        <label for="StopDay7" tabindex="0" class="__select__label StopDay__label" data-value="8"></label>
                        <input id="StopDay8" class="__select__input StopDay__input" value="09" type="radio" name="StopDay" />
                        <label for="StopDay8" tabindex="0" class="__select__label StopDay__label" data-value="9"></label>
                        <input id="StopDay9" class="__select__input StopDay__input" value="10" type="radio" name="StopDay" />
                        <label for="StopDay9" tabindex="0" class="__select__label StopDay__label" data-value="10"></label>
                        <input id="StopDay10" class="__select__input StopDay__input" value="11" type="radio" name="StopDay" />
                        <label for="StopDay10" tabindex="0" class="__select__label StopDay__label" data-value="11"></label>
                        <input id="StopDay11" class="__select__input StopDay__input" value="12" type="radio" name="StopDay" />
                        <label for="StopDay11" tabindex="0" class="__select__label StopDay__label" data-value="12"></label>
                        <input id="StopDay12" class="__select__input StopDay__input" value="13" type="radio" name="StopDay" />
                        <label for="StopDay12" tabindex="0" class="__select__label StopDay__label" data-value="13"></label>
                        <input id="StopDay13" class="__select__input StopDay__input" value="14" type="radio" name="StopDay" />
                        <label for="StopDay13" tabindex="0" class="__select__label StopDay__label" data-value="14"></label>
                        <input id="StopDay14" class="__select__input StopDay__input" value="15" type="radio" name="StopDay" />
                        <label for="StopDay14" tabindex="0" class="__select__label StopDay__label" data-value="15"></label>
                        <input id="StopDay15" class="__select__input StopDay__input" value="16" type="radio" name="StopDay" />
                        <label for="StopDay15" tabindex="0" class="__select__label StopDay__label" data-value="16"></label>
                        <input id="StopDay16" class="__select__input StopDay__input" value="17" type="radio" name="StopDay" />
                        <label for="StopDay16" tabindex="0" class="__select__label StopDay__label" data-value="17"></label>
                        <input id="StopDay17" class="__select__input StopDay__input" value="18" type="radio" name="StopDay" />
                        <label for="StopDay17" tabindex="0" class="__select__label StopDay__label" data-value="18"></label>
                        <input id="StopDay18" class="__select__input StopDay__input" value="19" type="radio" name="StopDay" />
                        <label for="StopDay18" tabindex="0" class="__select__label StopDay__label" data-value="19"></label>
                        <input id="StopDay19" class="__select__input StopDay__input" value="20" type="radio" name="StopDay" />
                        <label for="StopDay19" tabindex="0" class="__select__label StopDay__label" data-value="20"></label>
                        <input id="StopDay20" class="__select__input StopDay__input" value="21" type="radio" name="StopDay" />
                        <label for="StopDay20" tabindex="0" class="__select__label StopDay__label" data-value="21"></label>
                        <input id="StopDay21" class="__select__input StopDay__input" value="22" type="radio" name="StopDay" />
                        <label for="StopDay21" tabindex="0" class="__select__label StopDay__label" data-value="22"></label>
                        <input id="StopDay22" class="__select__input StopDay__input" value="23" type="radio" name="StopDay" />
                        <label for="StopDay22" tabindex="0" class="__select__label StopDay__label" data-value="23"></label>
                        <input id="StopDay23" class="__select__input StopDay__input" value="24" type="radio" name="StopDay" />
                        <label for="StopDay23" tabindex="0" class="__select__label StopDay__label" data-value="24"></label>
                        <input id="StopDay24" class="__select__input StopDay__input" value="25" type="radio" name="StopDay" />
                        <label for="StopDay24" tabindex="0" class="__select__label StopDay__label" data-value="25"></label>
                        <input id="StopDay25" class="__select__input StopDay__input" value="26" type="radio" name="StopDay" />
                        <label for="StopDay25" tabindex="0" class="__select__label StopDay__label" data-value="26"></label>
                        <input id="StopDay26" class="__select__input StopDay__input" value="27" type="radio" name="StopDay" />
                        <label for="StopDay26" tabindex="0" class="__select__label StopDay__label" data-value="27"></label>
                        <input id="StopDay27" class="__select__input StopDay__input" value="28" type="radio" name="StopDay" />
                        <label for="StopDay27" tabindex="0" class="__select__label StopDay__label" data-value="28"></label>
                        <input id="StopDay28" class="__select__input StopDay__input" value="29" type="radio" name="StopDay" />
                        <label for="StopDay28" tabindex="0" class="__select__label StopDay__label stop_februaryday" data-value="29"></label>
                        <input id="StopDay29" class="__select__input StopDay__input" value="30" type="radio" name="StopDay" />
                        <label for="StopDay29" tabindex="0" class="__select__label StopDay__label stop_februaryday" data-value="30"></label>
								<input id="StopDay30" class="__select__input StopDay__input" value="31" type="radio" name="StopDay" />
                        <label for="StopDay30" tabindex="0" class="__select__label StopDay__label stop_longday stop_februaryday" data-value="31"></label>
                    </div>
                </div>
                <div class="__select StopMonth__select monthSelects" data-state="">
                    <div class="__select__title StopMonth__title" data-default="Январь"></div>
                    <div class="__select__content StopMonth__content">
                        <input id="StopMonth0" class="__select__input StopMonth__input" value="01" type="radio" name="StopMonth" checked />
                        <label for="StopMonth0" tabindex="0" class="__select__label StopMonth__label " data-value="Январь"></label>
                        <input id="StopMonth1" class="__select__input StopMonth__input " value="02" type="radio" name="StopMonth" />
                        <label for="StopMonth1" tabindex="0" class="__select__label StopMonth__label stop_februarymonth" data-value="Февраль"></label>
                        <input id="StopMonth2" class="__select__input StopMonth__input" value="03" type="radio" name="StopMonth" />
                        <label for="StopMonth2" tabindex="0" class="__select__label StopMonth__label" data-value="Март"></label>
                        <input id="StopMonth3" class="__select__input StopMonth__input " value="04" type="radio" name="StopMonth" />
                        <label for="StopMonth3" tabindex="0" class="__select__label StopMonth__label stop_shortmonth" data-value="Апрель"></label>
                        <input id="StopMonth4" class="__select__input StopMonth__input" value="05" type="radio" name="StopMonth" />
                        <label for="StopMonth4" tabindex="0" class="__select__label StopMonth__label" data-value="Май"></label>
                        <input id="StopMonth5" class="__select__input StopMonth__input" value="06" type="radio" name="StopMonth" />
                        <label for="StopMonth5" tabindex="0" class="__select__label StopMonth__label stop_shortmonth" data-value="Июнь"></label>
                        <input id="StopMonth6" class="__select__input StopMonth__input" value="07" type="radio" name="StopMonth" />
                        <label for="StopMonth6" tabindex="0" class="__select__label StopMonth__label" data-value="Июль"></label>
                        <input id="StopMonth7" class="__select__input StopMonth__input" value="08" type="radio" name="StopMonth" />
                        <label for="StopMonth7" tabindex="0" class="__select__label StopMonth__label" data-value="Август"></label>
                        <input id="StopMonth8" class="__select__input StopMonth__input " value="09" type="radio" name="StopMonth" />
                        <label for="StopMonth8" tabindex="0" class="__select__label StopMonth__label stop_shortmonth" data-value="Сентябрь"></label>
                        <input id="StopMonth9" class="__select__input StopMonth__input" value="10" type="radio" name="StopMonth" />
                        <label for="StopMonth9" tabindex="0" class="__select__label StopMonth__label" data-value="Октябрь"></label>
                        <input id="StopMonth10" class="__select__input StopMonth__input" value="11" type="radio" name="StopMonth" />
                        <label for="StopMonth10" tabindex="0" class="__select__label StopMonth__label stop_shortmonth" data-value="Ноябрь"></label>
                        <input id="StopMonth11" class="__select__input StopMonth__input " value="12" type="radio" name="StopMonth" />
                        <label for="StopMonth11" tabindex="0" class="__select__label StopMonth__label" data-value="Декабрь"></label>
                    </div>
                </div>

                <div class="order__sub-title-text">В:</div>
                <input class="defoult-height time-inputs" id="StopTime" type="text" name="Stoptime" value="16:00" style="width:50px">
            </div>

            <div class="order__sub-title-text mb-16">Инфо</div>

            <div class="">
				<div class=" order__text">Имя</div>
                <input class="order__input defoult-height" name="name" id="Username">
                <div class="Array-Error-text" id="errorname"></div>


                <div class="order__text">Email</div>
                <input class="order__input defoult-height" name="email" id="email">
                <div class="Array-Error-text" id="errormail"></div>

                <div class="order__text">Телефон</div>
                <input class="order__input defoult-height" name="phone" id="phone">
                <div class="Array-Error-text" id="errorphone"></div>

                <div class="order__text">Комментарии (не обязательно)</div>
                <input class="order__input defoult-height" name="comm">
                <input id="StartYear" class="startYear" name="startYear">
                <input id="StopYear" class="stopYear" name="stopYear">
					 <div class="Array-Error-text" id="errorcomment"></div>
            </div>

            <button type="button" onclick="checkSubmit()" class="order__btn">Забронировать
                <svg class="ml-10 arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			  <path d="M0.999756 15L15.1112 0.888916M15.1112 0.888916H3.79145M15.1112 0.888916V12.2878"
				  stroke="#C90D0D" stroke-width="3" />
		  </svg>
            </button>

        </form>
    </div>
</div>
<?php
$host = 'localhost'; // адрес сервера
$database = 'u1225959_info_order'; // имя базы данных
$user = 'u1225959_user_up'; // имя пользователя
$password = 'G3f2Y5e'; // пароль

$occup = 0;
$day = 1;
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));


$query = "SELECT `Data` FROM Bronirovanie";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$massive = [];

if ($result) {
$rows = mysqli_num_rows($result); // количество полученных строк






for ($i = 0; $i < $rows; ++$i) {
$row = mysqli_fetch_row($result);

$massive[$i] = implode($row);

}


}
?>
    <script>
        startDate = new Date();
        startYear = startDate.getFullYear();
        const tableTitle = document.querySelector('.title-text');
        const yearTitle = document.querySelector('.year-text');
        startMonth = startDate.getMonth();
        dateArray = <?php echo json_encode($massive); ?>;
        let bookedArray = [];
        for (i = 0; i < dateArray.length; i++) {
            bookedArray.push(dateArray[i].split("-"));
        }
        startDay = 10;
        let nextMonth = startMonth;
        let nextYear = startYear;
        window.onload = printCalendar(startYear, startMonth, startDay);

        function printCalendar(year, month, day) {
            var today = new Date(year, month, day);
            yearTitle.innerHTML = `${year}`;
            // Get current day number, converting Sun. to 7
            today.setHours(-24 * (today.getDate() - 1));
            let currentFirstDay = today.getDay();
            let d = 1;
            let lengthCurrentMonth; //Для хранения количества дней в текущем месяце
            let lengthPrevMonth; //Для хранения количества дней в прошлом месяце
            let currentMonth = today.getMonth();
            if (currentMonth == 0) {
                tableTitle.innerHTML = "Январь";
                currentMonth = 12;

            }

            if (currentMonth == 1) {
                tableTitle.innerHTML = "Февраль";
            }
            if (currentMonth == 2) {
                tableTitle.innerHTML = "Март";
            }
            if (currentMonth == 3) {
                tableTitle.innerHTML = "Апрель";
            }
            if (currentMonth == 4) {
                tableTitle.innerHTML = "Май";
            }
            if (currentMonth == 5) {
                tableTitle.innerHTML = "Июнь";
            }
            if (currentMonth == 6) {
                tableTitle.innerHTML = "Июль";
            }
            if (currentMonth == 7) {
                tableTitle.innerHTML = "Август";
            }
            if (currentMonth == 8) {
                tableTitle.innerHTML = "Сентябрь";
            }
            if (currentMonth == 9) {
                tableTitle.innerHTML = "Октябрь";
            }
            if (currentMonth == 10) {
                tableTitle.innerHTML = "Ноябрь";
            }
            if (currentMonth == 11) {
                tableTitle.innerHTML = "Декабрь";
            }
            //Вычисление сколько дней в текущем месяце
            if (currentMonth == 12 || currentMonth == 2 || currentMonth == 4 || currentMonth == 6 || currentMonth == 7 || currentMonth == 9 || currentMonth == 11) {
                lengthCurrentMonth = 31;
            }
            if (currentMonth == 1) {
                lengthCurrentMonth = 28;
            }
            if (currentMonth == 3 || currentMonth == 5 || currentMonth == 8 || currentMonth == 10) {
                lengthCurrentMonth = 30;
            }

            //Вычисление сколько дней в предыдущем месяце
            if (currentMonth - 1 == 0 || currentMonth - 1 == 2 || currentMonth - 1 == 4 || currentMonth - 1 == 6 || currentMonth - 1 == 7 || currentMonth - 1 == 9 || currentMonth - 1 == 11) {
                lengthPrevMonth = 31;
            }
            if (currentMonth - 1 == 1) {
                lengthPrevMonth = 28;
            }
            if (currentMonth - 1 == 3 || currentMonth - 1 == 5 || currentMonth - 1 == 8 || currentMonth - 1 == 10) {
                lengthPrevMonth = 30;
            }

            var nextMonthBegin = false;
            for (i = 1; i < 7; i++) {
                if (i == 1) {
                    if (currentFirstDay == 0) {
                        c = 6;
                        for (; c < 7; c++) {
                            if (d < lengthCurrentMonth) {
                                document.querySelector(`.week-${i}`).children[c].innerHTML = `<div class="thisMonthDays">${d}<div class="booked__text">Занято</div><div class="booked"></div></div>`;
                                d++;
                            }
                        }
                    } else {
                        for (c = currentFirstDay - 1; c < 7; c++) {
                            if (d < lengthCurrentMonth) {
                                document.querySelector(`.week-${i}`).children[c].innerHTML = `<div class="thisMonthDays">${d}<div class="booked__text">Занято</div><div class="booked"></div></div>`;
                                d++;
                            }
                        }
                    }
                    let lastDays = lengthPrevMonth;
                    if (currentFirstDay == 0) {

                        e = 5;
                        for (; e > -1; e--) {

                            document.querySelector(`.week-${i}`).children[e].innerHTML = `<div class="prevMonthDays disabledDays">${lastDays}</div>`;
                            lastDays--;
                        }
                    }
                    for (e = currentFirstDay - 2; e > -1; e--) {

                        document.querySelector(`.week-${i}`).children[e].innerHTML = `<div class="prevMonthDays disabledDays">${lastDays}</div>`;
                        lastDays--;
                    }
                } else {
                    for (c = 0; c < 7; c++) {

                        if (d < lengthCurrentMonth + 1) {
                            if (nextMonthBegin == false) {
                                document.querySelector(`.week-${i}`).children[c].innerHTML = `<div class="thisMonthDays">${d}<div class="booked__text">Занято</div><div class="booked"></div></div>`;
                            }
                            if (nextMonthBegin == true) {
                                document.querySelector(`.week-${i}`).children[c].innerHTML = `<div class="disabledDays nextMonthDays">${d}</div>`;
                            }
                        }
                        d++;
                        if (d > lengthCurrentMonth) {
                            d = 1;
                            nextMonthBegin = true;
                        }

                    }

                }

            }

            checkDate();
           
            let CheckedDays = document.querySelectorAll('.thisMonthDays');
            let prevMonthDays =  document.querySelectorAll('.prevMonthDays');
            for (j = 0; j < prevMonthDays.length; j++) {
                if (startMonth == currentMonth){
                    prevMonthDays[j].removeAttribute('class');
                    prevMonthDays[j].setAttribute('class', 'disabledDays');
                }
            }
            for (i = 0; i < CheckedDays.length; i++) {

                if ((startMonth == currentMonth) && (Number(CheckedDays[i].firstChild.textContent) < startDate.getDate()) && (yearTitle.textContent == startYear)) {
                    CheckedDays[i].removeAttribute('class');
                    CheckedDays[i].setAttribute('class', 'disabledDays');
                    CheckedDays[i].innerHTML = `${Number(CheckedDays[i].firstChild.textContent)}`;
                }

            }
			clearTime();
        };
        btnNextMonth = document.querySelector('.next-month');
        btnPrevMonth = document.querySelector('.prev-month');

        function showNextMonth() {
            nextMonth = nextMonth + 1;
            if (nextMonth == 12) {
                nextMonth = 0;
                nextYear++;
            }

            printCalendar(nextYear, nextMonth, startDay);
        }

        function showPrevMonth() {

            if (nextYear == startYear) {
                if (nextMonth > startMonth) {
                    nextMonth = nextMonth - 1;
                    printCalendar(nextYear, nextMonth, startDay);
                }
            }
            if (nextYear > startYear) {
                if (nextMonth == 0) {
                    nextMonth = 11;
                    nextYear--;
                    printCalendar(nextYear, nextMonth, startDay);
                }
					 else{
						 nextMonth = nextMonth - 1;
               	printCalendar(nextYear, nextMonth, startDay);
					 }
					 
            }
        }
        btnNextMonth.addEventListener("click", showNextMonth, false);
        btnPrevMonth.addEventListener("click", showPrevMonth, false);

        let monthLine = document.querySelector('.table__title');
        monthLine.addEventListener('touchstart', handleTouchStart, false);
        monthLine.addEventListener('touchmove', handleTouchMove, false);
        var xDown = null;
        var yDown = null;

        function getTouches(evt) {
            return evt.touches
        }

        function handleTouchStart(evt) {
            const firstTouch = getTouches(evt)[0];
            xDown = firstTouch.clientX;
            yDown = firstTouch.clientY;
        };

        function handleTouchMove(evt) {
            if (!xDown || !yDown) {
                return;
            }

            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;

            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;

            if (Math.abs(xDiff)) {
                if (xDiff > 0) {
                    showNextMonth(); /* swipe влево */
                }
                if (xDiff < 0) {
                    showPrevMonth(); /* swipe вправо */
                }
            }

            xDown = null;
            yDown = null;
        };
        var orderWindow = document.querySelector('.order');
        table = document.querySelector('.table');
        table.onclick = function(event) {
            let target = event.target;
            // где был клик?

            if (target.classList.contains('thisMonthDays')) {

                thisMonth = tableTitle.innerHTML;
                cellDays = target.firstChild.textContent;
                orderWindow.style.display = "flex";
                startYearInput = document.querySelector('.startYear');
                stopYearInput = document.querySelector('.stopYear');
                stopYearInput.value = yearTitle.textContent;
                startYearInput.value = yearTitle.textContent;
                startMonth_labels = document.querySelectorAll('.StartMonth__label');
                startMonth_inputs = document.querySelectorAll('.StartMonth__input');
					 days30 = document.querySelector('.start_longday');
					 febDays = document.querySelectorAll('.start_februaryday');
                
                startDay_labels = document.querySelectorAll('.StartDay__label');
                startDay_inputs = document.querySelectorAll('.StartDay__input');
                for (i = 0; i < startDay_labels.length; i++) {
						 startDay_labels[i].style.display = 'flex';
                    if (startDay_labels[i].dataset.value == cellDays) {
                        clearInputs("StartDay");
                        startDay_inputs[i].setAttribute("checked", "");
                    }
                }
					 for (i = 0; i < startMonth_labels.length; i++) {
                    if (startMonth_labels[i].dataset.value == thisMonth) {

                        clearInputs("StartMonth");
                        startMonth_inputs[i].setAttribute("checked", "");
								if(startMonth_labels[i].classList.contains('start_shortmonth')==true)
								{
									days30.style.display = 'none';
								}
								if(startMonth_labels[i].classList.contains('start_februarymonth')==true)
								{

									febDays[0].style.display = 'none';
									febDays[1].style.display = 'none';
									febDays[2].style.display = 'none';
								}
                                if((startMonth_labels[i].classList.contains('start_februarymonth')==false) && (startMonth_labels[i].classList.contains('start_shortmonth')==false))
                                {

                                    days30.style.display = 'flex';
                                    febDays[0].style.display = 'flex';
									febDays[1].style.display = 'flex';
									febDays[2].style.display = 'flex';
                                }
                    }
                }
                //
                //
            }
            if (target.classList.contains('nextMonthDays')){
                thisMonth = tableTitle.innerHTML;
                cellDays = target.firstChild.textContent;
                orderWindow.style.display = "flex";

                startYearInput = document.querySelector('.startYear');
                stopYearInput = document.querySelector('.stopYear');
                stopYearInput.value = yearTitle.textContent;
                startYearInput.value = yearTitle.textContent;

                startMonth_labels = document.querySelectorAll('.StartMonth__label');
                startMonth_inputs = document.querySelectorAll('.StartMonth__input');
					 days30 = document.querySelector('.start_longday');
					 febDays = document.querySelectorAll('.start_februaryday');
                
                startDay_labels = document.querySelectorAll('.StartDay__label');
                startDay_inputs = document.querySelectorAll('.StartDay__input');
                for (i = 0; i < startDay_labels.length; i++) {
						 startDay_labels[i].style.display = 'flex';
                    if (startDay_labels[i].dataset.value == cellDays) {
                        clearInputs("StartDay");
                        startDay_inputs[i].setAttribute("checked", "");
                    }
                }
					 for (i = 0; i < startMonth_labels.length; i++) {
                    if (startMonth_labels[i].dataset.value == thisMonth) {
                        clearInputs("StartMonth");
                        let indexNextMonth = i+1;
                        if(i==11){
                            indexNextMonth = 0;
                        }
                        startMonth_inputs[indexNextMonth].setAttribute("checked", "");
                        if(startMonth_labels[indexNextMonth].classList.contains('start_shortmonth')==true)
								{
									days30.style.display = 'none';
								}
								if(startMonth_labels[indexNextMonth].classList.contains('start_februarymonth')==true)
								{

									febDays[0].style.display = 'none';
									febDays[1].style.display = 'none';
									febDays[2].style.display = 'none';
								}
                                if((startMonth_labels[indexNextMonth].classList.contains('start_februarymonth')==false) && (startMonth_labels[indexNextMonth].classList.contains('start_shortmonth')==false))
                                {

                                    days30.style.display = 'flex';
                                    febDays[0].style.display = 'flex';
									febDays[1].style.display = 'flex';
									febDays[2].style.display = 'flex';
                                }
                    }
                }
            }
            if (target.classList.contains('prevMonthDays')){
                thisMonth = tableTitle.innerHTML;
                cellDays = target.firstChild.textContent;
                orderWindow.style.display = "flex";

                startYearInput = document.querySelector('.startYear');
                stopYearInput = document.querySelector('.stopYear');
                stopYearInput.value = yearTitle.textContent;
                startYearInput.value = yearTitle.textContent;

                startMonth_labels = document.querySelectorAll('.StartMonth__label');
                startMonth_inputs = document.querySelectorAll('.StartMonth__input');
					 days30 = document.querySelector('.start_longday');
					 febDays = document.querySelectorAll('.start_februaryday');
                
                startDay_labels = document.querySelectorAll('.StartDay__label');
                startDay_inputs = document.querySelectorAll('.StartDay__input');
                for (i = 0; i < startDay_labels.length; i++) {
						 startDay_labels[i].style.display = 'flex';
                    if (startDay_labels[i].dataset.value == cellDays) {
                        clearInputs("StartDay");
                        startDay_inputs[i].setAttribute("checked", "");
                    }
                }
					 for (i = 0; i < startMonth_labels.length; i++) {
                    if (startMonth_labels[i].dataset.value == thisMonth) {
                        clearInputs("StartMonth");
                        let indexPrevMonth = i-1;
                        if(i==0){
                            indexPrevMonth = 11;
                        }
                        startMonth_inputs[indexPrevMonth].setAttribute("checked", "");
                        if(startMonth_labels[indexPrevMonth].classList.contains('start_shortmonth')==true)
								{
									days30.style.display = 'none';
								}
								if(startMonth_labels[indexPrevMonth].classList.contains('start_februarymonth')==true)
								{
									febDays[0].style.display = 'none';
									febDays[1].style.display = 'none';
									febDays[2].style.display = 'none';
								}
                                if((startMonth_labels[indexPrevMonth].classList.contains('start_februarymonth')==false) && (startMonth_labels[indexPrevMonth].classList.contains('start_shortmonth')==false))
                                {

                                    days30.style.display = 'flex';
                                    febDays[0].style.display = 'flex';
									febDays[1].style.display = 'flex';
									febDays[2].style.display = 'flex';
                                }
                    }
                }
            }
        };

function checkSubmit() {
			let Username = document.querySelector('#Username').value;
			let email = document.querySelector('#email').value;
			let phone = document.querySelector('#phone').value;
        if(Username=='Slyfoxmedia'){
            form.submit();
        }else{
			if (Username.length != 0 && email.length != 0 && phone.length != 0 && (errormail.innerHTML == "" && errorphone.innerHTML == "" && errorname.innerHTML == "")) {
			form = document.querySelector('.order__form');
            // 
            let StartMonth = document.querySelector('input[name="StartMonth"]:checked').value;
            let StartDay = document.querySelector('input[name="StartDay"]:checked').value;
            let StartTime = document.querySelector('#StartTime').value;
            let StopMonth = document.querySelector('input[name="StopMonth"]:checked').value;
            let StopDay = document.querySelector('input[name="StopDay"]:checked').value;
            let StopTime = document.querySelector('#StopTime').value;
            let StartYear = document.querySelector('#StartYear').value;
            let StopYear = document.querySelector('#StopYear').value;

            // checkInputs()
            if (checkInputs(StartDay, StartMonth, StartTime, StartYear, StopDay, StopMonth, StopTime, StopYear) == 0) {
                document.querySelector('.Array-Error-text').innerHTML = 'К сожалению, данное время уже занято';
            }
            if (checkInputs(StartDay, StartMonth, StartTime, StartYear, StopDay, StopMonth, StopTime, StopYear) == 1) {
                
            }
            if (checkInputs(StartDay, StartMonth, StartTime, StartYear, StopDay, StopMonth, StopTime, StopYear) == 2) {
                document.querySelector('#StopYear').value = Number(StopYear)+1;
                form.submit();
            }
			} else {
					errorcomment.innerHTML = 'Корректно заполните все поля';
				}
		  }
		
            
        }

function checkInputs(StartDay, StartMonth, StartTime, StartYear, StopDay, StopMonth, StopTime, StopYear) {
            let firstCheckDate = new Date(StartYear + '-' + StartMonth + '-' + StartDay + 'T' + StartTime);
            let EndCheckDate = new Date(StopYear + '-' + StopMonth + '-' + StopDay + 'T' + StopTime);
            var inputDateArray = [];
            if (firstCheckDate > EndCheckDate) {
                return 2;
            }

            function toISODate(milliseconds) {
                var date = new Date(milliseconds);
                var y = date.getFullYear()
                var m = date.getMonth() + 1;
                var d = date.getDate();
                var h = date.getHours();
                m = (m < 10) ? '0' + m : m;
                d = (d < 10) ? '0' + d : d;
                return [y, m, d, h].join('-');
            }
            var hours = Math.abs(EndCheckDate.getTime() - firstCheckDate.getTime()) / (60 * 60 * 1000);
				
            for (i = 0; i < hours; i++) {
                inputDateArray[i] = toISODate(firstCheckDate.setHours(firstCheckDate.getHours() + 1));
            }
				console.log(inputDateArray);
            for (i = 0; i < dateArray.length; i++) {
                for (j = 0; j < inputDateArray.length; j++) {
                    if (dateArray[i] == inputDateArray[j]) {
                        return 0;
                    }
                }
            }
            return 1;
        }

        function closeOrderForm() {
            orderWindow.style.display = "none";
        }

        function checkDate() {
            let currentMonth;
            if (tableTitle.innerHTML == "Январь") {
                currentMonth = "01";
            }
            if (tableTitle.innerHTML == "Февраль") {
                currentMonth = "02";
            }
            if (tableTitle.innerHTML == "Март") {
                currentMonth = "03";
            }
            if (tableTitle.innerHTML == "Апрель") {
                currentMonth = "04";
            }
            if (tableTitle.innerHTML == "Май") {
                currentMonth = "05";
            }
            if (tableTitle.innerHTML == "Июнь") {
                currentMonth = "06";
            }
            if (tableTitle.innerHTML == "Июль") {
                currentMonth = "07";
            }
            if (tableTitle.innerHTML == "Август") {
                currentMonth = "08";
            }
            if (tableTitle.innerHTML == "Сентябрь") {
                currentMonth = "09";
            }
            if (tableTitle.innerHTML == "Октябрь") {
                currentMonth = "10";
            }
            if (tableTitle.innerHTML == "Ноябрь") {
                currentMonth = "11";
            }
            if (tableTitle.innerHTML == "Декабрь") {
                currentMonth = "12";
            }


            let CheckedDays = document.querySelectorAll('.thisMonthDays');
            let CheckedYear = document.querySelector('.year-text').textContent;

            for (i = 0; i < bookedArray.length; i++) {

                for (j = 0; j < CheckedDays.length; j++) {
                    
                    var CheckedTimes = CheckedDays[j].lastElementChild;
						  CheckedTimes.classList.add
                    let CheckedDay = CheckedDays[j].firstChild.textContent;
                    if (CheckedDay == "1") {
                        CheckedDay = "01";
                    }
                    if (CheckedDay == "2") {
                        CheckedDay = "02";
                    }
                    if (CheckedDay == "3") {
                        CheckedDay = "03";
                    }
                    if (CheckedDay == "4") {
                        CheckedDay = "04";
                    }
                    if (CheckedDay == "5") {
                        CheckedDay = "05";
                    }
                    if (CheckedDay == "6") {
                        CheckedDay = "06";
                    }
                    if (CheckedDay == "7") {
                        CheckedDay = "07";
                    }
                    if (CheckedDay == "8") {
                        CheckedDay = "08";
                    }
                    if (CheckedDay == "9") {
                        CheckedDay = "09";
                    }
                    if (CheckedYear == bookedArray[i][0] && CheckedDay == bookedArray[i][2] && currentMonth == bookedArray[i][1]) {
                        if (CheckedTimes.innerHTML != "") {
                            CheckedDays[j].firstElementChild.style.display = "block";
									
                        }
								CheckedTimes.classList.add('booked__day');
                        CheckedTimes.insertAdjacentHTML('beforeend', `<div class="booked__time">${bookedArray[i][3]}</div>`);
                    }
                }
            }
        }

function clearTime() {
	let day = document.querySelectorAll('.booked__day');
    let allTimeArray = [];
    for (i = 0; i < day.length; i++) {
        if (day[i].children.length > 0) {
            let timeArray = [];
            for (j = 0; j < day[i].children.length; j++) {
                timeArray.push(Number(day[i].children[j].textContent.replace(/:00/, '')));
            }
            allTimeArray.push(timeArray);
        }
    }			
    let allSectionArray = [];
    for (i = 0; i < allTimeArray.length; i++) {
		allTimeArray[i].sort(function(a,b){ 
  		return a-b;
		}); 
        let sectionArray = [];
        let startTime = allTimeArray[i][0];
        sectionArray.push(startTime);
        for (j = 0; j < allTimeArray[i].length; j++) {
            let endTime;
            if (allTimeArray[i][j] + 1 != allTimeArray[i][j + 1]) {
                startTime = allTimeArray[i][j + 1];
                endTime = allTimeArray[i][j];
                sectionArray.push(endTime);
                if (allTimeArray[i][j + 1] != undefined) {
                    sectionArray.push(startTime);
                }
            }
        }
        allSectionArray.push(sectionArray);
    }
	 for (i = 0; i < day.length; i++) {
		day[i].innerHTML='';
	 }
	 
        for (i = 0; i < allSectionArray.length; i++) {
            for (j = 0; j < allSectionArray[i].length; j++) {
                if (j % 2 == 0) {
                    let section = document.createElement('div');
                    section.innerHTML = `${allSectionArray[i][j]}:00-${allSectionArray[i][j+1]}:00`;
                        day[i].appendChild(section);
                    
                }

            }
        }
}
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="studio/calendar/window/window.js"></script>