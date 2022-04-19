<?php

if(isset($_SESSION['message']) && isset($_SESSION['Typemessage']))
{
    if($_SESSION['Typemessage']==="success" )
    {

        echo '<div class="text-center alert alert-success ">'.$_SESSION['message'].'</div>';
    unset($_SESSION['message']);
    }
    else{
        echo '<div class="text-center alert alert-danger ">'.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
    }



}

?>
