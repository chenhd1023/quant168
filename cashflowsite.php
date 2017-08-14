<?php

include("navbar.html");

$currentAge = $_POST['currentAge'];
$gender = $_POST['gender'];
$vocation = $_POST['vocation'];
$workAge = $_POST['workAge'];
$retireAge = $_POST['retireAge'];
$wage = $_POST['wage'];
$wageGrowth = $_POST['wageGrowth'];
$lifeLeft = $_POST['lifeLeft'];
$roi = $_POST['roi'];


?>

<html>
<head>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
    </script>
    <meta charset="UTF-8">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }


   

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button4 {
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
        }

        .button4:hover {background-color: #e7e7e7;}
        </style>
        
    </style>
</head>

<body>
    <style>
        .container {
            width: 85%;
        }
    </style>

    <div class="container">

        <p>基本資料</p>
        <table>
        <form method="post" action="" name="form1" id="form1" >
            <tr>
                <td>年齡</td>
                <td>
                    <select name="currentAge" id="currentAge">
                    <option value="20" <?php if($currentAge ==20) {echo "selected";}?>>20</option>
                    <option value="21" <?php if($currentAge ==21) {echo "selected";}?>>21</option>
                    <option value="23" <?php if($currentAge ==23) {echo "selected";}?>>23</option>
                    <option value="24" <?php if($currentAge ==24) {echo "selected";}?>>24</option>
                    <option value="25" <?php if($currentAge ==25) {echo "selected";}?>>25</option>
                    <option value="26" <?php if($currentAge ==26) {echo "selected";}?>>26</option>
                    <option value="27" <?php if($currentAge ==27) {echo "selected";}?>>27</option>
                    <option value="28" <?php if($currentAge ==28) {echo "selected";}?>>28</option>
                    <option value="29" <?php if($currentAge ==29) {echo "selected";}?>>29</option>
                    <option value="30" <?php if($currentAge ==30) {echo "selected";}?>>30</option>
                    <option value="31" <?php if($currentAge ==31) {echo "selected";}?>>31</option>
                    <option value="32" <?php if($currentAge ==32) {echo "selected";}?>>32</option>
                    <option value="33" <?php if($currentAge ==33) {echo "selected";}?>>33</option>
                    <option value="34" <?php if($currentAge ==34) {echo "selected";}?>>34</option>
                    <option value="35" <?php if($currentAge ==35) {echo "selected";}?>>35</option>
                    <option value="36" <?php if($currentAge ==36) {echo "selected";}?>>36</option>
                    <option value="37" <?php if($currentAge ==37) {echo "selected";}?>>37</option>
                    <option value="38" <?php if($currentAge ==38) {echo "selected";}?>>38</option>
                    <option value="39" <?php if($currentAge ==39) {echo "selected";}?>>39</option>
                    <option value="40" <?php if($currentAge ==40) {echo "selected";}?>>40</option>
                    <option value="41" <?php if($currentAge ==41) {echo "selected";}?>>41</option>
                    <option value="42" <?php if($currentAge ==42) {echo "selected";}?>>42</option>
                    <option value="43" <?php if($currentAge ==43) {echo "selected";}?>>43</option>
                    <option value="44" <?php if($currentAge ==44) {echo "selected";}?>>44</option>
                    <option value="45" <?php if($currentAge ==45) {echo "selected";}?>>45</option>
                    <option value="46" <?php if($currentAge ==46) {echo "selected";}?>>46</option>
                    <option value="47" <?php if($currentAge ==47) {echo "selected";}?>>47</option>
                    <option value="48" <?php if($currentAge ==48) {echo "selected";}?>>48</option>
                    <option value="49" <?php if($currentAge ==49) {echo "selected";}?>>49</option>
                    <option value="50" <?php if($currentAge ==50) {echo "selected";}?>>50</option>
                    <option value="51" <?php if($currentAge ==51) {echo "selected";}?>>51</option>
                    <option value="52" <?php if($currentAge ==52) {echo "selected";}?>>52</option>
                    <option value="53" <?php if($currentAge ==53) {echo "selected";}?>>53</option>
                    <option value="54" <?php if($currentAge ==54) {echo "selected";}?>>54</option>
                    <option value="55" <?php if($currentAge ==55) {echo "selected";}?>>55</option>
                    <option value="56" <?php if($currentAge ==56) {echo "selected";}?>>56</option>
                    <option value="57" <?php if($currentAge ==57) {echo "selected";}?>>57</option>
                    <option value="58" <?php if($currentAge ==58) {echo "selected";}?>>58</option>
                    <option value="59" <?php if($currentAge ==59) {echo "selected";}?>>59</option>
                    <option value="60" <?php if($currentAge ==60) {echo "selected";}?>>60</option>
                    </select>
                    歲</td>
                <td>性別</td>
                <td>
                            <input type="radio" name="gender" id="gender" value="male" <?php if($gender == "male"){echo "checked";}?> onchange="genderFunc('male')"> 男
                            <input type="radio" name="gender" id="gender" value="female" <?php if($gender == "female"){echo "checked";}?> onchange="genderFunc('female')"> 女
                            <input type="hidden" name="genders" id="genders" value="male">
                </td>
                <td>職業別</td>
                <td>
                <select name="vocation" id="vocation">
                    <option value="labor" onchange="vocationFunc('labor'); laborFunc()" <?php if($vocation == 'labor') {echo "selected";}?>>勞工</option>
                    <option value="functionary" onchange="vocationFunc('functionary'); functionaryFunc()" <?php if($vocation == 'functionary') {echo "selected";}?>>公務員</option>
                    <option value="publicta" onchange="vocationFunc('publicta'); publictaFunc()" <?php if($vocation == 'publicta') {echo "selected";}?>>公立教職</option>
                    <option value="privateta" onchange="vocationFunc('privateta'); privatetaFunc()" <?php if($vocation == 'privateta') {echo "selected";}?>>私立教職</option>
                    <option value="military" onchange="vocationFunc('military'); militaryFunc()" <?php if($vocation == 'military') {echo "selected";}?>>軍人</option>
                    <option value="farmer" onchange="vocationFunc('farmer'); farmerFunc()" <?php if($vocation == 'farmer') {echo "selected";}?>>農民</option>
                    <option value="popular" onchange="vocationFunc('popular'); popularFunc()" <?php if($vocation == 'popular') {echo "selected";}?>>一般民眾</option>
                    <option type="hidden" name="vocations" id="vocations" value="labor"></option>
                </select>
                            <!-- <input type="radio" name="vocation" id="vocation" value="labor" checked onchange="vocationFunc('labor'); laborFunc()"> 勞工
                            <input type="radio" name="vocation" id="vocation" value="functionary" onchange="vocationFunc('functionary'); functionaryFunc()"> 公務員
                            <input type="radio" name="vocation" id="vocation" value="publicta" onchange="vocationFunc('publicta'); publictaFunc()"> 公立教職
                            <input type="radio" name="vocation" id="vocation" value="privateta" onchange="vocationFunc('privateta'); privatetaFunc()"> 私立教職
                            <input type="radio" name="vocation" id="vocation" value="military" onchange="vocationFunc('military'); militaryFunc()"> 軍人
                            <input type="radio" name="vocation" id="vocation" value="farmer" onchange="vocationFunc('farmer'); farmerFunc()"> 農民
                            <input type="radio" name="vocation" id="vocation" value="popular" onchange="vocationFunc('popular'); popularFunc()"> 一般民眾
                            <input type="hidden" name="vocations" id="vocations" value="labor"> -->
                </td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>預計退休年齡</td>
                <td>
                    <select id="retireAge" onchange="lifeLeftFunc()">
                        <option value="55" <?php if($retireAge ==55) {echo "selected";}?>>55</option>
                        <option value="56" <?php if($retireAge ==56) {echo "selected";}?>>56</option>
                        <option value="57" <?php if($retireAge ==57) {echo "selected";}?>>57</option>
                        <option value="58" <?php if($retireAge ==58) {echo "selected";}?>>58</option>
                        <option value="59" <?php if($retireAge ==59) {echo "selected";}?>>59</option>
                        <option value="60" <?php if($retireAge ==60) {echo "selected";}?>>60</option>
                        <option value="61" <?php if($retireAge ==61) {echo "selected";}?>>61</option>
                        <option value="62" <?php if($retireAge ==62) {echo "selected";}?>>62</option>
                        <option value="63" <?php if($retireAge ==63) {echo "selected";}?>>63</option>
                        <option value="64" <?php if($retireAge ==64) {echo "selected";}?>>64</option>
                        <option value="65" <?php if($retireAge ==65) {echo "selected";}?>>65</option>
                        <option value="66" <?php if($retireAge ==66) {echo "selected";}?>>66</option>
                        <option value="67" <?php if($retireAge ==67) {echo "selected";}?>>67</option>
                        <option value="68" <?php if($retireAge ==68) {echo "selected";}?>>68</option>
                        <option value="69" <?php if($retireAge ==69) {echo "selected";}?>>69</option>
                        <option value="70" <?php if($retireAge ==70) {echo "selected";}?>>70</option>
                    </select>
                歲</td>
                    <td>薪資/年</td>
                    <td>
                        <input name="wage" type="number" id="wage" value=<?php echo $wage?>>
                    </td>
                    <td>合理預期10年後薪資</td>
                    <td>
                        <input name="10yrwage" type="number" id="10yrwage" value=1200000>
                    </td>
                    <td>合理預期20年後薪資</td>
                    <td>
                        <input name="20yrwage" type="number" id="20yrwage" value=2000000>
                    </td>
                    </tr>
                    <tr>
                        <td>婚姻狀況</td>
                        <td>
                            <select id="marriageState">
                                <option value="married">已婚</option>
                                <option value="planning">有計劃結婚</option>
                                <option value="none">無結婚打算</option>
                            </select>
                        </td>
                        <td>預計幾年後結婚</td>
                        <td>
                            <input name="yearsToMarriage" type="number" id="yearsToMarriage" value=5>
                        </td>
                        <td>每月開銷(不含房屋相關費用)</td>
                        <td>
                            <input name="monthlyExp" type="number" id="monthlyExp" value=20000>
                        </td>
                        <td>目前存款</td>
                        <td>
                            <input name="currentSaving" type="number" id="currentSaving" value=100000>
                        </td>
                    </tr>
                    <tr>
                        <td>投資金額</td>
                        <td>
                            <input name="investedMoney" type="number" id="investedMoney" value=1000000>
                        </td>
                        <td>投資報酬率</td>
                        <td>
                            <select id="roi" >
                                <option value="0.2" <?php if($roi ==0.2) {echo "selected";}?>>0.2%</option>
                                <option value="0.4" <?php if($roi ==0.4) {echo "selected";}?>>0.4%</option>
                                <option value="0.6" <?php if($roi ==0.6) {echo "selected";}?>>0.6%</option>
                                <option value="0.8" <?php if($roi ==0.8) {echo "selected";}?>>0.8%</option>
                                <option value="1.0" <?php if($roi ==1.0) {echo "selected";}?>>1.0%</option>
                                <option value="1.2" <?php if($roi ==1.2) {echo "selected";}?>>1.2%</option>
                                <option value="1.4" <?php if($roi ==1.4) {echo "selected";}?>>1.4%</option>
                                <option value="1.6" <?php if($roi ==1.6) {echo "selected";}?>>1.6%</option>
                                <option value="1.8" <?php if($roi ==1.8) {echo "selected";}?>>1.8%</option>
                                <option value="2.0" <?php if($roi ==2.0) {echo "selected";}?>>2.0%</option>
                                <option value="2.2" <?php if($roi ==2.2) {echo "selected";}?>>2.2%</option>
                                <option value="2.4" <?php if($roi ==2.4) {echo "selected";}?>>2.4%</option>
                                <option value="2.6" <?php if($roi ==2.6) {echo "selected";}?>>2.6%</option>
                                <option value="2.8" <?php if($roi ==2.8) {echo "selected";}?>>2.8%</option>
                                <option value="3.0" <?php if($roi ==3.0) {echo "selected";}?>>3.0%</option>
                                <option value="3.2" <?php if($roi ==3.2) {echo "selected";}?>>3.2%</option>
                                <option value="3.4" <?php if($roi ==3.4) {echo "selected";}?>>3.4%</option>
                                <option value="3.6" <?php if($roi ==3.6) {echo "selected";}?>>3.6%</option>
                                <option value="3.8" <?php if($roi ==3.8) {echo "selected";}?>>3.8%</option>
                                <option value="4.0" <?php if($roi ==4.0) {echo "selected";}?>>4.0%</option>
                                <option value="4.2" <?php if($roi ==4.2) {echo "selected";}?>>4.2%</option>
                                <option value="4.4" <?php if($roi ==4.4) {echo "selected";}?>>4.4%</option>
                                <option value="4.6" <?php if($roi ==4.6) {echo "selected";}?>>4.6%</option>
                                <option value="4.8" <?php if($roi ==4.8) {echo "selected";}?>>4.8%</option>
                                <option value="5.0" <?php if($roi ==5.0) {echo "selected";}?>>5.0%</option>
                                <option value="5.2" <?php if($roi ==5.2) {echo "selected";}?>>5.2%</option>
                                <option value="5.4" <?php if($roi ==5.4) {echo "selected";}?>>5.4%</option>
                                <option value="5.6" <?php if($roi ==5.6) {echo "selected";}?>>5.6%</option>
                                <option value="5.8" <?php if($roi ==5.8) {echo "selected";}?>>5.8%</option>
                                <option value="6.0" <?php if($roi ==6.0) {echo "selected";}?>>6.0%</option>
                                <option value="6.2" <?php if($roi ==6.2) {echo "selected";}?>>6.2%</option>
                                <option value="6.4" <?php if($roi ==6.4) {echo "selected";}?>>6.4%</option>
                                <option value="6.6" <?php if($roi ==6.6) {echo "selected";}?>>6.6%</option>
                                <option value="6.8" <?php if($roi ==6.8) {echo "selected";}?>>6.8%</option>
                                <option value="7.0" <?php if($roi ==7.0) {echo "selected";}?>>7.0%</option>
                                <option value="7.2" <?php if($roi ==7.2) {echo "selected";}?>>7.2%</option>
                                <option value="7.4" <?php if($roi ==7.4) {echo "selected";}?>>7.4%</option>
                                <option value="7.6" <?php if($roi ==7.6) {echo "selected";}?>>7.6%</option>
                                <option value="7.8" <?php if($roi ==7.8) {echo "selected";}?>>7.8%</option>
                                <option value="8.0" <?php if($roi ==8.0) {echo "selected";}?>>8.0%</option>
                                <option value="8.2" <?php if($roi ==8.2) {echo "selected";}?>>8.2%</option>
                                <option value="8.4" <?php if($roi ==8.4) {echo "selected";}?>>8.4%</option>
                                <option value="8.6" <?php if($roi ==8.6) {echo "selected";}?>>8.6%</option>
                                <option value="8.8" <?php if($roi ==8.8) {echo "selected";}?>>8.8%</option>
                                <option value="9.0" <?php if($roi ==9.0) {echo "selected";}?>>9.0%</option>
                                <option value="9.2" <?php if($roi ==9.2) {echo "selected";}?>>9.2%</option>
                                <option value="9.4" <?php if($roi ==9.4) {echo "selected";}?>>9.4%</option>
                                <option value="9.6" <?php if($roi ==9.6) {echo "selected";}?>>9.6%</option>
                                <option value="9.8" <?php if($roi ==9.8) {echo "selected";}?>>9.8%</option>
                                <option value="10.0" <?php if($roi ==10.0) {echo "selected";}?>>10.0%</option>
                            </select>
                        </td>
                        <td>貸款金額(房貸除外)</td>
                        <td>
                            <input name="loan" type="number" id="loan" value=100000>
                        </td>
                        <td>貸款剩餘年數</td>
                        <td>
                            <input name="loanLeftYear" type="number" id="loanLeftYear" value=5>
                        </td>
                    </tr>
                    </form>
                    </table>

                    <br>

                    <p>婚姻狀況(若無結婚打算請跳過此段)</p>
                    <table>
                    <form method="post" action="" name="form2" id="form2">
                    <div id="marriedForm">
                        
                        <tr>
                            <td>(配偶/預計結婚對象)目前年齡</td>
                            <td>
                                <select name="mateAge" id="mateAge">
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24" selected>24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                </select>
                            歲</td>
                            <td>(配偶/預計結婚對象)年收入</td>
                            <td>
                            <input name="mateYearRevenue" type="number" id="mateYearRevenue" value=400000>
                            </td>
                            <td>預計退休年齡</td>
                            <td>
                            <select name="mateRetireAge" id="mateRetireAge">
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60" selected>60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65">65</option>
                                <option value="66">66</option>
                                <option value="67">67</option>
                                <option value="68">68</option>
                                <option value="69">69</option>
                                <option value="70">70</option>
                            </select>
                            歲</td>
                        </tr>
                        <tr>
                            <td>目前小孩人數</td>
                            <td>
                            <input name="childrenNum" type="number" id="childrenNum" value="2">
                            </td>
                            <td>小孩年齡1</td>
                            <td>
                            <input name="child1Age" type="number" id="child1Age" value="5">
                            </td>
                            <td>小孩年齡2</td>
                            <td>
                            <input name="child2Age" type="number" id="child2Age" value="2">
                            </td>
                        </tr>
                        <tr>
                            <td>是否預計生小孩</td>
                            <td>
                                <select name="childPlan">
                                    <option value="yes">是</option>
                                    <option value="no">否</option>
                                </select>
                            </td>
                            <td>預計幾年後生小孩</td>
                            <td>
                            <input name="yearToBirth" type="number" id="yearToBirth" value="8">
                            </td>
                            <td>預計生幾個小孩</td>
                            <td>
                            <input name="howManyChildren" type="number" id="howManyChildren" value="2">
                            </td>
                        </tr>

                    </div>
            </form>
            </table>

            <br>

            <p>購屋計畫</p>
            <table>
                <form method="post" action="" name="form3" id="form3">
                <tr>
                    <td>是否有購屋計畫</td>
                    <td>
                        <select id="housePlan" name="housePlan">
                            <option value="yes">是</option>
                            <option value="no">否</option>
                            <option value="bought">已購屋</option>
                        </select>
                    </td>
                    <td>目前房屋租金/月</td>
                    <td>
                        <input name="houseRent" type="number" id="houseRent" value="15000">
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>預計幾年後購屋</td>
                    <td>
                        <input name="yearToBoughtHouse" type="number" id="yearToBoughtHouse" value="10">
                    </td>
                    <td>預計幾年後開始為購屋做準備(若希望現在就開始準備請填0)</td>
                    <td>
                        <input name="yearPlanToBoughtHouse" type="number" id="yearPlanToBoughtHouse" value="0">
                    </td>
                    <td>預購房屋現值</td>
                    <td>
                        <input name="houseCurrentValue" type="number" id="houseCurrentValue" value="15000000">
                    </td>
                </tr>
                <tr>
                    <td>貸款比例</td>
                    <td>
                        <input name="loanProportion" type="number" id="loanProportion" value="80">%
                    </td>
                    <td>貸款年期（年）</td>
                    <td>
                        <input name="loanYearSpan" type="number" id="loanYearSpan" value="20">
                    </td>
                </tr>
                <tr>
                    <td>房屋貸款金額/月</td>
                    <td>
                        <input name="houseLoanCost" type="number" id="houseLoanCost" value="60000">
                    </td>
                    <td>房屋貸款剩餘期數</td>
                    <td>
                        <input name="houseLoanYearLeft" type="number" id="houseLoanYearLeft" value="193">
                    </td>
                </tr>
                </form>
            </table>

            <button onclick="calculate()" class="button button4">計算</button>


            <p><button onclick="window.location.href='retirementpay.php'" class="button button4">回去上頁</button>(點擊即可回上一頁重新輸入)</p>

           </body>


<script type="text/javascript">

function changePage(){

    document.getElementById('form').action = "cashflowsite.php";
    document.getElementById('form').submit();

}

function genderFunc(gender) {
    document.getElementById("genders").value = gender;
}

function vocationFunc(vocation) {
    document.getElementById("vocations").value = vocation;
}


function laborFunc(){

    document.getElementById("a").innerHTML = "退休金制度";

    var b = document.getElementById("b");
    while(b.hasChildNodes()){
                b.removeChild(b.firstChild);
            }
    document.getElementById("c").innerHTML = "";
    var d = document.getElementById("d");
    while(d.hasChildNodes()){
                d.removeChild(d.firstChild);
            }

    //Create array of options to be added
    var laborArray = ["勞保年金&勞保退新制(30歲以下)","勞保年金&全新制(30歲以上)","勞保年金&選擇勞退新制(30歲以上)"];

    //Create and append select list
    var laborList = document.createElement("select");
    laborList.id = "laborInsuranceSystem";
    b.appendChild(laborList);

    //Create and append the options
    for (var i = 0; i < laborArray.length; i++) {
        var laborOption = document.createElement("option");
        laborOption.value = laborArray[i];
        laborOption.text = laborArray[i];
        laborList.appendChild(laborOption);
    }


}

function calculate(){

    var currentAge = parseInt(document.getElementById("currentAge").value);
    var retireAge = parseInt(document.getElementById("retireAge").value);
    var workAge = parseInt(document.getElementById("workAge").value);
    var gender = document.getElementById("genders").value;
    var wage = document.getElementById("wage").value;
    var wageGrowth = parseFloat(document.getElementById("wageGrowth").value) / 100;
    var roi = parseFloat(document.getElementById("roi").value) / 100;
    var lifeLeft = parseInt(document.getElementById("lifeLeft").value);
    var vocation = document.getElementById("vocations").value;
    var selfWithdraw = document.getElementById("selfWithdraw").value;

    var a = wage;
    var i = roi;
    var g = wageGrowth;
    var b = workAge;
    var c = retireAge;
    var d = lifeLeft;
    var j = selfWithdraw;


if("labor" == vocation){

    // alert(a);

    var z = c - b;
    var y1 = Math.min( a * Math.pow((1 + g), z), 45800);
    var y2 = Math.min( a * Math.pow((1 + g), z - 1), 45800);
    var y3 = Math.min( a * Math.pow((1 + g), z - 2), 45800);
    var y4 = Math.min( a * Math.pow((1 + g), z - 3), 45800);
    var y5 = Math.min( a * Math.pow((1 + g), z - 4), 45800);
    var x = (y1 + y2 + y3 + y4 + y5)/5;
    var w = Math.max(((x * z * 0.00775) + 3000), (x * z * 0.0155));
    var v = w * (1 - Math.pow( (1/(1 + (i/12))), (d*12)))/(i/12);

    // alert(y1);

    document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
    document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);


    var t = a * 0.06 * ((Math.pow((1 + (i - g)/12),(z * 12)) - 1)/((i - g)/12));
    var u = (t/12) * (i/(1-(1/Math.pow((1 + (i/12)),12*d))));

    // alert(i - g);

    document.getElementById("t").innerHTML = "$" + Math.round(t);
    document.getElementById("u").innerHTML = "$" + Math.round(u);


    var r = a * j * ((Math.pow((1 + ((i-g)/12)), z * 12) - 1)/((i - g)/12));
    var s = (r / 12) * (i/(1 - (1/(Math.pow((1 + (i/12)),12 * d)))));

    document.getElementById("r").innerHTML = "$" + Math.round(r);
    document.getElementById("s").innerHTML = "$" + Math.round(s);

    var monthSum = w + u + s;
    var totalSum = v + t + r;

    document.getElementById("monthSum").innerHTML = "$" + Math.round(monthSum);
    document.getElementById("totalSum").innerHTML = "$" + Math.round(totalSum);


}else if ("popular" == vocation) {

    var z = c - b;
    var w = Math.max(18282 * z * 0.0065 + 3628, 18282 * z * 0.013);
    var v = w * (1 - Math.pow( (1/(1 + (i/12))), (d*12)))/(i/12);

    document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
    document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);

}else if ("privateta" == vocation) {

    var privatetaInsuranceSystem2 = document.getElementById("privatetaInsuranceSystem2").value;

    var z = c - b;
    // var x1 = a * Math.pow((1 + g), (z - 9));
    // var x2 = a * Math.pow((1 + g), (z - 8));
    // var x3 = a * Math.pow((1 + g), (z - 7));
    // var x4 = a * Math.pow((1 + g), (z - 6));
    // var x5 = a * Math.pow((1 + g), (z - 5));
    // var x6 = a * Math.pow((1 + g), (z - 4));
    // var x7 = a * Math.pow((1 + g), (z - 3));
    // var x8 = a * Math.pow((1 + g), (z - 2));
    // var x9 = a * Math.pow((1 + g), (z - 1));
    // var x10 = a * Math.pow((1 + g), z);

    // var x = (x1 + x2 + x3 + x4 + x5 + x6 + x7 + x8 + x9 + x10) / 10;
    var x = privatetaInsuranceSystem2;
    var w = x * 0.013 * z;
    var v = w * (1 - Math.pow( (1/(1 + (i/12))), (d*12)))/(i/12);

    document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
    document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);

}else if ("farmer" == vocation) {

    var insuranceYear = document.getElementById("insuranceYear").value;

    if (">=15" == insuranceYear) {
        var w = 7256;
        var v = w * (1 - Math.pow( (1/(1 + (i/12))), (d*12)))/(i/12);
        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);
    }else if ("<15" == insuranceYear) {
        var w = 3628;
        var v = w * (1 - Math.pow( (1/(1 + (i/12))), d))/(i/12);
        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);
    }

}else if ("military" == vocation) {

    var militaryInsuranceSystem = document.getElementById("militaryInsuranceSystem").value;
    var militaryInsuranceSystem2 = document.getElementById("militaryInsuranceSystem2").value;


    if ("軍保&公務人員退休金新制(40歲以下)" == militaryInsuranceSystem || "軍保&公務人員退休金新制(40歲以上)" == militaryInsuranceSystem) {

        var z = c - b;
        var y = Math.min(42, z * 1.2);
        var x = militaryInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?
        var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);
 
    }else if ("軍保&軍職人員退休金含新舊制(軍人, 40歲以上)" == militaryInsuranceSystem) {

        var e = currentAge;
        var z = c - b;
        var u = Math.max(0, e - b - 2017 - 1911 - 88);

        if (u <= 10) {
            var y1 = u;
        }else if (u > 10 && u <=15) {
            var y1 = 10 + (u - 10) * 2;
        }else if (u > 15 && u <=20) {
            var y1 = 20 + (u - 15) * 3;
        }else if (u >20) {
            var y1 = 36;
        }
        var y2 = z - u;
        var y = Math.min(42, y1 + y2 * 1.2);
        var x = militaryInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?
        var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);

    }

}else if ("publicta" == vocation) {

    var publictaInsuranceSystem = document.getElementById("publictaInsuranceSystem").value;
    var publictaInsuranceSystem2 = document.getElementById("publictaInsuranceSystem2").value;


    if ("公保&公教人員退休撫卹金新制(40歲以下)" == publictaInsuranceSystem || "公保&公教人員退休撫卹金新制(40歲以上)" == publictaInsuranceSystem) {

        var z = c - b;
        var y = Math.min(42, z * 1.2);
        var x = publictaInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?
        var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);
 
    }else if ("公保&公教人員退休撫卹金新舊制(40歲以上)" == publictaInsuranceSystem) {

        var e = currentAge;
        var z = c - b;
        var u = Math.max(0, e - b - 2017 - 1911 - 88);

        if (u <= 10) {
            var y1 = u;
        }else if (u > 10 && u <=15) {
            var y1 = 10 + (u - 10) * 2;
        }else if (u > 15 && u <=20) {
            var y1 = 20 + (u - 15) * 3;
        }else if (u >20) {
            var y1 = 36;
        }
        var y2 = z - u;
        var y = Math.min(42, y1 + y2 * 1.2);
        var x = publictaInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?
        var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);
    }

}else if ("functionary" == vocation) {

    var functionaryInsuranceSystem = document.getElementById("functionaryInsuranceSystem").value;
    var functionaryInsuranceSystem2 = document.getElementById("functionaryInsuranceSystem2").value;

    if ("公保&公務人員退休金新制(40歲以下)" == functionaryInsuranceSystem) {

        var z = c - b;
        var y = Math.min(42, z * 1.2);
        var x = functionaryInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?
        var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);
 
    }else if ("公保&公務人員退休金含新舊制(40歲以上)" == functionaryInsuranceSystem || "公保&公務人員退休金含新舊制(40歲以上)" == functionaryInsuranceSystem) {

        var e = currentAge;
        var z = c - b;
        var u = Math.max(0, e - b - 2017 - 1911 - 88);

        if (u <= 10) {
            var y1 = u;
        }else if (u > 10 && u <=15) {
            var y1 = 10 + (u - 10) * 2;
        }else if (u > 15 && u <=20) {
            var y1 = 20 + (u - 15) * 3;
        }else if (u >20) {
            var y1 = 36;
        }
        var y2 = z - u;
        var y = Math.min(42, y1 + y2 * 1.2);
        var x = functionaryInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?
        var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);
    }

}else if ("farmer" == vocation) {



}

}

function lifeLeftFunc() {
        var retireAge = parseInt(document.getElementById("retireAge").value);
        var gender = document.getElementById("gender").value;
        var lifeLeft = 0;
        if (gender == "male") {
        if(retireAge==0){lifeLeft = 76;}
        else if(retireAge==1){lifeLeft = 75;}
        else if(retireAge==2){lifeLeft = 74;}
        else if(retireAge==3){lifeLeft = 73;}
        else if(retireAge==4){lifeLeft = 72;}
        else if(retireAge==5){lifeLeft = 71;}
        else if(retireAge==6){lifeLeft = 70;}
        else if(retireAge==7){lifeLeft = 69;}
        else if(retireAge==8){lifeLeft = 68;}
        else if(retireAge==9){lifeLeft = 67;}
        else if(retireAge==10){lifeLeft = 66;}
        else if(retireAge==11){lifeLeft = 66;}
        else if(retireAge==12){lifeLeft = 65;}
        else if(retireAge==13){lifeLeft = 64;}
        else if(retireAge==14){lifeLeft = 63;}
        else if(retireAge==15){lifeLeft = 62;}
        else if(retireAge==16){lifeLeft = 61;}
        else if(retireAge==17){lifeLeft = 60;}
        else if(retireAge==18){lifeLeft = 59;}
        else if(retireAge==19){lifeLeft = 58;}
        else if(retireAge==20){lifeLeft = 57;}
        else if(retireAge==21){lifeLeft = 56;}
        else if(retireAge==22){lifeLeft = 55;}
        else if(retireAge==23){lifeLeft = 54;}
        else if(retireAge==24){lifeLeft = 53;}
        else if(retireAge==25){lifeLeft = 52;}
        else if(retireAge==26){lifeLeft = 51;}
        else if(retireAge==27){lifeLeft = 50;}
        else if(retireAge==28){lifeLeft = 49;}
        else if(retireAge==29){lifeLeft = 48;}
        else if(retireAge==30){lifeLeft = 47;}
        else if(retireAge==31){lifeLeft = 46;}
        else if(retireAge==32){lifeLeft = 46;}
        else if(retireAge==33){lifeLeft = 45;}
        else if(retireAge==34){lifeLeft = 44;}
        else if(retireAge==35){lifeLeft = 43;}
        else if(retireAge==36){lifeLeft = 42;}
        else if(retireAge==37){lifeLeft = 41;}
        else if(retireAge==38){lifeLeft = 40;}
        else if(retireAge==39){lifeLeft = 39;}
        else if(retireAge==40){lifeLeft = 38;}
        else if(retireAge==41){lifeLeft = 37;}
        else if(retireAge==42){lifeLeft = 36;}
        else if(retireAge==43){lifeLeft = 35;}
        else if(retireAge==44){lifeLeft = 34;}
        else if(retireAge==45){lifeLeft = 34;}
        else if(retireAge==46){lifeLeft = 33;}
        else if(retireAge==47){lifeLeft = 32;}
        else if(retireAge==48){lifeLeft = 31;}
        else if(retireAge==49){lifeLeft = 30;}
        else if(retireAge==50){lifeLeft = 29;}
        else if(retireAge==51){lifeLeft = 28;}
        else if(retireAge==52){lifeLeft = 27;}
        else if(retireAge==53){lifeLeft = 27;}
        else if(retireAge==54){lifeLeft = 26;}
        else if(retireAge==55){lifeLeft = 25;}
        else if(retireAge==56){lifeLeft = 24;}
        else if(retireAge==57){lifeLeft = 23;}
        else if(retireAge==58){lifeLeft = 22;}
        else if(retireAge==59){lifeLeft = 22;}
        else if(retireAge==60){lifeLeft = 21;}
        else if(retireAge==61){lifeLeft = 20;}
        else if(retireAge==62){lifeLeft = 19;}
        else if(retireAge==63){lifeLeft = 19;}
        else if(retireAge==64){lifeLeft = 18;}
        else if(retireAge==65){lifeLeft = 17;}
        else if(retireAge==66){lifeLeft = 16;}
        else if(retireAge==67){lifeLeft = 16;}
        else if(retireAge==68){lifeLeft = 15;}
        else if(retireAge==69){lifeLeft = 14;}
        else if(retireAge==70){lifeLeft = 13;}
        else if(retireAge==71){lifeLeft = 13;}
        else if(retireAge==72){lifeLeft = 12;}
        else if(retireAge==73){lifeLeft = 11;}
        else if(retireAge==74){lifeLeft = 11;}
        else if(retireAge==75){lifeLeft = 10;}
        else if(retireAge==76){lifeLeft = 10;}
        else if(retireAge==77){lifeLeft = 9;}
        else if(retireAge==78){lifeLeft = 8;}
        else if(retireAge==79){lifeLeft = 8;}
        else if(retireAge==80){lifeLeft = 7;}
        else if(retireAge==81){lifeLeft = 7;}
        else if(retireAge==82){lifeLeft = 6;}
        else if(retireAge==83){lifeLeft = 6;}
        else if(retireAge==84){lifeLeft = 5;}
        else if(retireAge==85){lifeLeft = 5;}
        else if(retireAge==86){lifeLeft = 5;}
        else if(retireAge==87){lifeLeft = 4;}
        else if(retireAge==88){lifeLeft = 4;}
        else if(retireAge==89){lifeLeft = 3;}
        else if(retireAge==90){lifeLeft = 3;}
        else if(retireAge==91){lifeLeft = 3;}
        else if(retireAge==92){lifeLeft = 3;}
        else if(retireAge==93){lifeLeft = 2;}
        else if(retireAge==94){lifeLeft = 2;}
        else if(retireAge==95){lifeLeft = 2;}
        else if(retireAge==96){lifeLeft = 2;}
        else if(retireAge==97){lifeLeft = 1;}
        else if(retireAge==98){lifeLeft = 1;}
        else if(retireAge==99){lifeLeft = 1;}
        else if(retireAge==100){lifeLeft = 1;}
        else if(retireAge==101){lifeLeft = 1;}
        else if(retireAge==102){lifeLeft = 1;}
        else if(retireAge==103){lifeLeft = 1;}
        else {lifeLeft = 0;}
        } else {
        if(retireAge==0){lifeLeft = 80;}
        else if(retireAge==1){lifeLeft = 80;}
        else if(retireAge==2){lifeLeft = 79;}
        else if(retireAge==3){lifeLeft = 78;}
        else if(retireAge==4){lifeLeft = 77;}
        else if(retireAge==5){lifeLeft = 76;}
        else if(retireAge==6){lifeLeft = 75;}
        else if(retireAge==7){lifeLeft = 74;}
        else if(retireAge==8){lifeLeft = 73;}
        else if(retireAge==9){lifeLeft = 72;}
        else if(retireAge==10){lifeLeft = 71;}
        else if(retireAge==11){lifeLeft = 70;}
        else if(retireAge==12){lifeLeft = 69;}
        else if(retireAge==13){lifeLeft = 68;}
        else if(retireAge==14){lifeLeft = 67;}
        else if(retireAge==15){lifeLeft = 66;}
        else if(retireAge==16){lifeLeft = 65;}
        else if(retireAge==17){lifeLeft = 64;}
        else if(retireAge==18){lifeLeft = 63;}
        else if(retireAge==19){lifeLeft = 62;}
        else if(retireAge==20){lifeLeft = 61;}
        else if(retireAge==21){lifeLeft = 60;}
        else if(retireAge==22){lifeLeft = 59;}
        else if(retireAge==23){lifeLeft = 58;}
        else if(retireAge==24){lifeLeft = 57;}
        else if(retireAge==25){lifeLeft = 56;}
        else if(retireAge==26){lifeLeft = 55;}
        else if(retireAge==27){lifeLeft = 54;}
        else if(retireAge==28){lifeLeft = 53;}
        else if(retireAge==29){lifeLeft = 52;}
        else if(retireAge==30){lifeLeft = 51;}
        else if(retireAge==31){lifeLeft = 50;}
        else if(retireAge==32){lifeLeft = 49;}
        else if(retireAge==33){lifeLeft = 48;}
        else if(retireAge==34){lifeLeft = 47;}
        else if(retireAge==35){lifeLeft = 46;}
        else if(retireAge==36){lifeLeft = 45;}
        else if(retireAge==37){lifeLeft = 44;}
        else if(retireAge==38){lifeLeft = 43;}
        else if(retireAge==39){lifeLeft = 43;}
        else if(retireAge==40){lifeLeft = 42;}
        else if(retireAge==41){lifeLeft = 41;}
        else if(retireAge==42){lifeLeft = 40;}
        else if(retireAge==43){lifeLeft = 39;}
        else if(retireAge==44){lifeLeft = 38;}
        else if(retireAge==45){lifeLeft = 37;}
        else if(retireAge==46){lifeLeft = 36;}
        else if(retireAge==47){lifeLeft = 35;}
        else if(retireAge==48){lifeLeft = 34;}
        else if(retireAge==49){lifeLeft = 33;}
        else if(retireAge==50){lifeLeft = 32;}
        else if(retireAge==51){lifeLeft = 31;}
        else if(retireAge==52){lifeLeft = 30;}
        else if(retireAge==53){lifeLeft = 29;}
        else if(retireAge==54){lifeLeft = 28;}
        else if(retireAge==55){lifeLeft = 28;}
        else if(retireAge==56){lifeLeft = 27;}
        else if(retireAge==57){lifeLeft = 26;}
        else if(retireAge==58){lifeLeft = 25;}
        else if(retireAge==59){lifeLeft = 24;}
        else if(retireAge==60){lifeLeft = 23;}
        else if(retireAge==61){lifeLeft = 22;}
        else if(retireAge==62){lifeLeft = 21;}
        else if(retireAge==63){lifeLeft = 20;}
        else if(retireAge==64){lifeLeft = 20;}
        else if(retireAge==65){lifeLeft = 19;}
        else if(retireAge==66){lifeLeft = 18;}
        else if(retireAge==67){lifeLeft = 17;}
        else if(retireAge==68){lifeLeft = 16;}
        else if(retireAge==69){lifeLeft = 16;}
        else if(retireAge==70){lifeLeft = 15;}
        else if(retireAge==71){lifeLeft = 14;}
        else if(retireAge==72){lifeLeft = 13;}
        else if(retireAge==73){lifeLeft = 13;}
        else if(retireAge==74){lifeLeft = 12;}
        else if(retireAge==75){lifeLeft = 11;}
        else if(retireAge==76){lifeLeft = 11;}
        else if(retireAge==77){lifeLeft = 10;}
        else if(retireAge==78){lifeLeft = 9;}
        else if(retireAge==79){lifeLeft = 9;}
        else if(retireAge==80){lifeLeft = 8;}
        else if(retireAge==81){lifeLeft = 8;}
        else if(retireAge==82){lifeLeft = 7;}
        else if(retireAge==83){lifeLeft = 7;}
        else if(retireAge==84){lifeLeft = 6;}
        else if(retireAge==85){lifeLeft = 6;}
        else if(retireAge==86){lifeLeft = 5;}
        else if(retireAge==87){lifeLeft = 5;}
        else if(retireAge==88){lifeLeft = 5;}
        else if(retireAge==89){lifeLeft = 4;}
        else if(retireAge==90){lifeLeft = 4;}
        else if(retireAge==91){lifeLeft = 3;}
        else if(retireAge==92){lifeLeft = 3;}
        else if(retireAge==93){lifeLeft = 3;}
        else if(retireAge==94){lifeLeft = 3;}
        else if(retireAge==95){lifeLeft = 2;}
        else if(retireAge==96){lifeLeft = 2;}
        else if(retireAge==97){lifeLeft = 2;}
        else if(retireAge==98){lifeLeft = 2;}
        else if(retireAge==99){lifeLeft = 1;}
        else if(retireAge==100){lifeLeft = 1;}
        else if(retireAge==101){lifeLeft = 1;}
        else if(retireAge==102){lifeLeft = 1;}
        else if(retireAge==103){lifeLeft = 1;}
        else if(retireAge==104){lifeLeft = 1;}
        else if(retireAge==105){lifeLeft = 1;}
        else {lifeLeft = 0;}
        }
        document.getElementById("lifeLeft").value = lifeLeft;
        }


</script>
</html>







