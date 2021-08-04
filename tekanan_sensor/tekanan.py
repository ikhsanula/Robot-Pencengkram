import RPi.GPIO as GPIO
import time,os
import board
import busio
import adafruit_ads1x15.ads1015 as ADS

from adafruit_ads1x15.analog_in import AnalogIn
import sys
sys.path.insert(0, '/var/www/html/robot')
import util as ut
local_path=os.path.dirname(os.path.realpath(__file__))

# Create the I2C bus
i2c = busio.I2C(board.SCL, board.SDA)
# Create the ADC object using the I2C bus
ads = ADS.ADS1015(i2c)
# Create single-ended input on channel 0
chan = AnalogIn(ads, ADS.P0)
# chan_2 = AnalogIn(ads, ADS.P1)
# Create differential input between channel 0 and 1
# chan = AnalogIn(ads, ADS.P0, ADS.P1)
cf =19.5

while 1:
	try:
		a = chan.voltage
		preasure = a*cf
		print(a,"CHAN 0: "+"{:>5}\t{:>5.3f}",preasure)
		# print("CHAN 1: "+"{:>5}\t{:>5.3f}".format(chan_2.value, chan_2.voltage))
		f1 = open(local_path+"/web/preasure.txt","w+")
		f1.write(str(preasure))
		f1.close()
		time.sleep(0.5)

	except Exception as e: 
		ut.speak_tts(e,"f")
		pass


