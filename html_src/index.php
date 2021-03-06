{% extends "templates/page.html" %}
{% from "templates/macros.html" import navbar %}

{% block ssheets %}
    <link rel="stylesheet" href="css/index.css">
{% endblock %}

{% block title %}Goose Keyboards{% endblock %}

{% block body %}
    {{ navbar("index") }}

    <!-- CAROUSEL -->
    <div id="g01-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#g01-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#g01-carousel" data-slide-to="1"></li>
            <li data-target="#g01-carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="g01.php">
                    <img class="img-responsive center-block" src="res/img/g01/teaser1.jpg" alt="G01 Teaser 1">
                </a>
            </div>
            <div class="item">
                <a href="g01.php">
                    <img class="img-responsive center-block" src="res/img/g01/teaser2.jpg" alt="G01 Teaser 2">
                </a>
            </div>
            <div class="item">
                <a href="g01.php">
                    <img class="img-responsive center-block" src="res/img/g01/teaser3.jpg" alt="G01 Teaser 3">
                </a>
            </div>
        </div>

        <a class="left carousel-control" href="#g01-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#g01-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
{% endblock %}
