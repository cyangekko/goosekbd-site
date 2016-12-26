{% extends "templates/page.html" %}
{% from "templates/macros.html" import navbar %}

{% block ssheets %}
    <link rel="stylesheet" href="css/g01.css">
{% endblock %}

{% block title %}GOOSE 01{% endblock %}

{% block body %}
    {{ navbar("g01") }}

    <div class="row">
        <!-- DESCRIPTION TEXT -->
        <div id="g01-text" class="col-md-5">
            <h2>
                Classic bevels.<br />
                Muted tones.<br />
                Subtle illumination.<br />
            </h2>
        </div>

        <!-- IMAGE -->
        <div id="g01-img" class="col-md-7">
            <img class="img-reponsive" src="res/img/g01/tall.jpg" alt="G01">
        </div>
    </div>

    <!-- TITLE/G-01 -->
    <h1 class="col-md-12 text-centered">
        G-01.
    </h1>
    <h2 class="col-md-12 text-centered">
        Coming Feb. 2017
    </h2>
    <h5 class="col-md-12 text-centered" id="scroll-down">
        (details below)
    </h5>

    <!-- DETAILS -->
    <p class="col-md-12 textwall" id="details">
        With classic bevels, muted tones, and subtle illumination, the G-01 is
        a timeless desktop accessory that strikes boldly wherever it goes.
        <br /><br />
        More specific details coming soon!
    </p>

    <!-- EMAIL FORM -->
    <p class="col-md-12 textwall">
        Want to recieve email updates? Give us your email below:
    </p>
    <form class="col-md-6">
        <div class="form-group">
            <label for="email" class="sr-only">Email:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <button type=submit class="btn btn-default">Submit</button>
    </form>

{% endblock %}