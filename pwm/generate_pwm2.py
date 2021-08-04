import RPi.GPIO as GPIO 
from time import sleep  # import sleep function from time module  
  
GPIO.setmode(GPIO.BCM)  # choose BCM numbering scheme  
  
GPIO.setup(4, GPIO.OUT)# set GPIO 21 as output pin
  
pin4 = GPIO.PWM(4, 50)    # create object pin20 for PWM on port 20 at 100 Hertz  
    # create object pin21 for PWM on port 21 at 100 Hertz  

pin4.start(0)              # start pin20 on 0 percent duty cycle (off)  
              # start pin21 on 0 percent duty cycle (off)  

###### read the disk file pwm1.txt for speed value#########################
f1 = open("/var/www/html/robot/pwm/pwm2.txt", "r+")
str1 = f1.read(5)
f1.close()
str1=str1.strip()

duty = float(str1)
pin4.ChangeDutyCycle(duty) 
 #same for pin21
print("duty= ",duty)

while True:
    sleep(1)
    GPIO.cleanup()
