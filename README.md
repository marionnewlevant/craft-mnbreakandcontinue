craft-mnbreakandcontinue
========================

See also [craft-twig-perversion](https://github.com/marionnewlevant/craft-twig_perversion), which has the macro return tag as well.

***This is the Craft 2 version. Craft 3 version is available in the craft3 branch***

{%break%} and {%continue%} twig tags for craft.

**Installation**

- Unzip file
- Place the 'mnbreakandcontinue' folder into your craft/plugins directory
- Install plugin in the Craft Control Panel under Settings > Plugins

**Usage**

`{%break%}` to exit a for loop:

    {% for straw in haystack %}
      {% if straw == needle %}
        {% break %}
      {% endif %}
    {% endfor %}

`{%continue%}` to continue to next iteration:

    {% for straw in haystack %}
      {% if not isInteresting(straw) %}
        {% continue %}
      {% endif %}
      {# do whatever... #}
    {% endfor %}

**Change Log**

- 1.0: Initial release
- 1.1.1: Continue tag now support loop variable
