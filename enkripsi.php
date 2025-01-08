<?php    
    echo password_hash('1234',PASSWORD_DEFAULT);
    echo "<br>";
    echo password_verify ('1234','$2y$10$uRVEyt9UQnoCYV5c4xVyQu2Xl7.zR/NZYLkn95BPqYE/tk1Au7WPm');