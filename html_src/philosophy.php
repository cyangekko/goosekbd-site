{% extends "templates/page.html" %}
{% from "templates/macros.html" import navbar %}

{% block ssheets %}
    <link rel="stylesheet" href="css/philosophy.css">
{% endblock %}

{% block title %}Our Philosophy{% endblock %}

{% block body %}
    {{ navbar("philosophy") }}

    <!-- QUOTES -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 dark">
                <div class="quote-body">
                    "Simplicity is the ultimate sophistication."
                </div>
                <div class="quote-cite">
                    &mdash; Leonardo da Vinci, 1452.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 dark" id="lastquote">
                <div class="quote-body">
                    "There is no greatness where there is not simplicity."
                </div>
                <div class="quote-cite">
                    &mdash; Leo Tolstoy, 1828.
                </div>
            </div>
        </div>
    </div>

    <!-- TEXT -->
    <div class="container-fluid">
        <div class="row">
            <div clas="col-md-12">
                <div class="textwall text-centered endbuf" id="philosophy-text">
                    Meet <i>minimalism</i>: the simple yet somehow endlessly complex principle
                    that drives our design here at Goose Keyboards, from each bold bezel
                    to every satisfying stroke.
                    <br /><br />
                    We believe that there's a whole lot of simplicity on the path to beauty.
                    With touches of classiness and nostalgic
                    modernity we create keyboards with a truly artful aesthetic.
                </div>
            </div>
        </div>
    </div>
{% endblock %}
