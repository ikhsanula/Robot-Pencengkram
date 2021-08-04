import RPi.GPIO as GPIO
import os, time


#from espeak import espeak
m1_1 = 8
m1_2 = 7
m2_1 = 14
m2_2 = 15
#speaker_light=17

def init_gpio():
	GPIO.setmode(GPIO.BCM)
	GPIO.setup(m1_1,GPIO.OUT)
	GPIO.setup(m1_2,GPIO.OUT)
	GPIO.setup(m2_1,GPIO.OUT)
	GPIO.setup(m2_2,GPIO.OUT)
def grip():
	os.system("sudo python3 /var/www/html/robot/pwm/pwm_control2.py")

def of():
	os.system("sudo pkill -f /var/www/html/robot/pwm/pwm_control2.py")
def back():
    print("moving back!!!!!!")
    GPIO.output(m1_1, False)
    GPIO.output(m1_2, True)
    GPIO.output(m2_1, True)
    GPIO.output(m2_2, False)
    
def right():
	GPIO.output(m1_1, True)
	GPIO.output(m1_2, False)
	GPIO.output(m2_1, True)
	GPIO.output(m2_2, False)

def left():
	GPIO.output(m1_1, False)
	GPIO.output(m1_2, True)
	GPIO.output(m2_1, False)
	GPIO.output(m2_2, True)
	
def forward():
	GPIO.output(m1_1, True)
	GPIO.output(m1_2, False)
	GPIO.output(m2_1, False)
	GPIO.output(m2_2, True)
	
def stop():
	GPIO.output(m1_1, True)
	GPIO.output(m1_2, True)
	GPIO.output(m2_1, True)
	GPIO.output(m2_2, True)

