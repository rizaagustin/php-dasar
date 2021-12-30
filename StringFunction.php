<?php
/*
join =  menggabungkan array menjadi string
explode = memecah string menjadi array
strtolower  = mengubah string menjadi lowercase
strtoupper = mengubah string menjadi uppercarcase
substr = mengambil bagian string
trim = menghapus white space di bekalang dan depan
*/
var_dump(join(",",[12,12,11,10]));
var_dump(explode(" ","Riza Agustin Str kom"));
var_dump(strtoupper("riza agustin"));
var_dump(strtolower("RIZA AGUSTIN"));
var_dump(trim("      RIZA AGUSTIN      "));
var_dump(substr("Riza Agustin",0,3));