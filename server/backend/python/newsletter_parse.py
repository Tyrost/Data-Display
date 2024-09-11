from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/')
def parse_email_name():
    return

@app.route('/submit', methods=['POST'])
def submit():
    email = request.form['email']
    name = request.form['name']
    return f'Hello'