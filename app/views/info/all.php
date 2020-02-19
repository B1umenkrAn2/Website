<table>
<!--    <tr>-->
<!--        <th>1</th>-->
<!--        <th>2</th>-->
<!--        <th>3</th>-->
<!--        <th>4</th>-->
<!--        <th>5</th>-->
<!--        <th>6</th>-->
<!--        <th>7</th>-->
<!--        <th>8</th>-->
<!--        <th>9</th>-->
<!--        <th>10</th>-->
<!--        <th>11</th>-->
<!--        <th>12</th>-->
<!--        <th>13</th>-->
<!--        <th>14</th>-->
<!--        <th>15</th>-->
<!--        <th>16</th>-->
<!--        <th>17</th>-->
<!--        <th>18</th>-->
<!--        <th>19</th>-->
<!--        <th>20</th>-->
<!--        <th>21</th>-->
<!--        <th>22</th>-->
<!--        <th>23</th>-->
<!--        <th>24</th>-->
<!--        <th>25</th>-->
<!--        <th>26</th>-->
<!---->
<!---->
<!--    </tr>-->
<!--    --><?php //var_dump($entities); ?>

    <?php foreach ($entities as $item): ?>
        <tr>
            <td><?php echo $item['INFO_ID'] ?></td>
            <td>
                <?php echo $item['PEDON_ID'] ?>

<!--            </td>-->
<!--            <td>-->
<!--                <p> --><?php //echo $item['EXTENT'] ?><!--</p>-->
<!--                <p> --><?php //echo $item['N_SITES'] ?><!--</p>-->
<!--            </td>-->
<!--        </tr>-->
    <?php endforeach ?>
</table>