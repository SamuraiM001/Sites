from flask import Flask, send_file, jsonify, request
from flask_cors import CORS
import json

app = Flask(__name__)
CORS(app)
binasayi = 1


# Define a sample image endpoint
@app.route('/images/<imgn>', methods=['GET'])
def get_image(imgn):
    image_path = f'./{imgn}.jpg'
    return send_file(image_path, mimetype='image/jpeg')


@app.route('/get', methods=['GET'])
def get():
    arr = []
    for i in range(1, binasayi + 1):
        arr.append({
            "id": f"{i}",
            "name": f"Bina {i}",
            "image": f"http://127.0.0.1:5000/images/{i}",
            "price": "5",
        })

    return jsonify(arr)


@app.route('/post', methods=['POST'])
def post():
    data = request.get_json()


    with open('purchase_data.json', 'r') as file:
        existing_data = list(json.load(file))


    # Append the new purchase data to the existing data
    existing_data.append(data)

    # Write the updated data back to the JSON file
    with open('purchase_data.json', 'w') as file:
        json.dump(existing_data, file)

    # Return a response (e.g., success message)
    return jsonify({'message': 'Purchase successful'})


if __name__ == '__main__':
    app.run()
