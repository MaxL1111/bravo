<?php

/* BravoShopBundle:Default:index.html.twig */
class __TwigTemplate_5ee783a2fdcfc707dbcd0994becaef3681fce8d216581a480ee1eaed979fc593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5e37668409c1bbcca64201166313063f73e3866feb3048fd95efaa411e49981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e37668409c1bbcca64201166313063f73e3866feb3048fd95efaa411e49981->enter($__internal_d5e37668409c1bbcca64201166313063f73e3866feb3048fd95efaa411e49981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BravoShopBundle:Default:index.html.twig"));

        $__internal_e98031924a2b8b828889c16a4e2a516046a643f1212bad4c6e758d897139731a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98031924a2b8b828889c16a4e2a516046a643f1212bad4c6e758d897139731a->enter($__internal_e98031924a2b8b828889c16a4e2a516046a643f1212bad4c6e758d897139731a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BravoShopBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!";
        
        $__internal_d5e37668409c1bbcca64201166313063f73e3866feb3048fd95efaa411e49981->leave($__internal_d5e37668409c1bbcca64201166313063f73e3866feb3048fd95efaa411e49981_prof);

        
        $__internal_e98031924a2b8b828889c16a4e2a516046a643f1212bad4c6e758d897139731a->leave($__internal_e98031924a2b8b828889c16a4e2a516046a643f1212bad4c6e758d897139731a_prof);

    }

    public function getTemplateName()
    {
        return "BravoShopBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!", "BravoShopBundle:Default:index.html.twig", "C:\\OpenServer\\domains\\symfony.local\\src\\Bravo\\ShopBundle/Resources/views/Default/index.html.twig");
    }
}
