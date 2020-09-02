<?php
        try{
             $db=new PDO('mysql:,host=localhost;dbname=DB_OFICINA',"root","");
        }  catch (ErrorException $se){
            die("ERREUR DE LA BASE DE DONNEE".$se);   
        }
  ?>