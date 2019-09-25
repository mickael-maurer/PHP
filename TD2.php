<?php
    include 'utils.inc.php';

?>

<form action="data-processing.php" method="post">
    <input type="text"/><br/>
    <input type="radio"/><br/>
    <input type="text"/><br/>
    <input type="password"/><br/>
    <input type="password"/><br/>
    <input type="text"/><br/>
    <select>
        <option value="France" >France</option><br/>
        <option value="Pakistan" >Pakistan</option><br/>
    </select><br/>
    <input type="checkbox"/><br/>
    <input type="submit" name="action" method="post"/><br/>
</form>

<?php
    end_page();
?>