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
</style>
<div style="text-align:center;">
    <h1>近1月賺很大</h1>
    <p align="right"><a href="">近1月</a>  <a href="">近3月</a>  <a href="">近6月</a>  <a href="">近1年</a>  <a href="">近3年</a>  <a href="">近5年</a>  <a href="">全期間</a></p>
    <table align="center" >
        <tr>
            <th>名次</th>
            <th>基金名稱</th>
            <th>近三年報酬率</th>
            <th>近一年報酬率</th>
        </tr>
<?php
$result=mysql_query("SELECT all_fund_performance.name,Return1m,Return1y FROM web_data.all_fund_performance where not Return1m='999999' and not Return1y='999999' order by Return1m desc limit 20;");
    for($i=1;$i<=mysql_num_rows($result);$i++){
        $rs=mysql_fetch_row($result);
?>
                    <tr class="tr">
                        <td class="td"><?php echo $i;?></td>
                        <td class="td"><?php echo $rs[0];?></td>
                        <td class="td"><?php echo $rs[1];?></td>
                        <td class="td"><?php echo $rs[2];?></td>
                    </tr>
<?php } ?>        
    </table>
</div>