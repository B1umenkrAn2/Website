<form action="" method="get">
    <input type="text" value="<?php echo $keyword ?>" name="keyword">
    <input type="submit" value="search">
</form>

<p><a href="/item/manage">new</a></p>
<p><a href="info/index">info index</a></p>
<p><a href="info/infoAll">info all</a></p>
<table>
    <tr>
        <th>ID</th>
        <th>content</th>
        <th>operation</th>
    </tr>
    <?php foreach ($items as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td>
                <a href="/item/detail/<?php echo $item['id'] ?>" title="details">
                    <?php echo $item['item_name'] ?>
                </a>
            </td>
            
            <td>
                <a href="/item/manage/<?php echo $item['id'] ?>">edit</a>
                <a href="/item/delete/<?php echo $item['id'] ?>">delete</a>
            </td>


        </tr>
    <?php endforeach ?>
</table>