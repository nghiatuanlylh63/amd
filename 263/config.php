<?php
$Secure = true;			#true : private host - false : public host
$password= array(
"Nolove@@123"					# pass1
); 

$homepage = "";
$fileinfo_dir = 'data';		# name folder data
$fileinfo_ext = "dat";		# type file data
$filecookie ="cookie.php";	# file cookie

$download_prefix = "";
$limitMBIP = 1*204900000;	# limit load file for 1 IP (MB)
$ttl = 6*60;				# time to live (in minutes)
$limitPERIP = 1000000;		# (files) limit file per mins
$ttl_ip = 1;			#  (minutes) limit load file per time
$max_jobs_per_ip = 10000;	//total jobs for 1 IP  per time live
$max_jobs = 50000000;			# max total jobs in this host   
$max_load = 50;			# max server load (%)

$title = "[color=red]VNZ-TEAM[/color]"; # Example: [color=blue]http://vinaleeech.com[/color]
$colorfilename = "green";
$colorfilesize = "red";

$ziplink = false;		#true : enable Zip URL to http://adf.ly - false : disable Zip URL to http://adf.ly
# if you want support me, please register from my Referrals ==> http://adf.ly/?id=2694190
$apiadfoc = "http://tinyurl.com/api-create.php?url=";
$listfile = true;		# enable/disable all user can see list files.

$privatefile = false;	# enable/disable other people can see your file in the list files
$privateip = false;		# enable/disable other people can download your file.
$checkacc = false;		# enable/disable all user can use check account.
$checklinksex =  false;	# enable/disable check link 3x,porn...

$modvnl = false;		# enable/disable login host for mod vinaleech
$debrid = true;	#enable/disable get link with debrid plugin
$plugin = 'alldebrid_com.php';	# file plugins
//$plugin = 'debriditalia_com.php';	# file plugins
$directttlink = false;
$action = array(		# action with file in server files, set to true to enable, set to false to disable
'rename' => true,
'delete' => true,
);

# List of Bad Words, you can add more
$badword = array("porn","jav ", "Uncensored","xxx japan", "tora.tora", "tora-tora", "SkyAngle", "Sky_Angel", "Sky.Angel", "Incest","fuck", "Virgin", "PLAYBOY", "Adult", "tokyo hot", "Gangbang", "BDSM", "Hentai", "lauxanh", "homosexual", "bitch" , "Torture", "Nurse", "d�m ?�ng", "c?c d�m", "phim c?p 3", "phim 18+", " Hentai", "Sex Videos", "Adult", "Adult XXX", "XXX movies", "Free Sex", "hardcore", "rape", "jav4u", "javbox", "jav4you", "akiba-online.com","JAVbest.ORG","X-JAV","cnnwe.com","J4v.Us","J4v.Us","teendaythi.com","entnt.com","khikhicuoi","sex-scandal.us","hotavxxx.com"); 


require_once ('languages.php');
?>