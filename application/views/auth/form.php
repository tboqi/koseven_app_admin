<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>添加权限</title>
    <link href="http://tbq_static.com/ligerui/lib/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" />
    <link href="http://tbq_static.com/ligerui/lib/ligerUI/skins/Gray2014/css/all.css" rel="stylesheet" />
    <script src="http://tbq_static.com/ligerui/lib/jquery/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="http://tbq_static.com/ligerui/lib/ligerUI/js/ligerui.all.js"></script>
    <script src="http://tbq_static.com/ligerui/lib/ligerUI/js/plugins/ligerComboBox.js"></script>
    <script src="http://tbq_static.com/ligerui/lib/ligerUI/js/plugins/ligerCheckBoxList.js"></script>
    <script src="http://tbq_static.com/ligerui/lib/ligerUI/js/plugins/ligerRadioList.js"></script>
    <script src="http://tbq_static.com/ligerui/lib/ligerUI/js/plugins/ligerListBox.js"></script>


    <script type="text/javascript">
        $(function ()
        {
            $("#form1").ligerForm();
        });


    </script>
    <style type="text/css">
            body
            {
                padding-left:10px;
                font-size:13px;
            }
            h1
            {
                font-size:20px;
                font-family:Verdana;
            }
            h4
            {
                font-size:16px;
                margin-top:25px;
                margin-bottom:10px;
            }

            .description
            {
                padding-bottom:30px;
                font-family:Verdana;
            }
            .description h3
            {
                color:#CC0000;
                font-size:16px;
                margin:0 30px 10px 0px;
                padding:45px 0 8px;
                border-bottom:solid 1px #888;
            }
        td {
            padding: 5px;
        }

    </style>

</head>

<body style="padding:10px">
<h1>添加权限</h1>
<form action="<?php echo URL::site('auth/add')?>" method="post">
<div id="form1" >
    <table>
        <tr>
            <td colspan="2">
                <input id="type0" name="type" type="radio" value="0" /><label for="type0">子菜单</label>
                <input id="type1" name="type" type="radio" value="1" /><label for="type1">父菜单</label>
                <input id="type2" name="type" type="radio" value="2" /><label for="type2">操作</label>
            </td>
        </tr>
        <tr>
            <td>controller</td>
            <td>
                <input name="controller" type="text" class="ui-text" />
            </td>
        </tr>
        <tr>
            <td>action</td>
            <td>
                <input name="action" type="text" class="ui-text" />
            </td>
        </tr>
        <tr>
            <td>功能说明</td>
            <td>
                <input name="name" type="text" class="ui-text" />
            </td>
        </tr>
        <tr>
            <td>父菜单</td>
            <td>
            <select name="parent_id">
                <option value="0">请选择</option>
                <?php foreach ($top_menus as $item) {?>
                <option value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
                <?php }
?>
            </select>
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit">保存</button>
            </td>
        </tr>
    </table>
</div>
</form>
</body>
</html>
