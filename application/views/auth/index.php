<table>
    <tr>
        <th>id</th>
        <th>名称</th>
        <th>类别</th>
        <th>controller</th>
        <th>action</th>
        <th>父id</th>
        <th>操作</th>
    </tr>
    <?php foreach ($list as $item) {?>
    <tr>
        <td><?php echo $item['id']?></td>
        <td><?php echo $item['name']?></td>
        <td><?php echo Model_Auth::get_type_name($item['type'])?></td>
        <td><?php echo $item['controller']?></td>
        <td><?php echo $item['action']?></td>
        <td><?php echo $item['parent_id']?></td>
        <td><a href="<?php echo URL::site('auth/del')?>?id=<?php echo $item['id']?>">del</a></td>
    </tr>
    <?php }
?>
</table>
