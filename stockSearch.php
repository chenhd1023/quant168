<?php
include "navbar.html";
?>
<style>
.container {
    width: 100%;
    margin: center;
}

iframe {
    border: 0px;
}
</style>
<div class="container">
<?php
if ($_GET['code'] != null && $_GET['code'] != "") {
	?>
    <input id="inputCode" type="text" name="code" value="<?php echo $_GET['code'] ?>" placeholder="請輸入要搜尋之股票代碼" style="width: 75%;">
    <input type="button" name="button" value="搜尋" onclick="myFunction()" style="width: 20%;">
    <div id="iframeDisplay">
    <iframe src="stockSearch/stockSearchBasic.php?code=<?php echo $_GET['code'] ?>" height="800 px" width="100%"></iframe>
    </div>
    <script>
    function myFunction() {
        document.getElementById("iframeDisplay").innerHTML = "";
        var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", "stockSearch/stockSearchBasic.php?code=" + document.getElementById('inputCode').value);
        ifrm.setAttribute("height", "800 px");
        ifrm.setAttribute("width", "100%");
        document.getElementById("iframeDisplay").appendChild(ifrm);
    }
    </script>

<?php
} else {
	?>
    <input id="inputCode" type="text" name="code" placeholder="請輸入要搜尋之股票代碼" style="width: 75%;">
    <input type="button" name="button" value="搜尋" onclick="myFunction()" style="width: 20%;">
    <div id="iframeDisplay">
    </div>
    <script>
    function myFunction() {
        document.getElementById("iframeDisplay").innerHTML = "";
        var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", "stockSearch/stockSearchBasic.php?code=" + document.getElementById('inputCode').value);
        ifrm.setAttribute("height", "800 px");
        ifrm.setAttribute("width", "100%");
        document.getElementById("iframeDisplay").appendChild(ifrm);
    }
    </script>
<?php
}
?>

</div>