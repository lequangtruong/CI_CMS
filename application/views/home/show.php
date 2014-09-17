<style>
table{
    display: table;
    border-collapse:  separate;
    border-spacing: 2px;
    border-color: gray;
}
th {
    font-weight: bold;
    color: #000000;
    background: #d3dce3;
}
table  tr{
    background: #E5E5E5;
}
</style>

<table>
    <tr>
        <th>ID</th>
        <th>TITLE</th>
    </tr>
<?php
if(isset($category) && count($category)){
    foreach($category as $key => $val){
    ?>
    <tr>
        <td><?php echo $val['id'];?></td>
        <td><?php echo $val['title'];?></td>
    </tr>
    <?php
    }
}
?>

</table>