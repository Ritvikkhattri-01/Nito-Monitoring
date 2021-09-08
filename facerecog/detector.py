import numpy as np
import cv2
faceDetect = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
cam = cv2.VideoCapture(0)
rec=cv2.face.LBPHFaceRecognizer_create();
rec.read('TrainingImageLabel\TrainingImageLabel\\Trainner.yml')
id=0
font = cv2.FONT_HERSHEY_SIMPLEX
fontScale = 1
fontColor = (255, 255, 255)

while(True):
    ret, img = cam.read()
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    #capturing evry point of the face
    faces = faceDetect.detectMultiScale(img,1.5,3)
    for(x,y,w,h) in faces:
        cv2.rectangle(img, (x,y), (x+w, y+h), (0,255,0), 2)
        id,config = rec.predict(gray[y:y+h, x:x+w])
        if(id==1):
            id="name"
        cv2.putText(img, str(id), (x,y+h), font, fontScale, fontColor)
    cv2.imshow("Nito Proctoring", img)
    if(cv2.waitKey(1)==ord('q')):
        break;
cam.release()
cv2.destroyAllWindows()
        


