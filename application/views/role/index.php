<table>
    <tr>
        <th>id</th>
        <th>名称</th>
        <th>操作</th>
    </tr>
    <?php foreach ($list as $item) {?>
    <tr>
        <td><?php echo $item['id']?></td>
        <td><?php echo $item['name']?></td>
        <td><a href="<?php echo URL::site('role/del')?>?id=<?php echo $item['id']?>">del</a></td>
    </tr>
    <?php }
?>
</table>
