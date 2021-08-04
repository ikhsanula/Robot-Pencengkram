import RPi.GPIO as GPIO 
from time import sleep  # import sleep function from time module  
  
GPIO.setmode(GPIO.BCM)  # choose BCM numbering scheme  
  
GPIO.setup(22, GPIO.OUT)# set GPIO 20 as output pin
  
pin22 = GPIO.PWM(22, 100)    # create object pin20 for PWM on port 20 at 100 Hertz  
    # create object pin21 for PWM on port 21 at 100 Hertz  

pin22.start(0)              # start pin20 on 0 percent duty cycle (off)  
              # start pin21 on 0 percent duty cycle (off)  

###### read the disk file pwm1.txt for speed value#########################
f0 = open("/var/www/html/robot/pwm/pwm1.txt", "r+")
str0 = f0.read(5)
f0.close()
str0=str0.strip()

duty = float(str0)
pin22.ChangeDutyCycle(duty) 
 #same for pin21
print("duty= ",duty)

while True:
    sleep(1)
    GPIO.cleanup()
