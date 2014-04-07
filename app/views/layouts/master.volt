<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- helps with tablets or phones viewing the site -->
        <meta name="viewport" content="width=device-width">
        <title>{% block title %}{% endblock %}</title>
        {% block css %}{% endblock %}
    </head>
    <body>
        <div id="page-container">
            <header id="page-header">
                {% block header %}{% endblock %}
            </header>
            <div id="page-main">
                {% block main %}{% endblock %}
            </div>
            <footer id="page-footer">
                {% block footer %}{% endblock %}
            </footer>
        </div>
        {% block js %}{% endblock %}
    </body>
</html>