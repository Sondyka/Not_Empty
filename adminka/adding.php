<?php
if(isset($_POST['addpara'])){
    $res = mysqli_query($con,'SELECT * FROM `rozklad` WHERE `seq_num`='.$_POST['seqnum'].' AND `weekday` ="'.$_POST['weekd'].'" ');
    $count = mysqli_num_rows($res);
    $p=explode("|", $_POST['group']);
    if( $count > 0 ) {
        @mysqli_query($con,'UPDATE `rozklad`
        SET `subject`="'.$_POST['subject'].'",`group`="'.$p[0].'",`audience`="'.$_POST['audience'].'",`kurs`="'.$p[1].'",`form`="'.$p[2].'"
        WHERE `seq_num`='.$_POST['seqnum'].' AND `weekday` ="'.$_POST['weekd'].'"');
    } else {
        
        // нет данных
        @mysqli_query($con,'INSERT INTO `rozklad`(`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`)
 VALUES ("'.$_POST['weekd'].'","'.$_POST['subject'].'","'.$p[0].'","'.$_POST['audience'].'",'.$_POST['seqnum'].',"'.$p[1].'","'.$p[2].'")');
    }


}
?>

<?php
if(isset($_POST['plusstud'])){
    $r=explode("|", $_POST['addstud']);
    $res = mysqli_query($con,'SELECT  `id_stud`, `kurs`, `form` FROM `students` WHERE `group`="'.$r[0].'" AND `PIB`="'.$_POST['PIB'].'"');
    $count = mysqli_num_rows($res);
   
    if( $count > 0 ) {
        
    } else {
        
        // нет данных
        @mysqli_query($con,'INSERT INTO `students`(`group`, `PIB`, `id_stud`, `kurs`, `form`) 
        VALUES ("'.$r[0].'","'.$_POST['PIB'].'",NULL,"'.$r[1].'","'.$r[2].'")');
    }


}
?>




<?php 
if(isset($_POST['ratingstud'])){
    $res = mysqli_query($con,'SELECT `rat` FROM `rating` WHERE `type`="'.$_POST['rattype'].'" AND `id_subject`="'.$_POST['ratsubject'].'"  AND `id_stud` ="'.$_POST['ratstud'].'" ');
    $count = mysqli_num_rows($res);
   echo $count;
    if( $count > 0 ) {
    @mysqli_query($con,' UPDATE `rating` SET `rat`= "'.$_POST['rat'].'" WHERE `type`="'.$_POST['rattype'].'" AND `id_subject`="'.$_POST['ratsubject'].'"  AND `id_stud` ="'.$_POST['ratstud'].'" ');
    
} else {
    @mysqli_query($con,'INSERT INTO `rating`(`id_stud`, `id_subject`, `rat`, `type`)
     VALUES ("'.$_POST['ratstud'].'","'.$_POST['ratsubject'].'","'.$_POST['rat'].'","'.$_POST['rattype'].'")');
    }
}
?>