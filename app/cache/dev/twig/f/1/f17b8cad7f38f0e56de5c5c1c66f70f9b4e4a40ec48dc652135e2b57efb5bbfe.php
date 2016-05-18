<?php

/* AdminBundle:Admin:menuedit.html.twig */
class __TwigTemplate_f17b8cad7f38f0e56de5c5c1c66f70f9b4e4a40ec48dc652135e2b57efb5bbfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "AdminBundle:Admin:menuedit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Editar Menu";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"ibox-content\">
<div class=\"row\">
 <h1>Editar Menú</h1><br />
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/listamenu"), "html", null, true);
        echo "\">Lista Menús</a></li>
        <li class=\"active\">Editar Menú</li>
    </ol><hr /><br />
    </div>
     

    <div class=\"row\">
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
        <p>
        Nombre : ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
        </p>
        
        <p>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget');
        echo "
        </p>
        
     ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
 </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:menuedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 24,  60 => 20,  54 => 17,  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
