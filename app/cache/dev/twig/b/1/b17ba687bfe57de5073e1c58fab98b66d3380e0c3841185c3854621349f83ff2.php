<?php

/* AdminBundle:Admin:index.html.twig */
class __TwigTemplate_b17ba687bfe57de5073e1c58fab98b66d3380e0c3841185c3854621349f83ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::login.html.twig", "AdminBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Warriors Defender";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

    <div class=\"middle-box text-center loginscreen  animated fadeInDown\">
        <div>
            <div>

                <h1 class=\"logo-name\">WD</h1>

            </div>
            <h3 class=\"mih3\">Warriors Defender</h3>

             ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "                <span class=\"alert-success\">
                 <h3 class=\"alert alert-info\">";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</h3>
                </span>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            <form class=\"m-t\" role=\"form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\" method=\"POST\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"nombre\" class=\"form-control\" placeholder=\"Username\" required=\"\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\">
                </div>
                <button type=\"submit\" class=\"btn btn-block btn-outline btn-danger\"><h4>Login</h4></button>
            </form>
            <br />
            <h5 class=\"mih3\"> <strong>Admin Warriors Defender &copy; 2015</strong> </h5>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  58 => 19,  55 => 18,  51 => 17,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
