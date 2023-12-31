<?php
    session_start();
    if (!isset($_SESSION['id'])) header('Location: brad46.php');
    $username = $_SESSION['realname'];
?>
<meta charset="utf-8" />
<script>
    var page = 1;
    var xhttp = new XMLHttpRequest();

    function fetchPageData(){
        xhttp.onreadystatechange = callback;
        var url = 'brad50.php';
        xhttp.open('post', url, true);
        xhttp.setRequestHeader("Content-type", 
            "application/x-www-form-urlencoded");
        xhttp.send('page=' + page);    
    }

    function callback(){
        if (xhttp.readyState == 4 && xhttp.status == 200){
            var table = document.getElementById('table');

            // 清除 第二列以後的 tr
            var trs = table.getElementsByTagName('tr');

            var len = trs.length;
            for (var i=1; i<len; i++){
                table.removeChild(trs[1]);
            }

            var root = JSON.parse(xhttp.responseText);
            console.log(root.length);
            for (var i=0; i<root.length; i++){
                var row = root[i];
                //console.log(row.id + ":" + row.name);

                var tr = document.createElement('tr');
                var td_id = document.createElement('td');
                td_id.innerHTML = row.id; tr.appendChild(td_id);
                var td_name = document.createElement('td');
                td_name.innerHTML = row.name; tr.appendChild(td_name);
                var td_tel = document.createElement('td');
                td_tel.innerHTML = row.tel; tr.appendChild(td_tel);

                var td_pic = document.createElement('td');
                td_pic.innerHTML = '<img src="' + row.pic + '" width="160px" height="90x" />'; 
                tr.appendChild(td_pic);
                
                table.appendChild(tr);
            }
        }
    }

    function prev(){
        page--;
        fetchPageData();
    }
    function next(){
        page++;
        fetchPageData();
    }

    fetchPageData();
</script>

<h1>Brad Big Company</h1>
<hr />
Welcome, <?php echo $username; ?>
<hr />
<a href="logout.php">Logout</a>
<hr />
<input type="button" value="Prev" onclick="prev()"/>
<input type="button" value="Next" onclick="next()"/>
<hr />
<table id="table" border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Image</th>
    </tr>
</table>