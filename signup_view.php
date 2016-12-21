<!DOCTYPE html>
<html>

    <head>
	    <title>Регистрация</title>
	    <link href="../template/css/main.css" rel="stylesheet" type="text/css">
	    <script src="mainjs.js"></script>
    </head>

    <body>
      <div class="wrapper">
        <div class="section">
 			    <h2 class="headline_reg font_poiret_one" style="margin-top:120px;">Регистрация нового пользователя</h2>
          <div class="text_block">
            <p>
              Пожалуйста, заполните информацию о себе
            </p>
            
            <form name="join" id="join" method="POST">
              <div class="">
                <div class="field_headline">
                  <label for="lastname" class="">Фамилия</label>
                </div>
                <div class="field_input">
                  <input id="lastname" value="" tabindex="1" required="required" placeholder="Фамилия" class="input_data_field f_input_v2" name="lastname">
                </div>
                <div class="field_headline">
                  <label for="firstname" class="">Имя</label>
                </div>
                <div class="field_input">
                  <input id="firstname" value="" tabindex="2" required="required" placeholder="Имя" class="input_data_field f_input_v2" name="firstname">
                </div>
                <div class="field_headline">
                  <label for="patronymic" class="">Отчество</label>
                </div>
                <div class="field_input">
                  <input id="patronymic" value="" tabindex="3" placeholder="Отчество" class="input_data_field f_input_v2" name="patronymic">
                </div>
                <div class="field_headline">
                  <label for="country" class="">Страна</label>
                </div>
                <div class="">
                  <select class="field_input_select" tabindex="4" name="country" id="country">
                    <option value=""> Пожалуйста, выберите </option>
                    <option value="1"> Россия</option>
                    <option value="2"> Украина</option>
                    <option value="3"> Беларусь</option>
                    <option value="4"> Азербайджан</option>
                    <option value="5"> Армения</option>
                    <option value="6"> Грузия</option>
                    <option value="7"> Казахстан</option>
                    <option value="8"> Кыргызстан</option>
                    <option value="9"> Молдова</option>
                    <option value="10"> Таджикистан</option>
                  </select>
                </div>
                <div class="field_headline">
                  <label for="region" class="">Регион</label>
                </div>
                <div class="">
                  <select class="field_input_select" tabindex="5" name="region" id="region">
                    <option value=""> Пожалуйста, выберите </option>
						        <option value="1"> Полтавская обл.</option>
                    <option value="2"> Харьковская обл.</option>
                    <option value="3"> Киевская обл.</option>
                    <option value="4"> Львовская обл.</option>
                    <option value="5"> Запорожская обл.</option>
                  </select>
                </div>
                <div class="field_headline">
                  <label for="homecity" class="">Населенный пункт</label>
                </div>
                <div class="">
                  <select class="field_input_select" tabindex="6" name="homecity" id="homecity">
                    <option value=""> Пожалуйста, выберите </option>
						        <option value="1"> Балаклея</option>
                    <option value="2"> Изюм</option>
                    <option value="3"> Дергачи</option>
                    <option value="4"> Люботин</option>
                    <option value="5"> Харьков</option>
                  </select>
                </div>
                <div id="ziptitle" class="field_headline">
                  <label for="homepostalcode" class="">Индекс</label>
                </div>
                <div id="zipcode" class="field_input">
                  <input value="" tabindex="7" id="homepostalcode" placeholder="Индекс" class="input_data_field f_input_v2" name="homepostalcode">
                </div>
                <div class="field_headline">
                  <div class="">Ваш пол</div>
                </div>

                <div class="sex_div">
                  <div class="sex_checkbox">
                    <label class="radio_emul radio_emul_v1 radio_emul_v1_male">
                      <input id="gender_male" tabindex="8" type="radio" name="sex" class="hidden_input" value="1">
                      <span class="check_text">Мужской</span>
                    </label>
                  </div>
                  <div class="sex_checkbox" style="clear:none;">
                    <label class="radio_emul radio_emul_v1 radio_emul_v1_female" id="sexb">
                      <input id="gender_female" tabindex="9" type="radio" name="sex" class="hidden_input" value="2">
                      <span class="check_text">Женский</span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="">
                <div class="field_headline">
                  <label for="day" class="">Дата рождения:</label>
                </div>
                <div class="datebirth_div">
                  <select tabindex="10" class="field_input_select field_input_select_day" name="day" id="day">
  	                <option value="">---</option>
  	                <option value="01">1</option>
  							    <option value="02">2</option>
      							<option value="03">3</option>
      							<option value="04">4</option>
      							<option value="05">5</option>
      							<option value="06">6</option>
      							<option value="07">7</option>
      							<option value="08">8</option>
      							<option value="09">9</option>
      							<option value="10">10</option>
      							<option value="11">11</option>
      							<option value="12">12</option>
      							<option value="13">13</option>
      							<option value="14">14</option>
      							<option value="15">15</option>
      							<option value="16">16</option>
      							<option value="17">17</option>
      							<option value="18">18</option>
      							<option value="19">19</option>
      							<option value="20">20</option>
      							<option value="21">21</option>
      							<option value="22">22</option>
      							<option value="23">23</option>
      							<option value="24">24</option>
      							<option value="25">25</option>
      							<option value="26">26</option>
      							<option value="27">27</option>
      							<option value="28">28</option>
      							<option value="29">29</option>
      							<option value="30">30</option>
      							<option value="31">31</option>
                  </select>
                </div>
                <div class="datebirth_div">
                  <select tabindex="11" class="field_input_select field_input_select_month" name="month" id="month">
                    <option value="">---</option>
                    <option value="01">Январь</option>
      							<option value="02">Февраль</option>
      							<option value="03">Март</option>
      							<option value="04">Апрель</option>
      							<option value="05">Май</option>
      							<option value="06">Июнь</option>
      							<option value="07">Июль</option>
      							<option value="08">Август</option>
      							<option value="09">Сентябрь</option>
      							<option value="10">Октябрь</option>
      							<option value="11">Ноябрь</option>
      							<option value="12">Декабрь</option>
                  </select>
                </div>
                <div class="datebirth_div">
                  <select tabindex="12" class="field_input_select field_input_select_year" name="year" id="year">
                    <option value="">---</option>
                    <option value="2002">2002</option>
      							<option value="2001">2001</option>
      							<option value="2000">2000</option>
      							<option value="1999">1999</option>
      							<option value="1998">1998</option>
      							<option value="1997">1997</option>
      							<option value="1996">1996</option>
      							<option value="1995">1995</option>
      							<option value="1994">1994</option>
      							<option value="1993">1993</option>
      							<option value="1992">1992</option>
      							<option value="1991">1991</option>
      							<option value="1990">1990</option>
      							<option value="1989">1989</option>
      							<option value="1988">1988</option>
      							<option value="1987">1987</option>
      							<option value="1986">1986</option>
      							<option value="1985">1985</option>
      							<option value="1984">1984</option>
      							<option value="1983">1983</option>
      							<option value="1982">1982</option>
      							<option value="1981">1981</option>
      							<option value="1980">1980</option>
      							<option value="1979">1979</option>
      							<option value="1978">1978</option>
      							<option value="1977">1977</option>
      							<option value="1976">1976</option>
      							<option value="1975">1975</option>
      							<option value="1974">1974</option>
      							<option value="1973">1973</option>
      							<option value="1972">1972</option>
      							<option value="1971">1971</option>
      							<option value="1970">1970</option>
      							<option value="1969">1969</option>
      							<option value="1968">1968</option>
      							<option value="1967">1967</option>
      							<option value="1966">1966</option>
      							<option value="1965">1965</option>
      							<option value="1964">1964</option>
      							<option value="1963">1963</option>
      							<option value="1962">1962</option>
      							<option value="1961">1961</option>
      							<option value="1960">1960</option>
      							<option value="1959">1959</option>
      							<option value="1958">1958</option>
      							<option value="1957">1957</option>
      							<option value="1956">1956</option>
      							<option value="1955">1955</option>
      							<option value="1954">1954</option>
      							<option value="1953">1953</option>
      							<option value="1952">1952</option>
      							<option value="1951">1951</option>
      							<option value="1950">1950</option>
      							<option value="1949">1949</option>
      							<option value="1948">1948</option>
      							<option value="1947">1947</option>
      							<option value="1946">1946</option>
      							<option value="1945">1945</option>
      							<option value="1944">1944</option>
      							<option value="1943">1943</option>
      							<option value="1942">1942</option>
      							<option value="1941">1941</option>
      							<option value="1940">1940</option>
      							<option value="1939">1939</option>
      							<option value="1938">1938</option>
      							<option value="1937">1937</option>
      							<option value="1936">1936</option>
      							<option value="1935">1935</option>
      							<option value="1934">1934</option>
      							<option value="1933">1933</option>
      							<option value="1932">1932</option>
      							<option value="1931">1931</option>
      							<option value="1930">1930</option>
                  </select>
                </div>
              </div>

              <div class="">
                <div class="field_headline">
                  <label for="email" class="">E-mail</label>
                </div>
                <div class="field_input">
                  <input value="" tabindex="13" required="required" placeholder="example@google.com" class="input_data_field f_input_v2" name="email" id="email" type="email" maxlength="60">
                </div>
                <div class="field_headline">
                  <label for="email_confirm" class="">E-mail (подтверждение)</label>
                </div>
                <div class="field_input">
                  <input tabindex="14" required="required" placeholder="example@google.com" class="input_data_field f_input_v2" name="email_confirm" id="email_confirm" type="email" value="" maxlength="60">
                </div>
              </div>

              <div class="">
                <div class="field_headline">
                  <label for="password" class="">Пароль</label>
                </div>
                <div class="field_input">
                  <input tabindex="15" required="required" placeholder="********" type="password" class="input_data_field f_input_v2" name="password" id="password">
                </div>
                <div class="field_headline">
                  <label for="verify_password" class="">Пароль (подтверждение)</label>
                </div>
                <div class="field_input">
                  <input tabindex="16" required="required" placeholder="********" class="input_data_field f_input_v2" name="verify_password" id="verify_password" type="password">
                </div>
              </div>

              <div class="license_agreement">
                <label class="radio_emul check_emul_v1" id="termsb">
                  <input tabindex="17" id="Qterms" type="checkbox" class="hidden_input" name="Qtermsofagreement" value="1">
                  <span class="check_text">Я принимаю условия </span>
                </label>
                <a href="http://www.moemnenie.ru/ru/user_agreement" class="gl_link color_blue_light" target="_blank">Пользовательского соглашения</a>&nbsp;и 
                <a href="http://www.moemnenie.ru/ru/policy" class="gl_link color_blue_light" target="_blank">Политики конфиденциальности</a>&nbsp;и даю 
                <a href="http://www.moemnenie.ru/ru/personal_data" class="gl_link color_blue_light" target="_blank">согласие на обработку моих персональных данных.</a>
              </div>
                   
              <div class="capcha_div">
		      			<p class="field_headline" style="width: 100%; margin-bottom: 0px;">Пожалуйста, введите число, которое Вы видите на картинке</p>
                <div class="capcha_img">
                  <img width="90" height="45" style="cursor: pointer;" id="code" title="Нажмите, для обновления изображения" alt="Нажмите, для обновления изображения" src="../template/img/cap.jpg">
                </div>
                <div id="capt-input" class="">
                  <input tabindex="18" id="input_2" placeholder="" class="input_capcha" name="code_txt" type="tel">
                </div>
					    </div>

              <div class="redeem_controls">
                <button tabindex="19" class="btn_go_forward mod_80" type="button">Зарегистрироваться</button>
          		</div>
          	</form>
          </div>
      	</div>
      </div>
    </body>
</html>