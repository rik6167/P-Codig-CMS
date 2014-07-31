This is db fetch view
<?php 

foreach($results as $row){
    echo $row->id;'<br/>';
    echo $row->first_name;'<br/>';
    echo $row->last_name;'<br/>';
}

?>