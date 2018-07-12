<table border="1">
    <thead>
        <tr>
            <th><?= $city['name'] ?></th>
            <th>Temperature</th>
            <th>Variance</th>            
        </tr>
    </thead>
    <tbody>
        <?php 
        $temp=0; $var=0;
        foreach($list as $key) : 
            $temp += $key['temp']['day']; 
            $var += ($key['temp']['max']-$key['temp']['min']);
            ?>                            
        <tr>
            <td><?= date('Y-m-d', $key['dt']);?></td>
            <td><?= number_format($key['temp']['day']);?>C</td>
            <td><?= number_format($key['temp']['max']-$key['temp']['min'],1,",",".") ;?>C</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td>Average</td>
            <td><?= number_format($temp/5); ?>C</td>
            <td><?= number_format($var/5,1,",","."); ?>C</td>
        </tr>
    </tfoot>
</table>