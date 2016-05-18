<?php

/* AdminBundle:Admin:submenulista.html.twig */
class __TwigTemplate_9a26acb6d37a16cf77eed43e28214fff8b258436d909cfa0ca3fdf91a27afa9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "AdminBundle:Admin:submenulista.html.twig", 1);
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
        echo "Lista Submenu";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"ibox-content\">
<div class=\"forum-item active\">
<div class=\"row\">
<div class=\"col-md-12\">
 <h1>Lista submenú</h1><br />
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/home"), "html", null, true);
        echo "\">Home</a></li>
        <li class=\"active\">Lista Submenú</li>
    </ol>
    </div>
</div>
</div>
     
   


     <div class=\"row\">
        <div class=\"col-xm-12 col-sm-12 col-md-12\">
            <div class=\"panel-heading\">
                <div class=\"panel-options\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a>Todo</a></li>
                        <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/1"), "html", null, true);
        echo "\">System</a></li>
                        <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/2"), "html", null, true);
        echo "\">Interfaces</a></li>
                        <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/3"), "html", null, true);
        echo "\">Firewall</a></li>
                        <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/4"), "html", null, true);
        echo "\">Services</a></li>
                        <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/5"), "html", null, true);
        echo "\">VPN</a></li>
                        <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/6"), "html", null, true);
        echo "\">Status</a></li>
                        <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/detallesubmenu/7"), "html", null, true);
        echo "\">Diagnostics</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

     ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "    <span>
        <h2 class=\"alert alert-info\">";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</h2>
        <br /><br />
    </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "     
     <br />
    <div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"table-responsive\">
    <table class=\"table table-bordered table-striped\">
        <tbody>
            <th>Menú</th>
            <th>Submenú</th>
            <th>&nbsp;</th>
        </tbody>
        ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datosm"]) ? $context["datosm"] : $this->getContext($context, "datosm")));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 60
            echo "        <tr>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dato"], "menu", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>
                 <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/editsubmenu"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "id", array()), "html", null, true);
            echo "\" title=\"Editar\" class=\"btn btn-outline btn-primary\">Editar</a>
                
                 <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/deletesubmenu"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "id", array()), "html", null, true);
            echo "\" title=\"Eliminar\" class=\"btn btn-outline btn-danger\">Eliminar</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </table>
</div>
    <br /><br />
 </div>
</div>

<a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/addsubmenu"), "html", null, true);
        echo "\" title=\"Agregar\" class=\"btn btn-outline btn-success\">Agregar</a>

</div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:submenulista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 76,  165 => 70,  153 => 66,  146 => 64,  141 => 62,  137 => 61,  134 => 60,  130 => 59,  117 => 48,  107 => 44,  104 => 43,  100 => 42,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  47 => 13,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
