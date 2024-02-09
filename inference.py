from flask import Flask, request
from ultralytics import YOLO
import cv2
import numpy as np

app = Flask(__name__)

def resize_image(image, target_width=640):
    height, width, _ = image.shape
    ratio = target_width / width
    resized_image = cv2.resize(image, (int(target_width), int(height * ratio)))
    return resized_image

@app.route('/detect', methods=['POST'])
def detect():
    model = YOLO("best.pt")

    uploaded_file = request.files['image']
    image_np = cv2.imdecode(np.frombuffer(uploaded_file.read(), np.uint8), cv2.IMREAD_COLOR)

    resized_image = resize_image(image_np, target_width=640)

    results = model.predict(resized_image, show=False)

    if results and len(results[0].boxes) > 0:
        confidence = results[0].boxes[0].conf.item() * 100  # Confidence in percentage
        return "Certified Real - Pet Health Certificate"
    else:
        return "Fake - Pet Health Certificate"

if __name__ == '__main__':
    app.run(port=5050, debug=True)
