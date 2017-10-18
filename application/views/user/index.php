<table>
    <tr>
        <th>id</th>
        <th>姓名</th>
        <th>账号</th>
        <th>注册时间</th>
        <th>操作</th>
    </tr>
    <?php foreach ($list as $item) {?>
    <tr>
        <td><?php echo $item['id']?></td>
        <td><?php echo $item['username']?></td>
        <td><?php echo $item['account']?></td>
        <td><?php echo date('Y-m-d H:i:s', $item['create_time'])?></td>
        <td><a href="<?php echo URL::site('admin/user/del')?>?id=<?php echo $item['id']?>">del</a></td>
    </tr>
    <?php }
?>
</table>
