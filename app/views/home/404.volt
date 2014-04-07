{% extends "layouts/master.volt" %}

{% block title %}Home{% endblock %}

{% block css %}
<link rel="stylesheet" href="{{ url('css/404.css') }}">
{% endblock %}

{% block main %}
<p>404 Volt View</p>
{% endblock %}