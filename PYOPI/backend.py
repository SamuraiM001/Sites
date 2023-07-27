from flask import Flask, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

class API:
    def __init__(self, id_token, auth_token, container):
        self.ID_TOKEN = id_token
        self.AUTH_TOKEN = auth_token
        self.container = container

apis = []

@app.route('/<id_token>/<auth_token>')
def get_data(id_token, auth_token):
    for api in apis:
        if api.ID_TOKEN == id_token and api.AUTH_TOKEN == auth_token:
            return api.container
    
    return jsonify({'message': 'No matching API found'})

@app.route('/add/<id_token>/<auth_token>/<api_contains>')
def create_api(id_token, auth_token, api_contains):
    api = API(id_token, auth_token, api_contains)
    apis.append(api)
    return jsonify({'message': 'API added successfully'})

if __name__ == '__main__':
    app.run()
