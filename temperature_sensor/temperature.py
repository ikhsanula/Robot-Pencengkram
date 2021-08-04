#!/usr/bin/python
import RPi.GPIO as GPIO
import time,os

import sys
sys.path.insert(0, '/var/www/html/robot')
import util as ut
import Adafruit_DHT
local_path=os.path.dirname(os.path.realpath(__file__))

sensor = Adafruit_DHT.DHT22
pin = 27
while True:
	humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)
	humidity = humidity*0.9365-3.2749
	temperature = temperature*1.2567-8.1675
	print('Temp={0:0.1f}*C Humidity={1:0.1f}%'.format(temperature, humidity))
	range=temperature
	f1 = open(local_path+"/web/temperature.txt", "w")
	f1.write(str(range))
	f1.close()
	f2 = open("/var/www/html/robot/humidity_sensor/web/humidity.txt", "w")
	f2.write(str(humidity))
	f2.close()

