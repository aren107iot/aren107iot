<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字管理</p>
    <form method="post" action="?do=tii">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $Ad->all();
                foreach ($rows as $row) {
                ?>
                    <tr>
                      
                        <td>
                            <input type="text" name="text" value="<?= $row['text']; ?>">
                        </td>
                        <td>
                            
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/title.php')" value="新增網站標題圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>

<!-- <style>
    body{
        height: ;
    }
</style> -->