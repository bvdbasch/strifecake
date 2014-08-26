<tr>
<td>
        <h2><em><?php echo date('d M', strtotime($article['date']));?></em></h2>
</td>
    <td>
        <a href="<?php echo $article['url']; ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
    </td>
</tr>