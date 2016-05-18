<?php

/* AdminBundle:Admin:wdfirtabla.html.twig */
class __TwigTemplate_0bf7723552a1f0891636e3e13028d2fe30114ed940a7cab00e3f20c38c0e20d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("base.html.twig") : ("frontend.html.twig")), "AdminBundle:Admin:wdfirtabla.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div>
     <div class=\"col-md-12\">
        <div class=\"table-responsive\">
         <table class=\"table table-striped table-bordered table-hover\" >
           <thead>
             <tr>
               <th>Nombre</th>
               <th>url</th>
               <th>WDFirewall</th>
             </tr>
           </thead>
           <tbody>
             ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datou"]) ? $context["datou"] : $this->getContext($context, "datou")));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 18
            echo "                <tr>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "url", array()), "html", null, true);
            echo "</td>
                    <td><input type=\"checkbox\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["dato"], "producto2", array()) == 1)) {
                echo " checked=\"checked\" ";
            }
            echo "/></td>
                </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tbody>
            <tfoot>
                       
            </tfoot>
        </table>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:wdfirtabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  59 => 21,  55 => 20,  51 => 19,  48 => 18,  44 => 17,  30 => 5,  27 => 4,  18 => 1,);
    }
}
