Download niyo yun zip file nitong project. <br>
Mag download and install kayo ng xampp na version 3.3.0 na merong 8.0.7 na PHP version. <br>
Then after installation punta kayo sa folder kung saan niyo ininstall yung xampp. <br>
Inside that folder hanapin niyo yung folder na "php" <br>
Sa loob ng php folder hanapin niyo naman yung php.ini bale dalawa dapat yan, isang development tsaka isang production. <br>

Iedit niyo pareho yung dalawang php.ini <br>
Hanapin niyo sa loob ng php.ini yung "extension=gd" using ctrl+f <br>
Pagnakita niyo na tanggalin niyo yung semicolon ";" sa unahan. <br>
Sunod naman hanapin niyo yung "post_max_size" gawin niyo siyang equal sa "32M" or higher. <br>
Next naman is yung "upload_max_filesize" gawin niyo din siyang equal sa "32M" or higher. <br>

Start niyo na yung server na Apache tsaka MySQL <br>
Extract niyo na ngayon yung zip file ng system then ilagay niyo na sa /htdocs folder sa loob ng xampp. <br>
After niyan punta kayo sa "http://localhost/phymyadmin" create kayo bagong database pangalanan niyong "tacas_db" <br>
Then import niyo sa database na yan yung sql file na nasa loob ng folder na "database" (folder ng system na nasa htdocs) <br>
Then tapos na pwede niyo na buksan yung system sa "http://localhost/TACAS-master". <br>

