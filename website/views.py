from flask import Blueprint, render_template

views = Blueprint('views', __name__)

@views.route("/")
def index():
    return render_template("index.html")

@views.route("/cotacao")
def cotacao():
    return render_template("cotacao.html")

@views.route("/quemsomos")
def quemsomos():
    return render_template("quemsomos.html")