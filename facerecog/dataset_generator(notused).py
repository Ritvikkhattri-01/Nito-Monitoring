import numpy as np
import cv2
faceDetect = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
cam = cv2.VideoCapture(0)
id = input("Enter your Enrolment Number")
Sample=0
while(True):
    ret, img = cam.read()
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    faces = faceDetect.detectMultiScale(img,1.5,3)
    for(x,y,w,h) in faces:
        Sample=Sample+1
        cv2.imwrite(str(id)+"."+str(Sample)+".jpg", gray[y:y+h,x:x+w])
        cv2.rectangle(img, (x,y), (x+w, y+h), (0,255,0), 2)
        cv2.waitKey(100);
    cv2.imshow("Nito Proctoring", img)
    cv2.waitKey(1);
    if(Sample>20):
        break;
cam.release()
cv2.destroyAllWindows()
        


