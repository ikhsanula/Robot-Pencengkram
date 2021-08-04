import time,os
import sys

sys.path.insert(0, '/var/www/html/robot')
import util as ut

local_path=os.path.dirname(os.path.realpath(__file__))

status = sys.argv[1]
#ut.speak_tts(status,"f")

if (status=="1"):
	#print "starting 2 python scripts"
	os.system("sudo python3 /var/www/html/robot/tekanan_sensor/tekanan.py &")
	time.sleep(1) #should be equal to settling time of range sensor
	os.system("sudo python3 /var/www/html/robot/tekanan_sensor/avoid_collisionn.py &")
	
	
if (status=="0"):
	
	ut.speak_tts("sensor off ","f")
	os.system("sudo pkill -f tekanan.py")
	time.sleep(0.1)
	os.system("sudo pkill -f avoid_collisionn.py")
	time.sleep(0.1)
	#os.system("sudo python /var/www/html/robot/pwm/netral.py &")
	f1 = open(local_path+"/web/preasure.txt", "wb")
	f1.write("--")
	f1.close()


