<?php

/* AdminBundle:Admin:wdfir.html.twig */
class __TwigTemplate_fdab4d0cb475f3c4065d74c5fd8b7969f79bc6c56f32a06456d37c62f94629e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "AdminBundle:Admin:wdfir.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "WDFirewall";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $context["sys"] = 1;
        // line 7
        $context["int"] = 2;
        // line 8
        $context["fir"] = 3;
        // line 9
        $context["ser"] = 4;
        // line 10
        $context["vpn"] = 5;
        // line 11
        $context["sta"] = 6;
        // line 12
        $context["dia"] = 7;
        echo "  

<div class=\"ibox-content\">
<div class=\"row\">
 <h1>Warriors Defender Firewall</h1><br />
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/home"), "html", null, true);
        echo "\">Home</a></li>
        <li class=\"active\">WDFirewall</li>
    </ol>
    </div>
</div>

 <div class=\"wrapper wrapper-content animated fadeInRight\">
   <div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5><a id=\"sys\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdfirselect", array("id" => (isset($context["sys"]) ? $context["sys"] : $this->getContext($context, "sys")))), "html", null, true);
        echo "\">System</a></h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                      <div id=\"select-sys\" class=\"row\">
                      
                    </div>
                    <div id=\"system\" class=\"row\">
                     
                  </div>
                    </div>
                </div>
            </div>
            </div>
      <div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5><a id=\"int\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdfirselect", array("id" => (isset($context["int"]) ? $context["int"] : $this->getContext($context, "int")))), "html", null, true);
        echo "\">Interfaces</a></h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                      <div id=\"select-int\" class=\"row\">
                        
                    </div>
                    <div id=\"interfaces\" class=\"row\">
                     
                  </div>
                    </div>
                </div>
            </div>
      </div>
       <div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5><a id=\"fir\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdfirselect", array("id" => (isset($context["fir"]) ? $context["fir"] : $this->getContext($context, "fir")))), "html", null, true);
        echo "\">Firewall</a></h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                      <div id=\"select-fir\" class=\"row\">
                        
                    </div>
                    <div id=\"firewall\" class=\"row\">
                     
                  </div>
                    </div>
                </div>
            </div>
      </div>
      <div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5><a id=\"ser\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdfirselect", array("id" => (isset($context["ser"]) ? $context["ser"] : $this->getContext($context, "ser")))), "html", null, true);
        echo "\">Services</a></h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                      <div id=\"select-ser\" class=\"row\">
                        
                    </div>
                    <div id=\"services\" class=\"row\">
                     
                  </div>
                    </div>
                </div>
            </div>
      </div>
      <div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5><a id=\"vpn\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdfirselect", array("id" => (isset($context["vpn"]) ? $context["vpn"] : $this->getContext($context, "vpn")))), "html", null, true);
        echo "\">VPN</a></h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                      <div id=\"select-vpn\" class=\"row\">
                        
                    </div>
                    <div id=\"vpn\" class=\"row\">
                     
                  </div>
                    </div>
                </div>
            </div>
      </div>
      <div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5><a id=\"sta\" href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdfirselect", array("id" => (isset($context["sta"]) ? $context["sta"] : $this->getContext($context, "sta")))), "html", null, true);
        echo "\">Status</a></h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                      <div id=\"select-sta\" class=\"row\">
                        
                    </div>
                    <div id=\"status\" class=\"row\">
                     
                  </div>
                    </div>
                </div>
            </div>
      </div>
      <div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5><a id=\"dia\" href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wdfirselect", array("id" => (isset($context["dia"]) ? $context["dia"] : $this->getContext($context, "dia")))), "html", null, true);
        echo "\">Diagnostics</a></h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                            <a class=\"close-link\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                      <div id=\"select-dia\" class=\"row\">
                        
                    </div>
                    <div id=\"diagnostics\" class=\"row\">
                     
                  </div>
                    </div>
                </div>
            </div>
      </div>                
            
 </div>


";
    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        // line 208
        echo "  <script>
   
   \$(document).ready(function(){
   \$('#sys').click(function(event){
        event.preventDefault(); 
       \$('#select-sys').load(\$(this).attr('href')); 
   });
   \$('#int').click(function(event){
        event.preventDefault(); 
       \$('#select-int').load(\$(this).attr('href')); 
   });
   \$('#fir').click(function(event){
        event.preventDefault(); 
       \$('#select-fir').load(\$(this).attr('href')); 
   });
    \$('#ser').click(function(event){
        event.preventDefault(); 
       \$('#select-ser').load(\$(this).attr('href')); 
   });
    \$('#vpn').click(function(event){
        event.preventDefault(); 
       \$('#select-vpn').load(\$(this).attr('href')); 
   });
    \$('#sta').click(function(event){
        event.preventDefault(); 
       \$('#select-sta').load(\$(this).attr('href')); 
   });
    \$('#dia').click(function(event){
        event.preventDefault(); 
       \$('#select-dia').load(\$(this).attr('href')); 
   }); 

});
</script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:wdfir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 208,  275 => 207,  245 => 179,  217 => 154,  189 => 129,  161 => 104,  133 => 79,  105 => 54,  77 => 29,  63 => 18,  54 => 12,  52 => 11,  50 => 10,  48 => 9,  46 => 8,  44 => 7,  42 => 6,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
