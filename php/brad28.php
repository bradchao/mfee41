<?php
    date_default_timezone_set('Asia/Taipei');
?>
<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>Dir/File</th>
        <th>Size</th>
        <th>Time</th>
    </tr>
    <?php
        $dname = ".";
        $dir = opendir($dname);
        while ( $file = readdir($dir)){
            echo '<tr>';
            echo "<td>{$file}</td>";
            if (is_dir("{$dname}/{$file}")){
                echo "<td>[Dir]</td>";
                $size = filesize("{$dname}/{$file}");
                echo "<td align='right'>{$size} bytes</td>";
                // 戳記
                $time = filemtime("{$dname}/{$file}");
                $dtime = date('Y-m-d H:i:s', $time);
                echo "<td>{$dtime}</td>";

            }else if (is_file("{$dname}/{$file}")){
                echo "<td>[File]</td>";
                $size = filesize("{$dname}/{$file}");
                echo "<td align='right'>{$size} bytes</td>";

                $time = filemtime("{$dname}/{$file}");
                $dtime = date('Y-m-d H:i:s', $time);
                echo "<td>{$dtime}</td>";
    
            }else{
                echo "<td>[Unknow]</td>";
                echo "<td></td>";
            }

            
            echo '</tr>';
        }
        closedir($dir);
    ?>
</table>