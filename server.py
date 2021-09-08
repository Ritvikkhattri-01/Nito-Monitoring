
import numpy as np
import os
from flask import Flask, render_template
app = Flask(__name__)

@app.route('/')
def index():
  return render_template('index.html')

@app.route('/my-link/')
def my_link():
  print ('face recognised!')
  os.system('python recognizer.py')
  return 'working'

if __name__ == '__main__':
  app.run(debug=True)
