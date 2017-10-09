<?php

/* base.html.twig */
class __TwigTemplate_05d78ef9fc2c54c1882cf9e7b0d5ff85bf8f978d95e2f19adee0f421eb5e7fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35bddf79cacb9e7585fc0341813f67d70349bd1b2b25a613578ba597af20a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bddf79cacb9e7585fc0341813f67d70349bd1b2b25a613578ba597af20a588->enter($__internal_35bddf79cacb9e7585fc0341813f67d70349bd1b2b25a613578ba597af20a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_35bddf79cacb9e7585fc0341813f67d70349bd1b2b25a613578ba597af20a588->leave($__internal_35bddf79cacb9e7585fc0341813f67d70349bd1b2b25a613578ba597af20a588_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_794b5e8af2e86d6c77864782cd39050baa91c153e388e14840aa655077c37a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794b5e8af2e86d6c77864782cd39050baa91c153e388e14840aa655077c37a53->enter($__internal_794b5e8af2e86d6c77864782cd39050baa91c153e388e14840aa655077c37a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_794b5e8af2e86d6c77864782cd39050baa91c153e388e14840aa655077c37a53->leave($__internal_794b5e8af2e86d6c77864782cd39050baa91c153e388e14840aa655077c37a53_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5bdd37c01c2ec081ab6f236a71e8667f6ec626fc64afa739203d3c3b8baf8ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdd37c01c2ec081ab6f236a71e8667f6ec626fc64afa739203d3c3b8baf8ddd->enter($__internal_5bdd37c01c2ec081ab6f236a71e8667f6ec626fc64afa739203d3c3b8baf8ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5bdd37c01c2ec081ab6f236a71e8667f6ec626fc64afa739203d3c3b8baf8ddd->leave($__internal_5bdd37c01c2ec081ab6f236a71e8667f6ec626fc64afa739203d3c3b8baf8ddd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_81541bd3ffc42cf41b730a9fe474295968b209b9a18a0dd263c2df1c3b03e3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81541bd3ffc42cf41b730a9fe474295968b209b9a18a0dd263c2df1c3b03e3a6->enter($__internal_81541bd3ffc42cf41b730a9fe474295968b209b9a18a0dd263c2df1c3b03e3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81541bd3ffc42cf41b730a9fe474295968b209b9a18a0dd263c2df1c3b03e3a6->leave($__internal_81541bd3ffc42cf41b730a9fe474295968b209b9a18a0dd263c2df1c3b03e3a6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_593a454e6c60c7c8d926d70601c52feff9cd46f0f9c39993cc960601c7eecc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593a454e6c60c7c8d926d70601c52feff9cd46f0f9c39993cc960601c7eecc96->enter($__internal_593a454e6c60c7c8d926d70601c52feff9cd46f0f9c39993cc960601c7eecc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_593a454e6c60c7c8d926d70601c52feff9cd46f0f9c39993cc960601c7eecc96->leave($__internal_593a454e6c60c7c8d926d70601c52feff9cd46f0f9c39993cc960601c7eecc96_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony/app/Resources/views/base.html.twig");
    }
}
