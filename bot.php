<?php
include("cfg.php");
system("clear");



//color
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";


//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

$reset="\033[0m";      
$Black="\033[0;30m";      
$Red= "\033[0;31m";         
$Green="\033[0;32m";      
$Yellow="\033[0;33m";       
$Blue="\033[0;34m";         
$Purple="\033[0;35m";      
$Cyan="\033[0;36m";       
$White="\033[0;37m";       
$IYellow="\033[0;93m";      
$IRed="\033[0;91m";         
$BIRed="\033[1;91m";   
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";     
$BIBlue="\033[1;94m";      
$BICyan="\033[1;96m";       
$BIBlack="\033[1;90m";     
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";  
$On_White="\033[47m";     
$BIBlue="\033[1;94m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";   
$On_Blue="\033[44m";
$On_Green="\033[42m";  
$IGreen="\033[0;92m";   

//red to yellow shade â†“

$r3="\033[01;38;5;196m";
$r2="\033[01;38;5;202m";
$r1="\033[01;38;5;208m";
$ry="\033[01;38;5;214m";
$y1="\033[01;38;5;220m";
$y2="\033[01;38;5;226m";
$y3="\033[01;38;5;228m";
/* END COLOR */

$pass = "BELAJAR";
$read = file_get_contents("key.txt");
system('clear');
echo $baner = "\033[1;91m
  ____             ____           ___   ____
 / __ \___  ___   / __/__  ____  / _ | / / /
/ /_/ / _ \/ -_) / _// _ \/ __/ / __ |/ / / \033[1;94m
\____/_//_/\__/ /_/  \___/_/   /_/ |_/_/_/  
                                            
\n";

if ($pass == 'no'){
      echo $red2."Script Sudah Di Off Kan\n";
      exit;                                                       }else{
if($read == $pass){
      echo $green2." •Proses Upload Password \n";
      sleep(5);
}
elseif($read != $pass){
      echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");

echo $putih2." •MASUKAN PASSWORD DI SINI : ".$red2;
$p = trim(fgets(STDIN));


system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • / \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • | \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • \ \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • • - \n";
}
system("clear");
echo $green2." •LOADING";
$ar=0;$is=1;while($ar<$is){
$ar++;
echo " • • • • •   Selesai.\n";
}

if($pass == $p){
        fwrite($save, $p);
        echo $putih2."\n •LOGIN BERHASIL\n";
        fclose($save);
        sleep(2);
        echo " •JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
        sleep(3);
        }else{
        echo $red2." •LOGIN GAGAL, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(3);
system("clear");

echo $bener = "
 \033[1;31m____  ____ ___  _ ____  _____  ____  ____  _     _ 
/   _\/  __\\  \///  __\/__ __\/  _ \/ ___\/ \ /|/ \
|  /  |  \/| \  / |  \/|  / \  | / \||    \| |_||| |\033[1;34m
|  \__|    / / /  |  __/  | |  | \_/|\___ || | ||| |
\____/\_/\_\/_/   \_/     \_/  \____/\____/\_/ \|\_/
Script V1"."\n";
echo "\n";
echo "\033[1;94m ======================================================="."\n";
echo $baner2 = "
$putih2 •Creator        :$green2 One For All
$putih2 •Channel YT     :$green2 One For All
$putih2 •Donation Tron  :$green2 TDrbTEiHT7nR4wd5bXVLpkAikrGtGVddJ8
\033[1;94m =======================================================
$red2 •SCRIPT TIDAK DIPERJUALBELIKAN
 •SEGALA RESIKO DI TANGGUNG KALIAN MASING-MASING\n";
echo $blue2." ••••••••••••••••••••••••••••••••••••••••••••••";
echo $red2."\n •PASSWORD DI DESCRIPTION.";
echo $r2."\n •Tanggal Script Expired 2022-02-20.\n";

$tgl_now=date("Y-m-d");
$tgl_exp="2022-02-20";//tanggal expired
if ($tgl_now >=$tgl_exp)
{
 echo $blue2." ••••••••••••••••••••••••••••••••••••••••••••••"."\n";
 echo $merah2." •Warning! •Script Expired"."\n";
}
else
{
  
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$header[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$header[] = "referer: https://cryptoshi.club/session/autofaucet";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cryptoshi.club/session/autofaucet");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "./cookie/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./cookie/cookie.txt");
$res = curl_exec($ch);

$wallet = explode('<i class="fas fa-user-alt"></i> Wallet:',$res)[1];
$wallet = explode('</div>',$wallet)[0];
$coin   = explode('<i class="fas fa-coins"></i> Coins:',$res)[1];
$coin   = explode('</div>',$coin)[0];
echo $purple2."----------------------------------------------"."\n";
echo $hijau2."•Wallet  : ".$yellow2.$wallet;
echo $hijau2."•Coin    : ".$yellow2.$coin."\n";
echo $purple2."----------------------------------------------"."\n";

while(true){
for ($i=60;$i>-1;$i--){
        echo "\r                                   \r";
        echo "\033[01;38;5;220m• Please wait "."\033[0;37m[ "."\033[0;32m".$i."\033[0;37m ]";
if($i==60 or $i==56 or $i==50 or $i==46 or $i==40 or $i==36 or $i==30 or $i==26 or $i==20 or $i==5){echo " .";}
if($i==58 or $i==55 or $i==49 or $i==44 or $i==39 or $i==33 or $i==28 or $i==23 or $i==10 or $i==1){echo " ..";}
if($i==40 or $i==32 or $i==27 or $i==20 or $i==15 or $i==13 or $i==11 or $i==8 or $i==5 or $i==0){echo " \r";}

sleep(1);
}

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$header[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$header[] = "referer: https://cryptoshi.club/session/autofaucet";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cryptoshi.club/session/autofaucet");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "./cookie/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./cookie/cookie.txt");
$res2 = curl_exec($ch);

$wallet = explode('<i class="fas fa-user-alt"></i> Wallet:',$res2)[1];
$wallet = explode('</div>',$wallet)[0];

$coin   = explode('<i class="fas fa-coins"></i> Coins:',$res2)[1];
$coin   = explode('</div>',$coin)[0];

$ltc = explode('<div class="AutoACell AAC-success">
Successfully added', $res2)[1];
$ltc = explode('LTC to your <a href=', $ltc)[0];


date_default_timezone_set('Asia/Jakarta'); 
// Zona Waktu indonesia
$waktu = date('h:i:s a');

echo "Waktu : ".$red2.$waktu."\n";
echo $hijau2."Claim All   : ".$ltc;
echo $yellow2."•LTC•DOGE•ETH•DASH•DGB•TRX•ZEC•USDT•BNB•BCH•SOL•FEY".$red2."\n";



$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$header[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$header[] = "referer: https://cryptoshi.club/session/autofaucet";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cryptoshi.club/session/autofaucet");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "./cookie/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./cookie/cookie.txt");
$res3 = curl_exec($ch);

$wallet = explode('<i class="fas fa-user-alt"></i> Wallet:',$res3)[1];
$wallet = explode('</div>',$wallet)[0];
$coin   = explode('<i class="fas fa-coins"></i> Coins:',$res3)[1];
$coin   = explode('</div>',$coin)[0];

echo $hijau2."Update Coin : ".$coin."\n";


}}