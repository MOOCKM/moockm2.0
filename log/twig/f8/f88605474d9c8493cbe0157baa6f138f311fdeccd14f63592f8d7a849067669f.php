<?php

/* layout.html */
class __TwigTemplate_8be56c19cf3f81aaacb4866cca9513fcbea9fef48a00652a5bda7d6649a5dd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html><body>
\t<header>标题</header>
\t<content>
\t\t";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "\t</content>
\t<footer>底部</footer>
</body></html>";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  33 => 4,  27 => 6,  25 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html><body>
\t<header>标题</header>
\t<content>
\t\t{% block content%}
\t\t{% endblock %}
\t</content>
\t<footer>底部</footer>
</body></html>", "layout.html", "F:\\Wamp\\Wamp_3.0.6\\installtion\\wamp64\\www\\moockm\\app\\views\\layout.html");
    }
}
