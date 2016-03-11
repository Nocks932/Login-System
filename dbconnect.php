<?php
if(!mysql_connect("web512.webfaction.com","breakwater","mlhmmlmk"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("timetableweb_db"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>