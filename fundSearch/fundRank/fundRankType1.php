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
    <h1>今日最佳表現</h1>
    <p align="right"><a href="">今日最佳表現</a>   <a href="">今日最差表現</a></p>
    <table align="center" >
        <tr>
            <th>名次</th>
            <th>基金名稱</th>
            <th>今日漲幅</th>
            <th>近一年報酬率</th>
        </tr>
<?php
$result=mysql_query("SELECT all_fund_performance.name,roc,Return1y FROM web_data.all_fund_performance where not roc='999999' and not Return1y='999999' order by roc desc limit 20;");
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