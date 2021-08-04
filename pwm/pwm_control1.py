import os, time

os.system("sudo pkill -f generate_pwm1.py")
print("stopped !!!")

#time.sleep(0.1)

print("starting pwm")
os.system("python /var/www/html/robot/pwm/generate_pwm1.py &")
print("started !!!")
