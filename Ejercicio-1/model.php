<?php
//model.php
function open_database_connection()
{
    $link = mysqli_connect("localhost", "root", "admin", "blog_db");
    /* verificar la conexi�n */
    if (mysqli_connect_error()) {
        printf("Conexi�n fallida: %s\n", mysqli_connect_error());
        exit();
    }
    return $link;
}
function close_database_connection($link)
{
    mysqli_close($link);
}
function get_all_posts()
{
    $link =open_database_connection();
    $consulta = "SELECT id, title from post";
    $result = mysqli_query($link, $consulta);
    $posts = array();
    while($row = mysqli_fetch_assoc($result)){
        $posts[] = $row;
    }
    close_database_connection($link);
    return $posts;
}

