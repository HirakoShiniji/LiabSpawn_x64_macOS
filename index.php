<!DOCTYPE html>
<center>
<style>
body{
background-color:black;
background-size: 140%;


background-image:url('https://media.giphy.com/media/TKNAEfavYhmOQ/giphy.gif');
}


</style>


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LiabSpawn - Remote macOS Exploit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bytera1n.css" />
    <script src="WAP.js"></script>
</head>
<body>
<center>
<label style="color: white; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size: 50pt;">LiabSpawn - RC1</label>
<form action="wap.php" method="post">
   
   &nbsp;
    <p><input style="border-width:1; border-color:white; border-radius:3pt; color:white; font-size:20pt; background-color:transparent;" type="submit" value="go"/></p>
    <br>
    <label style="color: white; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size: 10pt;">do this at your own risk. cause im not giving you any guarantee about this process. and this may be harmful for your macOS</label>

</body>
</html>
<?php
//Remote OSX Disk Mounter for the environment of jailbreak.


//Remote OSX Disk Mounter for the environment of jailbreak.
function MountDisk(){
    shell_exec("mount dev_ROM.dmg");
    print("testing something...<br>");
    sleep(1);
  
    print("remounting dev_ROM.dmg partition...<br>");
    sleep(1);
  


}
//Alternate of restarting springboard for macOS. this will execute after doing, whole process!
function KillSpringboard(){
    sleep(1);
    print("restarting springboard...<br>");
    mkdir("springboard-attempt");
    shell_exec("cd springboard-attempt ");
    shell_exec("mkdir 1337");
   
    print("");
   

    shell_exec("kill 1");
   


}
function h1337(){
    echo ("<a>  ..<br>");
echo (" ....<br>");
echo ("......<br>");
echo ("......<br>");
echo ("......<br>");
echo (" ....<br>");
MountDisk();
if(MountDisk==true){
    shell_exec("");
  
    KillSpringboard();
}else{
    print("error, unable to do mount process.<br>");
}
sleep(1);


   










}
