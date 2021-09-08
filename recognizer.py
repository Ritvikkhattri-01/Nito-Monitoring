import numpy as np
import cv2
import os
import webbrowser
import sys
import phptopython
def getLabels(path):
    imagePaths=[os.path.join(path,f) for f in os.listdir(path)] 
    #create empty ID list
    s_ids=[]
    #now looping through all the image paths and loading the Ids and the images
    for imagePath in imagePaths:
        #getting the Id from the image
        Id=((os.path.split(imagePath)[-1].split('.')[0]))
        s_ids.append(Id)
    return s_ids


faceDetect = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
er=phptopython.main()
print(er)
cam = cv2.VideoCapture(0)
rec=cv2.face.LBPHFaceRecognizer_create();
rec.read('trainner\\trainner.yml')
font = cv2.FONT_HERSHEY_SIMPLEX
fontScale = 1
fontColor = (255, 255, 255)

verify=0
    
while(True):
    ret, img = cam.read()
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    #capturing evry point of the face
    faces = faceDetect.detectMultiScale(img,1.5,3)
    for(x,y,w,h) in faces:
        cv2.rectangle(img, (x,y), (x+w, y+h), (0,255,0), 2)
        id,config = rec.predict(gray[y:y+h, x:x+w])
        #print (id)
        cv2.putText(img, str(id), (x,y+h), font, fontScale, fontColor)
    cv2.imshow("Nito Proctoring", img)
    if(id==er):
        
        print ("correct student,you can start the examination")
        print(id)
        url ='http://localhost/stu_SubCode.php'
        webbrowser.open(url,new=0) 
        cv2.waitKey(10000)
        break
    elif(id!=er):
        print ("invalid user")
        print (id)
        url ='http://localhost/htlogin.php' 
        webbrowser.open(url,new=0) 
        cv2.waitKey(1000)
        break
    else:
        print("cannot detect face,try again")
    if(cv2.waitKey(1)==ord('q')):
        break
cam.release()
cv2.destroyAllWindows()


