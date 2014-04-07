{% extends "layouts/master.volt" %}

{% block title %}Home{% endblock %}

{% block css %}
<link rel="stylesheet" href="{{ static_url('css/yay.css') }}">
{% endblock %}

{% block main %}
<p>The self-hosted fully featured git solution. Works on most any server so long as you have PHP 5.3+ and PhalconPHP 1.2.6+</p>
{% endblock %}