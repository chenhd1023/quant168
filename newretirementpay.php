<?php

include("navbar.html");

?>

<html>
<head>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
    </script>
    <meta charset="UTF-8">
    <style>
        table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

th {
    background-color: #4CAF50;
    color: white;
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

        .button5 {
            background-color: white;
            color: black;
            border: 2px solid #f4425f;
        }

        .button5:hover {background-color: #f4425f;}
        </style>

        </style>
        
</head>

<body>
    <style>
        .container {
            width: 90%;
        }
    </style>

    <div class="container">
        
        <form method="post" action="" name="form" id="form">
        <table>
        
            <tr>
                <th colspan="4" style="text-align:center;">基本資料</th>
            </tr>
            <tr>
                <td>現在年齡</td>
                <td>
                    <select name="currentAge" id="currentAge">
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
                        <option value="30"selected>30</option>
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
                <td>性別</td>
                <td>
                            <input type="radio" name="gender" id="gender" value="male" checked onchange="genderFunc('male')"> 男
                            <input type="radio" name="gender" id="gender" value="female" onchange="genderFunc('female')"> 女
                            <input type="hidden" name="genders" id="genders" value="male">
                </td>
                </tr>
                <tr>
                <td>職業別</td>
                <td>
                            <input type="radio" name="vocation" id="vocation" value="labor" checked onchange="vocationFunc('labor'); laborFunc(); initOutput()"> 勞工
                            <input type="radio" name="vocation" id="vocation" value="functionary" onchange="vocationFunc('functionary'); functionaryFunc(); initOutput()"> 公務員
                            <input type="radio" name="vocation" id="vocation" value="publicta" onchange="vocationFunc('publicta'); publictaFunc(); initOutput()"> 公立教職
                            <input type="radio" name="vocation" id="vocation" value="privateta" onchange="vocationFunc('privateta'); privatetaFunc(); initOutput()"> 私立教職
                            <input type="radio" name="vocation" id="vocation" value="military" onchange="vocationFunc('military'); militaryFunc(); initOutput()"> 軍人
                            <input type="radio" name="vocation" id="vocation" value="farmer" onchange="vocationFunc('farmer'); farmerFunc(); initOutput2()"> 農民
                            <input type="radio" name="vocation" id="vocation" value="popular" onchange="vocationFunc('popular'); popularFunc(); initOutput2()"> 一般民眾
                            <input type="hidden" name="vocations" id="vocations" value="labor">
                </td>
                <td id="a">退休金制度</td>
                <td><div id="b">
                    <select>
                        <option>勞保年金&勞保退新制(30歲以下)</option>
                        <option>勞保年金&全新制(30歲以上)</option>
                        <option>勞保年金&選擇勞退新制(30歲以上)</option>
                    </select>
                </div></td>
                <td id="c"></td>
                <td id="d"></td>
                <td id="privatetaTd"></td>
                <td id="privatetaRoi"></td>
                </tr>
                <tr>
                <td>開始工作年齡</td>
                <td>
                    <select name="workAge" id="workAge">
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
                        <option value="30" selected>30</option>
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
                <td>預計退休年齡</td>
                <td>
                    <select name="retireAge" id="retireAge" onchange="lifeLeftFunc()">
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        <option value="61">61</option>
                        <option value="62">62</option>
                        <option value="63">63</option>
                        <option value="64">64</option>
                        <option value="65" selected>65</option>
                        <option value="66">66</option>
                        <option value="67">67</option>
                        <option value="68">68</option>
                        <option value="69">69</option>
                        <option value="70">70</option>
                    </select>
                歲</td>
                <tr id="wageRow">
                        <td>目前薪資</td>
                        <td>$
                            <input name="wage" type="number" id="wage" value=40000>
                        </td>
                        <td>薪資成長率</td>
                        <td>
                            <select name="wageGrowth" id="wageGrowth" >
                            <option value="0.5">0.5%</option>
                            <option value="1.0" selected>1.0%</option>
                            <option value="1.5">1.5%</option>
                            <option value="2.0">2.0%</option>
                            <option value="2.5">2.5%</option>
                            <option value="3.0">3.0%</option>
                            <option value="3.5">3.5%</option>
                            <option value="4.0">4.0%</option>
                            <option value="4.5">4.5%</option>
                            <option value="5.0">5.0%</option>
                        </select>
                        </td>
                </tr>
                <tr>
                    <td>退休時平均餘命</td>
                    <td>
                    <input name="lifeLeft" type="number" id="lifeLeft" value=17 readonly>歲</td>
                    <td>折現率(30年期公債利率)</td>
                    <td>1.64%</td>
                    <td id="roiHeader">投資報酬率</td>
                <td id="roiOption">
                    <select name="roi" id="roi" >
                        <option value="0.2">0.2%</option>
                        <option value="0.2">0.2%</option>
                        <option value="0.4">0.4%</option>
                        <option value="0.6">0.6%</option>
                        <option value="0.8">0.8%</option>
                        <option value="1.0">1.0%</option>
                        <option value="1.2">1.2%</option>
                        <option value="1.4">1.4%</option>
                        <option value="1.6">1.6%</option>
                        <option value="1.8">1.8%</option>
                        <option value="2.0">2.0%</option>
                        <option value="2.2">2.2%</option>
                        <option value="2.4">2.4%</option>
                        <option value="2.6">2.6%</option>
                        <option value="2.8">2.8%</option>
                        <option value="3.0" selected>3.0%</option>
                        <option value="3.2">3.2%</option>
                        <option value="3.4">3.4%</option>
                        <option value="3.6">3.6%</option>
                        <option value="3.8">3.8%</option>
                        <option value="4.0">4.0%</option>
                        <option value="4.2">4.2%</option>
                        <option value="4.4">4.4%</option>
                        <option value="4.6">4.6%</option>
                        <option value="4.8">4.8%</option>
                        <option value="5.0">5.0%</option>
                        <option value="5.2">5.2%</option>
                        <option value="5.4">5.4%</option>
                        <option value="5.6">5.6%</option>
                        <option value="5.8">5.8%</option>
                        <option value="6.0">6.0%</option>
                        <option value="6.2">6.2%</option>
                        <option value="6.4">6.4%</option>
                        <option value="6.6">6.6%</option>
                        <option value="6.8">6.8%</option>
                        <option value="7.0">7.0%</option>
                        <option value="7.2">7.2%</option>
                        <option value="7.4">7.4%</option>
                        <option value="7.6">7.6%</option>
                        <option value="7.8">7.8%</option>
                        <option value="8.0">8.0%</option>
                        <option value="8.2">8.2%</option>
                        <option value="8.4">8.4%</option>
                        <option value="8.6">8.6%</option>
                        <option value="8.8">8.8%</option>
                        <option value="9.0">9.0%</option>
                        <option value="9.2">9.2%</option>
                        <option value="9.4">9.4%</option>
                        <option value="9.6">9.6%</option>
                        <option value="9.8">9.8%</option>
                        <option value="10.0">10.0%</option>
                        </select>
                    </td>
                    <td style="hidden">
                        <input name="monthlyAmountValue" type="hidden" id="monthlyAmountValue" value=0>
                    </td>
                </tr>
                <tr id="forLabor">
                    <td>雇主提撥</td>
                    <td>6%</td>
                    <td>自行提撥(0%-6%)</td>
                    <td>
                        <select name="selfWithdraw" id="selfWithdraw" >
                        <option value="0.0">0</option>
                        <option value="1.0">1</option>
                        <option value="2.0">2</option>
                        <option value="3.0">3</option>
                        <option value="4.0">4</option>
                        <option value="5.0">5</option>
                        <option value="6.0" selected>6</option>
                    </td>
                </tr>

            
            </table>
            </form>
            <button onclick="calculate()" class="button button4">計算</button>
            
            <table>
            <tr>
                <th colspan="2" style="text-align:center;">計算結果</th>
            </tr>
                <tr>
                    <td>
                        <p id="output1">勞工保險(月領)</p>
                    </td>
                    <td>
                        <p id="monthlyAmount">$0</p>
                    </td>
                </tr>
                <tr id="outputRow2">
                    <td>
                        <p id="output2">勞工退休金(一次領)</p>
                    </td>
                    <td>
                        <p id="inOnce">$0</p>
                    </td>
                </tr>
                <tr id="outputRow3">
                    <td>
                        <p id="output3">加總後每月可領</p>
                    </td>
                    <td>
                        <p id="amountAccum">$0</p>
                    </td>
                </tr>
                <tr id="outputRow4">
                    
                </tr>

            </table>
            <button onclick="changePage()" class="button button4">知道更多(點擊即可計算個人財務規劃)</button>
            <button onclick="extraOutput(1)" class="button button5">給定退休花費，每月該提存？</button>
            <button onclick="extraOutput(2)" class="button button5">給定每月提存，退休每月能花費？</button>
            <input type="hidden" name="extraOutputType" id="extraOutputType" value="1">

            <table id="extraTable" style="display: none">
            <tr>
                <th colspan="4" style="text-align:center;">估算結果</th>
            </tr>
            <tr id="retireExpenseRow">
                <td>退休後預期花費（每月）</td>
                <td><input name="retireExpense" type="number" id="retireExpense" value=10000></td>
                <td>現在每月須提撥金額</td>
                <td id="monthlySavingAmount"></td>
            </tr>
            <tr id="monthlySavingRow">
                <td>現在每月能為退休提撥金額</td>
                <td><input name="monthlySaving" type="number" id="monthlySaving" value=10000></td>
                <td>退休後每月可花費金額</td>
                <td id="monthlyExpenseAmount"></td>
            </tr>
            </table>
            <button onclick="extraCalculate()" class="button button4" id="extraButton" style="display: none">計算</button>
            
            <table id="result" style="visibility: hidden">
                    <tr>
                        <th colspan="1">年齡</th>
                        <th colspan="1">當年度提撥金額</th>
                        <th colspan="1">退休金</td>
                        <th colspan="1">退休花費</th>
                        <th colspan="1">累積應提撥金額</th>
                    </tr>
                </table>

           </body>


<script type="text/javascript">

function extraCalculate(){

    var type = document.getElementById('extraOutputType').value;

    switch(type){
        case '1':
            // alert('1');

            var retirementPay = document.getElementById('amountAccum').innerHTML;
            var B7 = parseInt(retirementPay.replace('$',''));
            var B2 = document.getElementById('currentAge').value;
            var B3 = document.getElementById('retireAge').value;
            var B4 = document.getElementById('retireExpense').value;
            var B9 = 0.0164;
            var B8 = document.getElementById('lifeLeft').value;

            var B10 = (B4 - B7) * 12 / B9 * (1 - Math.pow((1 + B9), B8 * (-1)));

            var monthlySaving = B10 * (B9/12) * (1/(Math.pow((1+(B9/12)),(B3-B2)*12)-1));
            if (monthlySaving < 0) {monthlySaving =0}
            // alert(monthlySaving);
            document.getElementById('monthlySavingAmount').innerHTML = "$" + Math.round(monthlySaving);

            var result = document.getElementById("result");
            result.style.visibility="";

            var rows = result.getElementsByTagName("tr");
            while (rows.length > 1) {
                rows[1].parentNode.removeChild(rows[1]);
            }

            var rowAge;

            for (rowAge = B2; rowAge < 106; rowAge++){
                var row = document.createElement("tr");

                row.insertCell(0).innerHTML = rowAge;

                if (rowAge < B3) {
                    row.insertCell(1).innerHTML = '$' + toThousands(Math.round(monthlySaving * 12));
                    row.insertCell(2).innerHTML = '$0';
                    row.insertCell(3).innerHTML = '$0';
                } else if (rowAge >= B3) {
                    row.insertCell(1).innerHTML = '$0';
                    row.insertCell(2).innerHTML = '$' + toThousands(Math.round(B7 * 12));
                    row.insertCell(3).innerHTML = '$' + toThousands(Math.round(B4 * 12));
                }
                
                if (rowAge == B2) {
                    row.insertCell(4).innerHTML = '$' + toThousands(Math.round(monthlySaving * 12));
                } else if (rowAge > B2 && rowAge < B3) {
                    var accumMonthlySaving = Math.round(monthlySaving * 12) * ((Math.pow(1.0164,(rowAge - B2 + 1))-1)/0.0164);
                    row.insertCell(4).innerHTML = '$' + toThousands(accumMonthlySaving);
                } else if (rowAge >= B3) {
                    var accumMonthlySaving = Math.round((accumMonthlySaving + Math.round(B7 * 12) - Math.round(B4 * 12))*(1.0164));
                    row.insertCell(4).innerHTML = '$' + toThousands(accumMonthlySaving);
                }

                result.appendChild(row);
            }

            break;

        case '2':
            // alert('2');

            var retirementPay = document.getElementById('amountAccum').innerHTML;
            var B7 = parseInt(retirementPay.replace('$',''));
            var B2 = document.getElementById('currentAge').value;
            var B3 = document.getElementById('retireAge').value;
            var B4 = document.getElementById('monthlySaving').value;
            var B9 = 0.0164;
            var B8 = document.getElementById('lifeLeft').value;

            var B10 = B4 * ((Math.pow((1+(B9/12)),(12*(B3-B2)))-1)/(B9/12));

            var monthlyDominate = B10 * (B9/12) * (1/(1-Math.pow((1+(B9/12)),(-B8 * 12)))) + B7;
            if (monthlyDominate < 0) {monthlyDominate = 0}

            document.getElementById('monthlyExpenseAmount').innerHTML = "$" + Math.round(monthlyDominate);

            var result = document.getElementById("result");
            result.style.visibility="";

            var rows = result.getElementsByTagName("tr");
            while (rows.length > 1) {
                rows[1].parentNode.removeChild(rows[1]);
            }

            var rowAge;

            for (rowAge = B2; rowAge < 106; rowAge++){
                var row = document.createElement("tr");

                row.insertCell(0).innerHTML = rowAge;

                if (rowAge < B3) {
                    row.insertCell(1).innerHTML = '$' + toThousands(Math.round(B4 * 12));
                    row.insertCell(2).innerHTML = '$0';
                    row.insertCell(3).innerHTML = '$0';
                } else if (rowAge >= B3) {
                    row.insertCell(1).innerHTML = '$0';
                    row.insertCell(2).innerHTML = '$' + toThousands(Math.round(B7 * 12));
                    row.insertCell(3).innerHTML = '$' + toThousands(Math.round(monthlyDominate * 12));
                }
                
                if (rowAge == B2) {
                    row.insertCell(4).innerHTML = '$' + toThousands(Math.round(B4 * 12));
                } else if (rowAge > B2 && rowAge < B3) {
                    var accumMonthlySaving = Math.round(B4 * 12) * ((Math.pow(1.0164,(rowAge - B2 + 1))-1)/0.0164);
                    row.insertCell(4).innerHTML = '$' + toThousands(accumMonthlySaving);
                } else if (rowAge >= B3) {
                    var accumMonthlySaving = Math.round((accumMonthlySaving + Math.round(B7 * 12) - Math.round(B4 * 12))*(1.0164));
                    row.insertCell(4).innerHTML = '$' + toThousands(accumMonthlySaving);
                }

                result.appendChild(row);
            }

            break;
    }

    

    


}

function extraOutput(options){

    switch(options){
        case 1:
            document.getElementById('extraTable').style.display = "table";
            document.getElementById('extraButton').style.display = "block";
            document.getElementById('retireExpenseRow').style.display = "table-row";
            document.getElementById('monthlySavingRow').style.display = "none";
            document.getElementById('extraOutputType').value = "1";
            break;
        case 2:
            document.getElementById('extraTable').style.display = "table";
            document.getElementById('extraButton').style.display = "block";
            document.getElementById('retireExpenseRow').style.display = "none";
            document.getElementById('monthlySavingRow').style.display = "table-row";
            document.getElementById('extraOutputType').value = "2";
            break;
    }
}

function toThousands (num) {
    return num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

function changePage(){

    // alert(document.getElementById("monthlyAmountValue").value);
    document.getElementById('form').action = "cashflowsite.php";
    document.getElementById('form').submit();

}

function genderFunc(gender) {
    document.getElementById("genders").value = gender;
}

function vocationFunc(vocation) {
    document.getElementById("vocations").value = vocation;
    // alert(vocation);

    

}

function initOutput(){

    document.getElementById("monthlyAmount").innerHTML = "$0";
    document.getElementById("inOnce").innerHTML = "$0";
    document.getElementById("amountAccum").innerHTML = "$0";
}

function initOutput2(){
    document.getElementById("monthlyAmount").innerHTML = "$0";
}

function laborFunc(){

    document.getElementById("privatetaTd").innerHTML = "";
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

    // var output = document.getElementById("output");
    // while(output.hasChildNodes()){
    //             output.removeChild(output.firstChild);
    //         }

    var militaryRow = document.getElementById("outputRow4");
    while(militaryRow.hasChildNodes()){
                militaryRow.removeChild(militaryRow.firstChild);
            }

    var privatetaRoi = document.getElementById("privatetaRoi");
    while(privatetaRoi.hasChildNodes()){
                privatetaRoi.removeChild(privatetaRoi.firstChild);
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

    var laborRow = document.getElementById("forLabor");
    laborRow.style.display="table-row";


    var outputRow2 = document.getElementById("outputRow2");
    while(!outputRow2.hasChildNodes()){
                var outputRow2Td1 = outputRow2.insertCell();
                outputRow2Td1.id = "output2";
                var outputRow2Td2 = outputRow2.insertCell();
                outputRow2Td2.id = "inOnce";

                var outputRow3 = document.getElementById("outputRow3");
                var outputRow3Td1 = outputRow3.insertCell();
                outputRow3Td1.id = "output3";
                var outputRow3Td2 = outputRow3.insertCell();
                outputRow3Td2.id = "amountAccum";
            }

    document.getElementById("output1").innerHTML = "勞工保險(月領)";
    document.getElementById("output2").innerHTML = "勞工退休金(一次領)";
    document.getElementById("output3").innerHTML = "加總後每月可領";

    var wageRow = document.getElementById("wageRow");
    wageRow.style.display="table-row";

    var roiHeader = document.getElementById("roiHeader");
    roiHeader.style.display="table-cell";

    var roiOption = document.getElementById("roiOption");
    roiOption.style.display="table-cell";


}

function functionaryFunc(){

    document.getElementById("privatetaTd").innerHTML = "";
    document.getElementById("a").innerHTML = "退休金制度";
    document.getElementById("c").innerHTML = "預估退休前最後投保本俸(月)";


    var b = document.getElementById("b");
    while(b.hasChildNodes()){
                b.removeChild(b.firstChild);
            }

    var d = document.getElementById("d");
    while(d.hasChildNodes()){
        d.removeChild(d.firstChild);
    }

    // var output = document.getElementById("output");
    // while(output.hasChildNodes()){
    //             output.removeChild(output.firstChild);
    //         }

    var militaryRow = document.getElementById("outputRow4");
    while(militaryRow.hasChildNodes()){
                militaryRow.removeChild(militaryRow.firstChild);
            }

    var privatetaRoi = document.getElementById("privatetaRoi");
    while(privatetaRoi.hasChildNodes()){
                privatetaRoi.removeChild(privatetaRoi.firstChild);
            }


    var laborRow = document.getElementById("forLabor");
    laborRow.style.display="none";

    //Create array of options to be added
    var functionaryArray = ["公保&公務人員退休金新制(40歲以下)","公保&公務人員退休金含新舊制(40歲以上)，退撫舊制年資=0","公保&公務人員退休金含新舊制(40歲以上)"];

    var functionaryArray2 = [53075, 52410 ,51745 ,49745 ,48415 ,47080 ,45750 ,44420 ,43085 ,41755 ,40420 ,39090 ,36425 ,35425 ,34430 ,33430 ,32430 ,31430 ,30430 ,29435 ,28435 ,27435 ,26435 ,25435 ,24440 ,23770 ,23105 ,22440 ,21775 ,21110 ,20440 ,19775 ,19110 ,18445 ,17780 ,17110 ,16445 ,15780 ,15115 ,14450 ,13980 ,13510 ,13040 ,12570 ,12105 ,11635 ];

    //Create and append select list
    var functionaryList = document.createElement("select");
    functionaryList.id = "functionaryInsuranceSystem";
    b.appendChild(functionaryList);

    var functionaryList2 = document.createElement("select");
    functionaryList2.id = "functionaryInsuranceSystem2";
    d.appendChild(functionaryList2);

    //Create and append the options
    for (var i = 0; i < functionaryArray.length; i++) {
        var functionaryOption = document.createElement("option");
        functionaryOption.value = functionaryArray[i];
        functionaryOption.text = functionaryArray[i];
        functionaryList.appendChild(functionaryOption);
    }

    for (var i = 0; i < functionaryArray2.length; i++) {
        var functionaryOption2 = document.createElement("option");
        functionaryOption2.value = functionaryArray2[i];
        functionaryOption2.text = functionaryArray2[i];
        functionaryList2.appendChild(functionaryOption2);
    }


    // var td = output.insertCell();
    // td.appendChild(document.createTextNode("退休時可領一次金"));
    // var td2 = output.insertCell();
    // td2.appendChild(document.createTextNode("$0"));
    // td2.id = "lifeGet";


    var outputRow2 = document.getElementById("outputRow2");
    while(!outputRow2.hasChildNodes()){
                var outputRow2Td1 = outputRow2.insertCell();
                outputRow2Td1.id = "output2";
                var outputRow2Td2 = outputRow2.insertCell();
                outputRow2Td2.id = "inOnce";

                var outputRow3 = document.getElementById("outputRow3");
                var outputRow3Td1 = outputRow3.insertCell();
                outputRow3Td1.id = "output3";
                var outputRow3Td2 = outputRow3.insertCell();
                outputRow3Td2.id = "amountAccum";
            }


    document.getElementById("output1").innerHTML = "公務人員退休撫卹基金(月領)";
    document.getElementById("output2").innerHTML = "公務人員保險(一次金)";
    document.getElementById("output3").innerHTML = "加總後每月可領";


    var wageRow = document.getElementById("wageRow");
    wageRow.style.display="none";

    var roiOption = document.getElementById("roiOption");
    roiOption.style.display="none";

    var roiHeader = document.getElementById("roiHeader");
    roiHeader.style.display="none";

}

function publictaFunc(){

    document.getElementById("privatetaTd").innerHTML = "";
    document.getElementById("a").innerHTML = "退休金制度";
    document.getElementById("c").innerHTML = "預估退休前最後投保本俸(月)";


    var b = document.getElementById("b");
    while(b.hasChildNodes()){
                b.removeChild(b.firstChild);
            }

    var d = document.getElementById("d");
    while(d.hasChildNodes()){
                d.removeChild(d.firstChild);
            }

    // var output = document.getElementById("output");
    // while(output.hasChildNodes()){
    //             output.removeChild(output.firstChild);
    //         }

    var militaryRow = document.getElementById("outputRow4");
    while(militaryRow.hasChildNodes()){
                militaryRow.removeChild(militaryRow.firstChild);
            }

    var privatetaRoi = document.getElementById("privatetaRoi");
    while(privatetaRoi.hasChildNodes()){
                privatetaRoi.removeChild(privatetaRoi.firstChild);
            }

    var laborRow = document.getElementById("forLabor");
    laborRow.style.display="none";

    //Create array of options to be added
    var publictaArray = ["公保&公教人員退休撫卹金新制(40歲以下)","公保&公教人員退休撫卹金新制(40歲以上)","公保&公教人員退休撫卹金新舊制(40歲以上)"];
    
    var publictaArray2 = [53075, 52410 ,51745 ,49745 ,48415 ,47080 ,45750 ,44420 ,43085 ,41755 ,40420 ,39090 ,36425 ,35425 ,34430 ,33430 ,32430 ,31430 ,30430 ,29435 ,28435 ,27435 ,26435 ,25435 ,24440 ,23770 ,23105 ,22440 ,21775 ,21110 ,20440 ,19775 ,19110 ,18445 ,17780 ,17110 ,16445 ,15780 ,15115 ,14450 ,13980 ,13510 ,13040 ,12570 ,12105 ,11635 ,11610 ,11235 ,10865 ,10490 ];


    //Create and append select list
    var publictaList = document.createElement("select");
    publictaList.id = "publictaInsuranceSystem";
    b.appendChild(publictaList);

    var publictaList2 = document.createElement("select");
    publictaList2.id = "publictaInsuranceSystem2";
    d.appendChild(publictaList2);

    //Create and append the options
    for (var i = 0; i < publictaArray.length; i++) {
        var publictaOption = document.createElement("option");
        publictaOption.value = publictaArray[i];
        publictaOption.text = publictaArray[i];
        publictaList.appendChild(publictaOption);
    }

    for (var i = 0; i < publictaArray2.length; i++) {
        var publictaOption2 = document.createElement("option");
        publictaOption2.value = publictaArray2[i];
        publictaOption2.text = publictaArray2[i];
        publictaList2.appendChild(publictaOption2);
    }


    // var td = output.insertCell();
    // td.appendChild(document.createTextNode("退休時可領一次金"));
    // var td2 = output.insertCell();
    // td2.appendChild(document.createTextNode("$0"));
    // td2.id = "lifeGet";


    var outputRow2 = document.getElementById("outputRow2");
    while(!outputRow2.hasChildNodes()){
                var outputRow2Td1 = outputRow2.insertCell();
                outputRow2Td1.id = "output2";
                var outputRow2Td2 = outputRow2.insertCell();
                outputRow2Td2.id = "inOnce";

                var outputRow3 = document.getElementById("outputRow3");
                var outputRow3Td1 = outputRow3.insertCell();
                outputRow3Td1.id = "output3";
                var outputRow3Td2 = outputRow3.insertCell();
                outputRow3Td2.id = "amountAccum";
            }


    document.getElementById("output1").innerHTML = "公教人員退休撫卹基金(月領)";
    document.getElementById("output2").innerHTML = "公教人員保險(一次金)";
    document.getElementById("output3").innerHTML = "加總後每月可領";


    var wageRow = document.getElementById("wageRow");
    wageRow.style.display="none";

    var roiOption = document.getElementById("roiOption");
    roiOption.style.display="none";

    var roiHeader = document.getElementById("roiHeader");
    roiHeader.style.display="none";



}


function privatetaFunc(){

    document.getElementById("a").innerHTML = "退休金制度";
    document.getElementById("c").innerHTML = "預估退保前10年平均保俸";
    document.getElementById("privatetaTd").innerHTML = "預估私校退撫報酬率";



    var b = document.getElementById("b");
    while(b.hasChildNodes()){
                b.removeChild(b.firstChild);
            }

    var d = document.getElementById("d");
    while(d.hasChildNodes()){
                d.removeChild(d.firstChild);
            }

    // var output = document.getElementById("output");
    // while(output.hasChildNodes()){
    //             output.removeChild(output.firstChild);
    //         }

    var militaryRow = document.getElementById("outputRow4");
    while(militaryRow.hasChildNodes()){
                militaryRow.removeChild(militaryRow.firstChild);
            }


    var privatetaRoi = document.getElementById("privatetaRoi");
    while(privatetaRoi.hasChildNodes()){
                privatetaRoi.removeChild(privatetaRoi.firstChild);
            }

    var laborRow = document.getElementById("forLabor");
    laborRow.style.display="none";


    //Create array of options to be added
    var privatetaArray = ["公保&私校退撫新制(25歲以下)","公保&私校退撫新制(25歲以下)","公保&私校退撫舊制(25歲以上)"];

    var privatetaArray2 = [53075, 52410 ,51745 ,49745 ,48415 ,47080 ,45750 ,44420 ,43085 ,41755 ,40420 ,39090 ,36425 ,35425 ,34430 ,33430 ,32430 ,31430 ,30430 ,29435 ,28435 ,27435 ,26435 ,25435 ,24440 ,23770 ,23105 ,22440 ,21775 ,21110 ,20440 ,19775 ,19110 ,18445 ,17780 ,17110 ,16445 ,15780 ,15115 ,14450 ,13980 ,13510 ,13040 ,12570 ,12105 ,11635];

    var privatetaArray3 = [0.02, 0.04, 0.06];

    //Create and append select list
    var privatetaList = document.createElement("select");
    privatetaList.id = "privatetaInsuranceSystem";
    b.appendChild(privatetaList);

    var privatetaList2 = document.createElement("select");
    privatetaList2.id = "privatetaInsuranceSystem2";
    d.appendChild(privatetaList2);

    var privatetaList3 = document.createElement("select");
    privatetaList3.id = "r";
    privatetaRoi.appendChild(privatetaList3);

    //Create and append the options
    for (var i = 0; i < privatetaArray.length; i++) {
        var privatetaOption = document.createElement("option");
        privatetaOption.value = privatetaArray[i];
        privatetaOption.text = privatetaArray[i];
        privatetaList.appendChild(privatetaOption);
    }

    for (var i = 0; i < privatetaArray2.length; i++) {
        var privatetaOption2 = document.createElement("option");
        privatetaOption2.value = privatetaArray2[i];
        privatetaOption2.text = privatetaArray2[i];
        privatetaList2.appendChild(privatetaOption2);
    }

    for (var i = 0; i < privatetaArray3.length; i++) {
        var privatetaOption3 = document.createElement("option");
        privatetaOption3.value = privatetaArray3[i];
        privatetaOption3.text = privatetaArray3[i];
        privatetaList3.appendChild(privatetaOption3);
    }


    // var td = output.insertCell();
    // td.appendChild(document.createTextNode("退休時可領一次金"));
    // var td2 = output.insertCell();
    // td2.appendChild(document.createTextNode("$0"));
    // td2.id = "lifeGet";


    var outputRow2 = document.getElementById("outputRow2");
    while(!outputRow2.hasChildNodes()){
                var outputRow2Td1 = outputRow2.insertCell();
                outputRow2Td1.id = "output2";
                var outputRow2Td2 = outputRow2.insertCell();
                outputRow2Td2.id = "inOnce";

                var outputRow3 = document.getElementById("outputRow3");
                var outputRow3Td1 = outputRow3.insertCell();
                outputRow3Td1.id = "output3";
                var outputRow3Td2 = outputRow3.insertCell();
                outputRow3Td2.id = "amountAccum";
            }


    document.getElementById("output1").innerHTML = "公教人員保險(月領)";
    document.getElementById("output2").innerHTML = "私校退休撫卹基金(一次金)";
    document.getElementById("output3").innerHTML = "加總後每月可領";


    var wageRow = document.getElementById("wageRow");
    wageRow.style.display="none";

    var roiOption = document.getElementById("roiOption");
    roiOption.style.display="none";

    var roiHeader = document.getElementById("roiHeader");
    roiHeader.style.display="none";


}

function militaryFunc(){

    document.getElementById("privatetaTd").innerHTML = "";
    document.getElementById("a").innerHTML = "退休金制度";
    document.getElementById("c").innerHTML = "預估退休前最後投保本俸(月)";


    var b = document.getElementById("b");
    while(b.hasChildNodes()){
                b.removeChild(b.firstChild);
            }
    var d = document.getElementById("d");
    while(d.hasChildNodes()){
                d.removeChild(d.firstChild);
            }

    var militaryRow = document.getElementById("outputRow4");
    while(militaryRow.hasChildNodes()){
                militaryRow.removeChild(militaryRow.firstChild);
            }

    var privatetaRoi = document.getElementById("privatetaRoi");
    while(privatetaRoi.hasChildNodes()){
                privatetaRoi.removeChild(privatetaRoi.firstChild);
            }

    var laborRow = document.getElementById("forLabor");
    laborRow.style.display="none";

    //Create array of options to be added
    var militaryArray = ["軍保&公務人員退休金新制(40歲以下)","軍保&公務人員退休金新制(40歲以上)","軍保&軍職人員退休金含新舊制(軍人, 40歲以上)"];
    var militaryArray2 = [9455, 10180 ,10905 ,11635 ,12105 ,12570 ,13040 ,13510 ,13980 ,14450 ,15115 ,15780 ,16445 ,17110 ,17780 ,18445 ,19110 ,19775 ,20440 ,21110 ,21775 ,22440 ,23105 ,23770 ,24440 ,25105 ,25770 ,26105 ,26435 ,27100 ,27770 ,28100 ,28435 ,29100 ,29435 ,29765 ,30100 ,30430 ,31100 ,31430 ,31765 ,32095 ,32430 ,33095 ,33430 ,33760 ,34095 ,34430 ,35095 ,35425 ,35760 ,36095 ,36425 ,37090 ,37425 ,37760 ,38425 ,39090 ,39425 ,40420 ,41420 ,41755 ,42420 ,43085 ,43420 ,44420 ,45750 ,46415 ,47080 ,47750 ,48415 ,49080 ,49745 ,50410 ,51080 ,51745 ,52410 ,53075 ,95250 ];

    //Create and append select list
    var militaryList = document.createElement("select");
    militaryList.id = "militaryInsuranceSystem";
    b.appendChild(militaryList);

    var militaryList2 = document.createElement("select");
    militaryList2.id = "militaryInsuranceSystem2";
    d.appendChild(militaryList2);

    //Create and append the options
    for (var i = 0; i < militaryArray.length; i++) {
        var militaryOption = document.createElement("option");
        militaryOption.value = militaryArray[i];
        militaryOption.text = militaryArray[i];
        militaryList.appendChild(militaryOption);
    }
    for (var i = 0; i < militaryArray2.length; i++) {
        var militaryOption2 = document.createElement("option");
        militaryOption2.value = militaryArray2[i];
        militaryOption2.text = militaryArray2[i];
        militaryList2.appendChild(militaryOption2);
    }


    // var td = output.insertCell();
    // td.appendChild(document.createTextNode("退休時可領一次金"));
    // var td2 = output.insertCell();
    // td2.appendChild(document.createTextNode("$0"));
    // td2.id = "lifeGet";


    // var militaryRow = document.getElementById("outputRow4");
    var militaryTd1 = militaryRow.insertCell();
    militaryTd1.appendChild(document.createTextNode('軍人保險(一次金)'));
    var militaryTd2 = militaryRow.insertCell();
    militaryTd2.appendChild(document.createTextNode('$0'));
    militaryTd2.id = "militaryInsurance";


    var outputRow2 = document.getElementById("outputRow2");
    while(!outputRow2.hasChildNodes()){
                var outputRow2Td1 = outputRow2.insertCell();
                outputRow2Td1.id = "output2";
                var outputRow2Td2 = outputRow2.insertCell();
                outputRow2Td2.id = "inOnce";

                var outputRow3 = document.getElementById("outputRow3");
                var outputRow3Td1 = outputRow3.insertCell();
                outputRow3Td1.id = "output3";
                var outputRow3Td2 = outputRow3.insertCell();
                outputRow3Td2.id = "amountAccum";
            }


    document.getElementById("output1").innerHTML = "公務人員退休撫卹基金(月領)";
    document.getElementById("output2").innerHTML = "公務人員退休撫卹基金(一次領)";
    document.getElementById("output3").innerHTML = "加總後每月可領";


    var wageRow = document.getElementById("wageRow");
    wageRow.style.display="none";

    var roiOption = document.getElementById("roiOption");
    roiOption.style.display="none";

    var roiHeader = document.getElementById("roiHeader");
    roiHeader.style.display="none";


}

function farmerFunc(){

    document.getElementById("privatetaTd").innerHTML = "";
    document.getElementById("a").innerHTML = "欲投保年資";
    document.getElementById("c").innerHTML = "";

    document.getElementById("output1").innerHTML = "農保每月可領";

    var b = document.getElementById("b");
    while(b.hasChildNodes()){
                b.removeChild(b.firstChild);
            }
    var d = document.getElementById("d");
    while(d.hasChildNodes()){
                d.removeChild(d.firstChild);
            }

    // var output = document.getElementById("output");
    // while(output.hasChildNodes()){
    //             output.removeChild(output.firstChild);
    //         }

    var privatetaRoi = document.getElementById("privatetaRoi");
    while(privatetaRoi.hasChildNodes()){
                privatetaRoi.removeChild(privatetaRoi.firstChild);
            }

    var laborRow = document.getElementById("forLabor");
    laborRow.style.display="none";

    var militaryRow = document.getElementById("outputRow4");
    while(militaryRow.hasChildNodes()){
                militaryRow.removeChild(militaryRow.firstChild);
            }

    //Create array of options to be added
    var farmerArray = [">=15","<15"];

    //Create and append select list
    var farmerList = document.createElement("select");
    farmerList.id = "insuranceYear";
    b.appendChild(farmerList);

    //Create and append the options
    for (var i = 0; i < farmerArray.length; i++) {
        var farmerOption = document.createElement("option");
        farmerOption.value = farmerArray[i];
        farmerOption.text = farmerArray[i];
        farmerList.appendChild(farmerOption);
    }

    while(document.getElementById("outputRow2").hasChildNodes()){
        document.getElementById("outputRow2").removeChild(document.getElementById("outputRow2").firstChild);
    }
    while(document.getElementById("outputRow3").hasChildNodes()){
        document.getElementById("outputRow3").removeChild(document.getElementById("outputRow3").firstChild);
    }


    var wageRow = document.getElementById("wageRow");
    wageRow.style.display="none";

    var roiOption = document.getElementById("roiOption");
    roiOption.style.display="none";

    var roiHeader = document.getElementById("roiHeader");
    roiHeader.style.display="none";



}

function popularFunc(){

    document.getElementById("a").innerHTML = "";
    document.getElementById("c").innerHTML = "";
    document.getElementById("privatetaTd").innerHTML = "";

    document.getElementById("output1").innerHTML = "國民年金每月可領";

    var b = document.getElementById("b");
    while(b.hasChildNodes()){
                b.removeChild(b.firstChild);
            }
    var d = document.getElementById("d");
    while(d.hasChildNodes()){
                d.removeChild(d.firstChild);
            }

    // var output = document.getElementById("output");
    // while(output.hasChildNodes()){
    //             output.removeChild(output.firstChild);
    //         }

    var privatetaRoi = document.getElementById("privatetaRoi");
    while(privatetaRoi.hasChildNodes()){
                privatetaRoi.removeChild(privatetaRoi.firstChild);
            }

    var laborRow = document.getElementById("forLabor");
    laborRow.style.display="none";

    var militaryRow = document.getElementById("outputRow4");
    while(militaryRow.hasChildNodes()){
                militaryRow.removeChild(militaryRow.firstChild);
            }

    while(document.getElementById("outputRow2").hasChildNodes()){
        document.getElementById("outputRow2").removeChild(document.getElementById("outputRow2").firstChild);
    }
    while(document.getElementById("outputRow3").hasChildNodes()){
        document.getElementById("outputRow3").removeChild(document.getElementById("outputRow3").firstChild);
    }


    var wageRow = document.getElementById("wageRow");
    wageRow.style.display="none";

    var roiOption = document.getElementById("roiOption");
    roiOption.style.display="none";

    var roiHeader = document.getElementById("roiHeader");
    roiHeader.style.display="none";



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


    var a = wage;
    var i = roi;
    var g = wageGrowth;
    var b = workAge;
    var c = retireAge;
    var d = lifeLeft;

    // alert(i);


if("labor" == vocation){

    var selfWithdraw = parseFloat(document.getElementById("selfWithdraw").value) / 100;
    var j = selfWithdraw;

    // alert(j);

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


    // var t = a * 0.06 * (i * Math.pow((1+i),(13/12)))/(Math.pow((1+i),(1/12))-1) * (Math.pow((1+g),(z-1)) - Math.pow((1+i),(z-1)))/(g - i);


    var u = (t/12) * (i/(1-(1/Math.pow((1 + (i/12)),12*d))));

    var r = a * j * (i * Math.pow((1+i),(13/12)))/(Math.pow((1+i),(1/12))-1) * (Math.pow((1+g),(z-1)) - Math.pow((1+i),(z-1)))/(g - i);

    var s = (r / 12) * (i/(1 - (1/(Math.pow((1 + (i/12)),12 * d)))));

    var k = 0;

    for (var h = 0; h < z ; h++) {
        // var l = Math.min(( a * Math.pow((1+g),h)), 150000);
        var l = a * Math.pow((1+g),h);
        if (l<150000) {

        }else{
            l = 150000;
        }
        k = k + l * (0.06 + j) * Math.pow((1+i),(z-h));

        // alert("l = "+l+", k = "+k)
    }

    // alert(k);

    var t = k * 12;


    var mon = w + t * (1/12) * (i/(1 - Math.pow((1 + (i/12)), (-d * 12))));

    // alert(t);


    document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
    document.getElementById("inOnce").innerHTML = "$" + Math.round(t);
    document.getElementById("amountAccum").innerHTML = "$" + Math.round(mon);

    document.getElementById("monthlyAmountValue").value = Math.round(mon);

}else if ("functionary" == vocation) {

    var functionaryInsuranceSystem = document.getElementById("functionaryInsuranceSystem").value;
    var functionaryInsuranceSystem2 = document.getElementById("functionaryInsuranceSystem2").value;


    if ("公保&公務人員退休金新制(40歲以下)" == functionaryInsuranceSystem || "公保&公務人員退休金含新舊制(40歲以上)，退撫舊制年資=0" == functionaryInsuranceSystem) {

        var z = c - b;
        var y = Math.min(42, z * 1.2);
        var x = functionaryInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?

        // var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        var w = x * 2 * Math.min(0.7, z * 0.02);
        // var all = v + w * 12 * (1 - Math.pow((1 + (i/12)),((-d) * 12)))/i;

        var mon = w + v * (1/12) * (i/(1 - Math.pow((1 + (i/12)), (-d * 12))));



        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("inOnce").innerHTML = "$" + Math.round(v);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(mon);

        document.getElementById("monthlyAmountValue").value = Math.round(mon);
 
    }else if ("公保&公務人員退休金含新舊制(40歲以上)" == functionaryInsuranceSystem) {

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

        if(u <= 15){
            var y3 = u * 0.05;
        }else if(u > 15){
            var y3 = 0.75 + (u - 15) * 0.01;
        }

        var y2 = z - u;
        var y = Math.min(42, y1 + y2 * 1.2);
        var x = functionaryInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?

        // var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        var w = x * Math.min(0.9, y3) + 930 + x * 2 * Math.min(0.7, y2 * 0.02);
        // var all = v + w * 12 * (1 - Math.pow((1 + (i/12)),((-d) * 12)))/i;

        var mon = w + v * (1/12) * (i/(1 - Math.pow((1 + (i/12)), (-d * 12))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("inOnce").innerHTML = "$" + Math.round(v);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(mon);

        document.getElementById("monthlyAmountValue").value = Math.round(mon);
        
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
        // var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        var w = x * 2 * Math.min(0.7, z * 0.02);
        // var all = v + w * 12 * (1 - Math.pow((1 + (i/12)),((-d) * 12)))/i;

        var mon = w + v * (1/12) * (i/(1 - Math.pow((1 + (i/12)), (-d * 12))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("inOnce").innerHTML = "$" + Math.round(v);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(mon);

        document.getElementById("monthlyAmountValue").value = Math.round(mon);

 
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

        if(u <= 15){
            var y3 = u * 0.05;
        }else if(u > 15){
            var y3 = 0.75 + (u - 15) * 0.01;
        }

        var y2 = z - u;
        var y = Math.min(42, y1 + y2 * 1.2);
        var x = publictaInsuranceSystem2;
        var v = y * x; 

        //有問題(c-d)?(d-c)?
        // var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        var w = x * Math.min(0.9, y3) + 930 + x * 2 * Math.min(0.7, y2 * 0.02);
        // var all = v + w * 12 * (1 - Math.pow((1 + (i/12)),((-d) * 12)))/i;

        var mon = w + v * (1/12) * (i/(1 - Math.pow((1 + (i/12)), (-d * 12))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("inOnce").innerHTML = "$" + Math.round(v);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(mon);

        document.getElementById("monthlyAmountValue").value = Math.round(mon);
    }

}else if ("privateta" == vocation) {

    var privatetaInsuranceSystem2 = document.getElementById("privatetaInsuranceSystem2").value;
    var r = parseFloat(document.getElementById("r").value);

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
    // var v = w * (1 - Math.pow( (1/(1 + (i/12))), (d*12)))/(i/12);

    var v = x * 2 * 0.12 * 12 * (Math.pow((1 + r), z) - 1)/r;
    // var all = v + w * 12 * (1 - Math.pow((1 + (i/12)),((-d) * 12)))/i;

    var mon = w + v * (1/12) * (i/(1 - Math.pow((1 + (i/12)), (-d * 12))));

    document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
    document.getElementById("inOnce").innerHTML = "$" + Math.round(v);
    document.getElementById("amountAccum").innerHTML = "$" + Math.round(mon);

    document.getElementById("monthlyAmountValue").value = Math.round(mon);


}else if ("military" == vocation) {

    var militaryInsuranceSystem = document.getElementById("militaryInsuranceSystem").value;
    var militaryInsuranceSystem2 = document.getElementById("militaryInsuranceSystem2").value;


    if ("軍保&公務人員退休金新制(40歲以下)" == militaryInsuranceSystem || "軍保&公務人員退休金新制(40歲以上)" == militaryInsuranceSystem) {

        var z = c - b;
        var y = Math.min(42, z * 1.2);
        var x = militaryInsuranceSystem2;
        var v = y * x; 


        if (z >= 3) {
            var y1 = Math.min(z , 53);
        } else if (z < 3) {
            var y1 = 0;
        }

        if (z < 20) {
            var v1 = x * 2 * y1;
            var w = 0;
        } else if (z >= 20) {
            var v1 = 0;
            var w = x * 2 * Math.min(0.7, z * 0.02);
        }

        // var all = v + v1 + w * 12 * (1 - Math.pow((1 + (i/12)),((-d) * 12)))/i;


        //有問題(c-d)?(d-c)?
        // var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        var mon = w + v * (1/12) * (i/(1 - Math.pow((1 + (i/12)), (-d * 12))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("inOnce").innerHTML = "$" + Math.round(v1);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(mon);
        document.getElementById("militaryInsurance").innerHTML = "$" + Math.round(v);

        document.getElementById("monthlyAmountValue").value = Math.round(mon);

 
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




        if (u > 15) {
            var y3 = 0.75 + (u - 15) * 0.01;
        }else if (u <= 15) {
            var y3 = u * 0.05;
        }

        var w = x * Math.min(0.9,y3) + 930 + x * 2 * Math.min(0.7, y2 * 0.02);

        if(u < 3){
            var y4 = 0;
        }else if (u >= 3 && u <= 3.5) {
            var y4 = 6;
        }else if (u > 3.5 && u <= 10.5) {
            var y4 = 6 + u - 3.5;
        }else if (u > 10.5 && u < 24) {
            var y4 = 13 + (u - 10.5) * 2;
        }else if (u >= 24) {
            var y4 = 61;
        }

        if (y2 >= 3) {
            var y5 = Math.min(y2 * 1.5, 53);
        }else if (y2 <3) {
            var y5 = 0;
        }

        if (z < 20) {
            var v1 = (x + 930) * y4 + x * 2 * y5;
        }else if (z >= 20) {
            var v1 = 0;
        }

        // var all = v + v1 + w * 12 * (1 - Math.pow((1 + (i/12)),((-d) * 12)))/i;

        //有問題(c-d)?(d-c)?
        // var w = (v * (i/12))/(1 - (1/(Math.pow((1 + (i/12)),(d*12)))));

        var mon = w + v * (1/12) * (i/(1 - Math.pow((1 + (i/12)), (-d * 12))));

        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        document.getElementById("inOnce").innerHTML = "$" + Math.round(v1);
        document.getElementById("amountAccum").innerHTML = "$" + Math.round(mon);
        document.getElementById("militaryInsurance").innerHTML = "$" + Math.round(v);

        document.getElementById("monthlyAmountValue").value = Math.round(mon);

    }

}else if ("farmer" == vocation) {

    var insuranceYear = document.getElementById("insuranceYear").value;

    if (">=15" == insuranceYear) {
        var w = 7256;
        var v = w * (1 - Math.pow( (1/(1 + (i/12))), (d*12)))/(i/12);
        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        // document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);

        document.getElementById("monthlyAmountValue").value = Math.round(w);

    }else if ("<15" == insuranceYear) {
        var w = 3628;
        var v = w * (1 - Math.pow( (1/(1 + (i/12))), (d*12)))/(i/12);
        document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
        // document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);

        document.getElementById("monthlyAmountValue").value = Math.round(w);
    }

}else if ("popular" == vocation) {

    var z = c - b;
    var w = Math.max(18282 * z * 0.0065 + 3628, 18282 * z * 0.013);
    var v = w * (1 - Math.pow( (1/(1 + (i/12))), (d*12)))/(i/12);

    document.getElementById("monthlyAmount").innerHTML = "$" + Math.round(w);
    // document.getElementById("amountAccum").innerHTML = "$" + Math.round(v);

    document.getElementById("monthlyAmountValue").value = Math.round(w);

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







