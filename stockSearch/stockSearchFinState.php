<?php
set_time_limit(0);
mysql_connect("140.119.86.174", "nccu", "nccu"); //連結伺服器
mysql_select_db("stock_market"); //選擇資料庫
mysql_query("set names utf8"); //以utf8讀取資料，讓資料可以讀取中文
$code = $_GET['code'];
//$stock = mysql_query("SELECT name,max(date),close FROM stock_market.stock_price_data where code='$code' ;");
//$rs = mysql_fetch_row($stock);
?>
<div>
    <button onclick="formSubmit('stocktech1')">損益表</button>
    <button onclick="formSubmit('stocktech2')">資產負債表</button>
    <button onclick="formSubmit('stocktech3')">現金流量表</button>
</div>